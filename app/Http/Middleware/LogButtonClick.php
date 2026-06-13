<?php

namespace App\Http\Middleware;

use App\Models\ButtonClickLog;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LogButtonClick
{
    public function handle(Request $request, Closure $next)
    {
        // Only log when action is provided.
        $action = $request->input('action');
        if (!is_string($action) || trim($action) === '') {
            return $next($request);
        }

        $page = $request->input('page');
        $metadata = $request->input('metadata');

        ButtonClickLog::create([
            'action' => Str::limit($action, 255),
            'page' => is_string($page) ? Str::limit($page, 255) : null,
            'metadata' => is_string($metadata) ? $metadata : (is_array($metadata) ? json_encode($metadata) : null),
            'ip' => $request->ip(),
        ]);

        return $next($request);
    }
}

