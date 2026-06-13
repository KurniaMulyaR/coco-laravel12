<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends \App\Http\Controllers\Controller
{


    public function index()
    {
        $messages = ContactMessage::latest()->paginate(10);
        return view('admin.contact-messages.index', compact('messages'));
    }

    public function create()
    {
        return view('admin.contact-messages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'message' => ['required', 'string'],
        ]);

        ContactMessage::create($validated);

        return redirect()->back()
            ->with('success', 'Message berhasil dikirim.');

    }


    public function edit(ContactMessage $contactMessage)
    {
        return view('admin.contact-messages.edit', compact('contactMessage'));
    }

    public function update(Request $request, ContactMessage $contactMessage)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'message' => ['required', 'string'],
        ]);

        $contactMessage->update($validated);

        return redirect()->back()
            ->with('success', 'Message berhasil diperbarui.');

    }

    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();

        return redirect()->back()
            ->with('success', 'Message berhasil dihapus.');

    }
}

