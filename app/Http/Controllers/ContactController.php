<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

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

        try {
            // Send email
            Mail::to('aquafin@gmail.com')->send(new ContactMail($request->all()));
            return redirect()->route('contact')->with('success', 'Pesan berhasil dikirim!');
        } catch (\Exception $e) {
            return redirect()->route('contact')->with('error', 'Gagal mengirim pesan. Silakan coba lagi atau hubungi kami langsung. Error: ' . $e->getMessage());
        }
    }
}
