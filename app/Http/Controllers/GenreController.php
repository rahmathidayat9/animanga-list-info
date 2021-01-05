<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GenreController extends Controller
{
	protected $api = "https://api.jikan.moe/v3/";

    public function index()
    {
    	// $genres = Http::get($this->api."genre/anime/19");
    	$genres = $this->genreList();
    	return view('genre.index',[
    		'genres' => $genres,
    	]);
    }

    protected function genreList()
    {
    	return [
    		[
    			'mal_id' => '1',
    			'name' => 'Action',
    		],
    		[
    			'mal_id' => '2',
    			'name' => 'Adventure',
    		],
    		[
    			'mal_id' => '4',
    			'name' => 'Comedy',
    		],
    		[
    			'mal_id' => '6',
    			'name' => 'Demons',
    		],
    		[
    			'mal_id' => '7',
    			'name' => 'Mystery',
    		],
    		[
    			'mal_id' => '8',
    			'name' => 'Drama',
    		],
    		[
    			'mal_id' => '9',
    			'name' => 'Ecchi',
    		],
    		[
    			'mal_id' => '10',
    			'name' => 'Fantasy',
    		],
    		[
    			'mal_id' => '11',
    			'name' => 'Game',
    		],
    		[
    			'mal_id' => '12',
    			'name' => 'Hentai',
    		],
    		[
    			'mal_id' => '13',
    			'name' => 'Historical',
    		],
    		[
    			'mal_id' => '14',
    			'name' => 'Horror',
    		],
    		[
    			'mal_id' => '15',
    			'name' => 'Kids',
    		],
    		[
    			'mal_id' => '15',
    			'name' => 'Magic',
    		],
    		[
    			'mal_id' => '18',
    			'name' => 'Mecha',
    		],
    		[
    			'mal_id' => '19',
    			'name' => 'Music',
    		],
    	];
    }
}
