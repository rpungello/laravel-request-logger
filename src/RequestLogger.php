<?php

namespace Rpungello\LaravelRequestLogger;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

abstract class RequestLogger
{
    abstract public function write(Request $request, Response $response): void;
}
