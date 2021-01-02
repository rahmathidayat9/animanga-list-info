<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    protected $api;
    	
	public function __construct()
	{
		$this->api = "https://api.jikan.moe/v3/search/";
	}

    public function anime()
    {
    	request()->validate([
    		'q' => 'required',
    	]);

    	$animeSearchResult = Http::get($this->api."anime?q=".request('q')."&limit=12");

        return view('anime.anime-search-result',['animeSearchResult' => $animeSearchResult]);
    }
}
