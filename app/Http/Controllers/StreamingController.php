<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\DomCrawler\Crawler;

class StreamingController extends Controller
{   
    protected $api;

    public function __construct()
    {       
        $this->api = "https://api.jikan.moe/v3/";
    }

    public function index($id)
    {
    	$episodes = Http::get($this->api."anime/".decrypt($id)."/episodes");

    	$anime = Http::get($this->api."anime/".decrypt($id));
    	
    	// return $anime['episodes'][0];
    	
    	return view('streaming.index',[
    		'episodes' => $episodes,
    		'anime' => $anime,
    	]);
    }

    public function show($anime_id,$startAnimeArray)
    {
    	$anime = Http::get($this->api."anime/".decrypt($anime_id));

    	$animeEpisode = Http::get($this->api."anime/".decrypt($anime_id)."/episodes");
    	$animeChoosed = $animeEpisode['episodes'][$startAnimeArray];
        $url = $animeChoosed['video_url'];

        if (is_null($url)) {
            abort(404);        
        }

        $client = new Client(HttpClient::create(['timeout' => 60]));
        $crawler = $client->request('GET', $url);

        $link = $crawler->filter('iframe')->eq(0)->attr('src');

    	return view('streaming.watch',[
    		'anime' => $anime,
    		'animeChoosed' => $animeChoosed,
            'anime_link_src' => $link,
    	]);
    }
}
