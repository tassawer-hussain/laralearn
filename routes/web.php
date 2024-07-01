<?php

use Illuminate\Support\Facades\Route;

// Views stored inside the resources/views/ folder
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ['name' => 'Tassawer']);
});

Route::get('/ti-home', function () {
    return view('ti-home', ['name' => 'Tassawer']);
});

Route::get('/ti-about', function () {
    return view('ti-about', ['name' => 'Tassawer']);
});

// Now we can access the home page using http://127.0.0.1:8000/home
// Route::get('/home', function () {
//     return view('welcome');
// });

// We can return simple HTML also.
// Route::get('/home', function () {
//     return "<h1>Welcome<h1>";
// });