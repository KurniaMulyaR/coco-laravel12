<?php

namespace App\Http\Controllers;

use App\Models\ButtonClickLog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ButtonClickLogController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'action' => ['required', 'string', 'max:255'],
            'page' => ['nullable', 'string', 'max:255'],
            'metadata' => ['nullable'],
        ]);

        $userAgent = (string) $request->userAgent();
        $isMobile = $userAgent !== '' && preg_match('/Mobile|Android|iPhone|iPad|iPod/i', $userAgent) === 1;

        ButtonClickLog::create([
            'action' => Str::limit($validated['action'], 255),
            'page' => $validated['page'] ?? null,
            'metadata' => isset($validated['metadata']) && is_string($validated['metadata']) ? $validated['metadata'] : (isset($validated['metadata']) ? json_encode($validated['metadata']) : null),
            'ip' => $request->ip(),
            'user_agent' => $userAgent ?: null,
            'is_mobile' => $isMobile,
        ]);


        return response()->json(['ok' => true]);
    }
}

