<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\HomeController;
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
Route::get('/search/anime',[SearchController::class,'anime'])->name('search.anime');
Route::view('/anime/watching','anime.anime-watching');

Route::get('/anime/{id}/characters',[AnimeController::class,'characters']);

Route::view('/blog','blog.blog-lists');
Route::view('/blog/details','blog.blog-details');

Route::view('/login','auth.login');
Route::view('/register','auth.register');

Route::view('/group-chat','home.group-chat');