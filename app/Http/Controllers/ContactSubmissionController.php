<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class ContactSubmissionController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'trip_interest' => ['required', 'string', 'max:100'],
            'message' => ['required', 'string'],
        ]);

        ContactSubmission::create($data);

        return redirect()
            ->route('contact')
            ->with('success', 'Thanks! We will reply within 24 hours.');
    }
}
