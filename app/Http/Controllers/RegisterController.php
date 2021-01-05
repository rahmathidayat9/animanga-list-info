<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function send(Request $request)
    {
        Mail::send('isiemail', array('pesan' => 'Apakah Email nya Masuk ?? Aatau Tidak'),function($pesan){
            $pesan->to('yeageristlima@gmail.com')->subject('Verifikasi Akun Anda');
            $pesan->from(env('MAIL_USERNAME','fitrisf96@gmail.com'),'Anime Info List');
        });
    }
}
