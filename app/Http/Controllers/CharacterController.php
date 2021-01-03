<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CharacterController extends Controller
{
    
    protected $api;

    public function __construct()
    {    	
    	$this->api = "https://api.jikan.moe/v3/";
    }

	public function index($id)
	{
		$characters = Http::get($this->api."anime/".decrypt($id)."/characters_staff");

		return view('character.index',['characters' => $characters]);	
	}

	public function show($id)
	{
		$character = Http::get($this->api."character/".decrypt($id));

		return view('character.show',['character' => $character]);
	}
}
