<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /* Contact Form submission */
    public function contactSubmit(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|min:2',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Log data for debugging
        Log::info('Email Data: ', $validatedData);

        try {
            // Send the email
            Mail::send('Email.contact', ['data' => $validatedData], function ($message) use ($validatedData) {
                $message->to('don251971@gmail.com')
                        ->subject($validatedData['subject'])
                        ->from($validatedData['email'], $validatedData['name']);
            });

            // Return JSON response with success message
            return response()->json([
                'status' => 'success',
                'message' => 'Your message has been sent successfully!'
            ], 200);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Mail sending failed: ', ['error' => $e->getMessage()]);

            // Return JSON response with error message
            return response()->json([
                'status' => 'error',
                'message' => 'There was an error sending your message. Please try again later.'
            ], 500);
        }
    }
}