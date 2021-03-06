<?php

use Illuminate\Support\Facades\Route;

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

// HOMEPAGE
// Route::get('/', function () {
//   // get comics list
//   $comics = config('comics');
//   return view('home', compact('comics'))->name('home');
// });
Route::get('/', 'HomeController@index')->name('home');

// COMIC DETAIL
Route::get('comic/{id}', 'ComicController@show')->name('comic-detail');
