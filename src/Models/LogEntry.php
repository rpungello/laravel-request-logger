<?php

namespace Rpungello\LaravelRequestLogger\Models;

use Illuminate\Database\Eloquent\Model;

class LogEntry extends Model
{
    protected $table = 'request_logs';

    protected $fillable = [
        'user_id',
        'server',
        'ip_address',
        'path',
        'method',
        'request_headers',
        'query_string',
        'request_body',
        'user_agent',
        'session_id',
        'response_status_code',
        'response_headers',
        'response_body',
        'response_time',
    ];

    protected $casts = [
        'request_headers' => 'json',
        'response_headers' => 'json',
        'response_status_code' => 'int',
        'response_time' => 'int',
    ];
}
