<?php

namespace Rpungello\LaravelRequestLogger;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Rpungello\LaravelRequestLogger\Commands\LaravelRequestLoggerCommand;

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
