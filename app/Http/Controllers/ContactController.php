<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'sujet' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $message = Message::create($validated);

        try {
            Mail::to('amadoutangara91@gmail.com')->send(new ContactMail($message));
        } catch (\Exception $e) {
            // Log l'erreur mais continue
        }

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}