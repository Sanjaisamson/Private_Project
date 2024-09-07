<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobApplicationMail; // Import the Mailable class

class ApplicationController extends Controller
{
    /**
     * Handle the application form submission.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function submitApplication(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|min:2',
            'email' => 'required|email',
            'phone' => 'required|regex:/^\+?[1-9]\d{1,14}$/', // Simple phone number validation
            'position' => 'required|string',
            'cv' => 'required|file|mimes:doc,docx,pdf|max:3072', // Validate file type and size
        ]);

        // Handle file upload
        $cvPath = null;
        if ($request->hasFile('cv')) {
            $cv = $request->file('cv');
            $cvPath = $cv->store('cv_uploads', 'public'); // Store CV in 'storage/app/public/cv_uploads'
        }

        // Log data for debugging
        Log::info('Application Data: ', $validatedData);

        // Send email with attachment
        try {
            Mail::to('don251971@gmail.com')->send(new JobApplicationMail($validatedData, $cvPath));

            // Return a JSON response with a success message
            return response()->json([
                'status' => 'success',
                'message' => 'Your application has been submitted successfully!'
            ]);
        } catch (\Exception $e) {
            Log::error('Application Error: ', ['error' => $e->getMessage()]);

            return response()->json([
                'status' => 'error',
                'message' => 'There was an error submitting your application. Please try again later.'
            ], 500);
        }
    }
}
