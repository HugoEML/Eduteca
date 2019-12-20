<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store()
    {
        $msg = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3',
        ]);
        
        Mail::to('gustavomontesinos6@gmail.com')->queue(new MessageReceived($msg));

        alert('Operación exitosa','Recibimos tu mensaje, te responderemos en breve', 'success')->showConfirmButton();

        return back();

    }
}
