<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\ButtonClickLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ContactMessagePublicController extends Controller
{
    private const GOOGLE_FORM_URL = 'https://docs.google.com/forms/d/e/1FAIpQLSf6pnzLZvCphGcKH3rT5MJiFf6pxD19D02_EwcQW-jpY8m5IA/formResponse';

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'message' => ['required', 'string'],
        ]);

        $contactMessage = ContactMessage::create($validated);
        $this->forwardToGoogleForm($validated);

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


        // try {
        //     \Mail::to($request->email)
        //         ->send(new \App\Mail\ContactMessageSubmitted($contactMessage));

        // } catch (\Throwable $e) {
        //     \Log::error('Failed to send contact message email', [
        //         'error' => $e->getMessage(),
        //     ]);
        // }


        return back()->with('success', 'Pesan kamu berhasil terkirim. Tim kami akan segera menghubungi kamu.');
    }

     private function forwardToGoogleForm(array $data): void
        {
            try {
                Http::asForm()->timeout(5)->post(self::GOOGLE_FORM_URL, [
                    'entry.1926863613' => $data['name'],
                    'entry.1150496354' => $data['email'],
                    'entry.775943804'  => $data['phone'] ?? '',
                    'entry.2014842371' => $data['message'] ?? '',
                ]);
            } catch (\Throwable $e) {
                Log::warning('Failed to forward contact submission to Google Form: ' . $e->getMessage());
            }
        }
}

