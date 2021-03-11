<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function(){ return view('welcome');});
Route::get('/Test', 'TestController@welcome');

	
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
