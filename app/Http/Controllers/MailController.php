<?php

namespace App\Http\Controllers;

use App\Mail\Signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail (){

        $name='bob';
        Mail::to('fake@gmail.com')->send(new Signup($name));
    }
}
