<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::view('/about','home.about')->name('about');

Route::view('/anime/categories','anime.categories');
Route::get('/anime/{id}',[AnimeController::class,'show'])->name('anime.show');
Route::get('/anime-details/{id}',[AnimeController::class,'detail'])->name('anime.detail');

Route::get('/search/anime',[SearchController::class,'anime'])->name('search.anime');
Route::view('/anime/watching','anime.anime-watching');

Route::get('/characters/anime/{id}',[CharacterController::class,'index']);
Route::get('/character/{id}',[CharacterController::class,'show']);

Route::get('/genre',[GenreController::class,'index']);
Route::get('/genre/{id}',[GenreController::class,'showByGenre'])->name('genre.show-list');

Route::view('/blog','blog.blog-lists');
Route::view('/blog/details','blog.blog-details');

Route::view('/login','auth.login');
Route::view('/register','auth.register');

Route::view('/group-chat','home.group-chat');