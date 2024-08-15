<?php

namespace Rpungello\LaravelRequestLogger;

use Rpungello\LaravelRequestLogger\Commands\LaravelRequestLoggerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class RequestLogServiceProvider extends PackageServiceProvider
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
            ->hasMigration('create_request_logs_table');
    }
}
