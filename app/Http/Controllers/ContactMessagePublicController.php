<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\ButtonClickLog;
use Illuminate\Http\Request;

class ContactMessagePublicController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'message' => ['required', 'string'],
        ]);

        $contactMessage = ContactMessage::create($validated);

        // Log (IP) untuk event "send message" (klik submit / kirim form)
        $userAgent = (string) $request->userAgent();
        $isMobile = $userAgent !== '' && preg_match('/Mobile|Android|iPhone|iPad|iPod/i', $userAgent) === 1;

        ButtonClickLog::create([
            'action' => 'send_message',
            'page' => $request->path(),
            'metadata' => json_encode([
                'name' => $contactMessage->name,
                'email' => $contactMessage->email,
            ]),
            'ip' => $request->ip(),
            'user_agent' => $userAgent ?: null,
            'is_mobile' => $isMobile,
        ]);


        try {
            \Mail::to($request->email)
                ->send(new \App\Mail\ContactMessageSubmitted($contactMessage));

        } catch (\Throwable $e) {
            \Log::error('Failed to send contact message email', [
                'error' => $e->getMessage(),
            ]);
        }


        return redirect()->back()->with('success', 'Message berhasil dikirim.');
    }
}

