<?php

namespace Shibu\ValidationGenerator\Console;

use Illuminate\Console\Command;
use Shibu\ValidationGenerator\Services\ValidationGeneratorService;

class ValidateTableCommand extends Command
{
    protected $signature = 'validate-table {tableName}';
    protected $description = 'Generate a validation array for the specified table';

    protected $validationService;

    public function __construct(ValidationGeneratorService $validationService)
    {
        parent::__construct();
        $this->validationService = $validationService;
    }

    public function handle()
    {
        $tableName = $this->argument('tableName');

        try {
            $validationRules = $this->validationService->generateValidationRules($tableName);
            
            $this->info("Validation rules for table '{$tableName}':");
            $output = str_replace(
                ['":', '{', '}'], 
                ['" =>', '[', ']'], 
                json_encode($validationRules, JSON_PRETTY_PRINT)
            );
            $this->line($output);
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }
    }
}
