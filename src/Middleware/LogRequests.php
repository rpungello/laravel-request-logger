<?php

namespace Rpungello\LaravelRequestLogger\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Rpungello\LaravelRequestLogger\Facades\RequestLogger;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

class LogRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (SymfonyResponse)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }

    /**
     * Handle tasks after the response has been sent to the browser.
     */
    public function terminate(Request $request, Response $response): void
    {
        RequestLogger::write($request, $response);
    }
}
