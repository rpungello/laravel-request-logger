<?php

namespace Rpungello\LaravelRequestLogger;

use Rpungello\LaravelRequestLogger\Commands\LaravelRequestLoggerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelRequestLoggerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-request-logger')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_request_logger_table')
            ->hasCommand(LaravelRequestLoggerCommand::class);
    }
}
