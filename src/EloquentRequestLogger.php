<?php

namespace Rpungello\LaravelRequestLogger;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Rpungello\LaravelRequestLogger\Models\LogEntry;

class EloquentRequestLogger extends RequestLogger
{
    public function write(Request $request, Response $response): void
    {
        LogEntry::create([
            'user_id' => $request->user()->id,
            'server' => $request->server('SERVER_NAME'),
            'ip_address' => $request->ip(),
            'path' => $request->path(),
            'method' => $request->method(),
            'request_headers' => $request->header(),
            'query_string' => $request->query(),
            'request_body' => $request->getContent(),
            'user_agent' => $request->userAgent(),
            'session_id' => $request->session()->getId(),
            'response_status_code' => $response->getStatusCode(),
            'response_headers' => $response->headers->all(),
            'response_body' => $response->getContent(),
            'response_time' => $response->headers->get('X-Response-Time'),
        ]);
    }
}
