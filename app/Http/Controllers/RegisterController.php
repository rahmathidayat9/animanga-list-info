<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function send(Request $request)
    {
        Mail::to('yeageristlima@gmail.com')
        ->send('Hi Please Confirm Your Account');
    }
}
