<?php

namespace Shibu\ValidationGenerator\Services;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ValidationGeneratorService
{
    public function generateValidationRules($tableName)
    {
        $exclude = ['id', 'created_at', 'updated_at', 'deleted_at'];

        if (!Schema::hasTable($tableName)) {
            throw new \Exception("Table '{$tableName}' does not exist.");
        }

        // Get column details from the information schema
        $columns = DB::select("
            SELECT COLUMN_NAME as name, DATA_TYPE as type_name, IS_NULLABLE as nullable, CHARACTER_MAXIMUM_LENGTH as max_length 
            FROM information_schema.COLUMNS 
            WHERE TABLE_NAME = ? 
            AND TABLE_SCHEMA = DATABASE()", [$tableName]);

        $validationRules = [];

        foreach ($columns as $column) {
            if (in_array($column->name, $exclude)) {
                continue;
            }

            $rules = [];

            if ($column->nullable === 'YES') {
                $rules[] = 'nullable';
            } else {
                $rules[] = 'required';
            }

            // Type-specific rules
            $typeName = strtolower($column->type_name);

            if (in_array($typeName, ['varchar', 'text', 'char'])) {
                $rules[] = 'string';
                if ($column->max_length) {
                    $rules[] = 'max:' . $column->max_length;
                }
            } elseif (in_array($typeName, ['int', 'bigint', 'smallint'])) {
                $rules[] = 'integer';
            } elseif (in_array($typeName, ['decimal', 'float', 'double'])) {
                $rules[] = 'numeric';
            } elseif (in_array($typeName, ['timestamp', 'datetime', 'date'])) {
                $rules[] = 'date';
            } elseif ($typeName === 'boolean') {
                $rules[] = 'boolean';
            }

            $validationRules[$column->name] = $rules;
        }

        return $validationRules;
    }
}
