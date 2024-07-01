<?php

use Illuminate\Support\Facades\Route;

// Views stored inside the resources/views/ folder
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ['name' => 'Tassawer']);
});

// Now we can access the home page using http://127.0.0.1:8000/home
// Route::get('/home', function () {
//     return view('welcome');
// });

// We can return simple HTML also.
// Route::get('/home', function () {
//     return "<h1>Welcome<h1>";
// });