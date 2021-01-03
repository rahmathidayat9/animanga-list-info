<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
	protected $api;

    public function __construct()
    {    	
    	$this->api = "https://api.jikan.moe/v3/";
    }

	public function show($id)
	{
		$anime = Http::get($this->api."anime/".decrypt($id));

		return view('anime.anime-details',['anime' => $anime]);
	}
	
	public function characters($id)
	{
		$characters = Http::get($this->api."anime/".decrypt($id)."/characters_staff");

		return view('anime.character',['' => $characters]);	
	}
}
