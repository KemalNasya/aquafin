<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        // Here you can add email sending logic
        // Mail::to('contact@example.com')->send(new ContactMail($request->all()));

        return redirect()->route('contact')->with('success', 'Pesan berhasil dikirim!');
    }
}
