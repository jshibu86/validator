<?php

namespace Shibu\ValidationGenerator;

use Illuminate\Support\ServiceProvider;
use Shibu\ValidationGenerator\Console\ValidateTableCommand;
use Shibu\ValidationGenerator\Services\ValidationGeneratorService;

class ValidationGeneratorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(ValidationGeneratorService::class, function ($app) {
            return new ValidationGeneratorService();
        });

        $this->commands([
            ValidateTableCommand::class,
        ]);
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/data/validationGeneratorConfig.json' => resource_path('vendor/gaza-validation-generator/validationGeneratorConfig.json'),
        ]);
    }
}
