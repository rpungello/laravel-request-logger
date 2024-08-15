<?php

namespace Rpungello\LaravelRequestLogger\Facades;

use Illuminate\Support\Facades\Facade;
use Rpungello\LaravelRequestLogger\EloquentRequestLogger;

/**
 * @see \Rpungello\LaravelRequestLogger\LaravelRequestLogger
 */
class RequestLogger extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return config('request-logger.class', EloquentRequestLogger::class);
    }
}
