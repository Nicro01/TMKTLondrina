<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store()
    {
        Mail::to("nicolasmagalhaes2003@gmail.com")->send(new ContactMail());
    }
}
