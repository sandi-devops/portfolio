<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];
        
        Mail::to('sam0268yg@gmail.com')->send(new ContactMail($data));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
