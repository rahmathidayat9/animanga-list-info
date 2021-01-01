<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
	protected $api;

    public function __construct()
    {    	
    	$this->api = "https://api.jikan.moe/v3/";
    }

    public function index()
    {
    	return view('home.index',[
    		'topAiring' => $this->getTopAiring(),
    		'topScore'	=> $this->getTopScore(),
    	]);
    }

    public function getTopAiring()
    {
    	return Http::get($this->api."top/anime/1/airing");
    }

    public function getTopScore()
    {
    	return Http::get($this->api."top/anime/1");
    }
}
