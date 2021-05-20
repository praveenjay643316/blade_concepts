<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('projects.home',['name' => 'Expert solution']);
// });
// Route::get('about', function () {
//     return view('projects.about');
// });

// Route::get('contact', function () {
//     return view('projects.contact');
// });

Route::get('/', 'App\Http\Controllers\PageController@home');
Route::get('about', 'App\Http\Controllers\PageController@about');
Route::get('contact', 'App\Http\Controllers\PageController@contact');




