<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Now we can access the home page using http://127.0.0.1:8000/home
Route::get('/home', function () {
    return view('welcome');
});
