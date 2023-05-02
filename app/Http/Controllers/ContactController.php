<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactUs()
    {
        return view('contacts');
    }
 
    public function thanksPage()
    {
        return view('/thanks');
    }

    public function contactSend(Request $request)
    {
        $nomecognome = $request->input('nome e cognome');
        $email = $request->input('email');
        $description = $request->input('description');
        // return view('/thanks');

        $contactMail = new ContactMail($nomecognome, $email, $description);   
        
        Mail::to('info@hack70.it')->send($contactMail);
        return redirect()->route('thanksPage');
    }
}