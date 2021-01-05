<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function send(Request $request)
    {
        Mail::to('yeageristlima@gmail.com')
        ->from('fitrisf96@gmail.com')
        ->message('Hi Please Confirm Your Account')
        ->send();
    }
}
