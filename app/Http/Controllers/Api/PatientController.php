<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PatientController extends Controller
{
    // Register a new patient
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:patients',
            'phone' => 'required|string|max:15|unique:patients',
            'password' => 'required|string|min:6',
        ]);

        // Create new patient
        $patient = Patient::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'is_verified' => false,
        ]);

        // Generate verification token
        $verificationToken = Str::random(32);

        // Save token in a separate table for email verification (optional)
        // Or send an email with the verification token
        Mail::raw("Click the link to verify your account: ".url('/api/patients/verify/'.$verificationToken), function ($message) use ($patient) {
            $message->to($patient->email)
                    ->subject('Verify Your Account');
        });

        return response()->json([
            'message' => 'Registration successful, please verify your email to activate your account.',
            'patient' => $patient,
        ], 201);
    }

    // Verify patient account
    public function verify($token)
    {
        // Assuming we saved the token for the patient, check it and mark the patient as verified
        $patient = Patient::where('verification_token', $token)->first();

        if (!$patient) {
            return response()->json(['message' => 'Invalid verification token'], 400);
        }

        $patient->is_verified = true;
        $patient->save();

        return response()->json(['message' => 'Account verified successfully']);
    }
}

