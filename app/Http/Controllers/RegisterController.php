<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
	public function index()
	{
		return view('email.form');
	}

    public function send(Request $request){
        try{
            Mail::send('Hai , Segera Akivasi Akun Anda Sekarang Juga', array('pesan' => $request->pesan) , function($pesan) use($request){
                $pesan->to('yeageristlima@gmail.com')->subject('Verifikasi Akun Anda');
                $pesan->from(env('MAIL_USERNAME','fitrisf96@gmail.com'),'Anime Info List');
                // $pesan->attach('https://i.imgur.com/JVLQCHr.jpg');
	            //dd("Sukses ! Email berhasil dikirim");
            });
        }catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }
    }
}
