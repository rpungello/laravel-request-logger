<?php

namespace Rpungello\LaravelRequestLogger\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rpungello\LaravelRequestLogger\LaravelRequestLogger
 */
class LaravelRequestLogger extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Rpungello\LaravelRequestLogger\LaravelRequestLogger::class;
    }
}
