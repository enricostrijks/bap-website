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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::redirect('/home', '/')->name('home');

Route::get('/account', 'App\Http\Controllers\AccountController@account')->name('account');

Route::get('/elements', 'App\Http\Controllers\DeveloperController@elements')->name('elements');

Route::get('/generic', 'App\Http\Controllers\DeveloperController@generic')->name('generic');

Route::get('/upload', 'App\Http\Controllers\ImageController@upload')->name('upload');

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::post('/postmeme', 'App\Http\Controllers\ImageController@store')->name('postmeme');

Route::get('/memes/{id}', 'App\Http\Controllers\ImageController@memeindivid')->name('meme');

Auth::routes();
