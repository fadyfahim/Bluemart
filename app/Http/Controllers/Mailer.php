<?php

namespace App\Http\Controllers;

use App\Mail\MyTestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Mailer extends Controller
{
    public function sending(){
//        Mail::to('fadyfahim90@gmail.com')->send(new MyTestMail());
    }
}
