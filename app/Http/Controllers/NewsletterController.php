<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-MailerLite-ApiKey' => env('MAILERLITE_API_KEY'),
        ])->post('https://api.mailerlite.com/api/v2/subscribers', [
            'email' => $request->email,
        ]);

        if ($response->successful()) {
            return redirect()->back()->with('success', 'You have successfully subscribed to our newsletter!');
        } else {
            return redirect()->back()->with('error', 'There was a problem with your subscription.');
        }
    }
}
