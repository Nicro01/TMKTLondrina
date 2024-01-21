<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        Mail::to("contato@tmktlondrina.com.br", "TMKT Londrina")
            ->cc($request->email)
            ->send(new Contact([
                "fromName" => $request->name,
                "fromEmail" => "contato@tmktlondrina.com.br",
                "subject" => "Formulário de contato",
                "message" => $request->message,
            ]));

        return Inertia::render('Contact', [
            'success' => true,
        ]);
    }
}
