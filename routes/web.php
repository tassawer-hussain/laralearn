<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Views stored inside the resources/views/ folder
// Route::get('/', function () {
//     return view('welcome');
// });

// Call the welcome view using the WelComerController method index. 
Route::get('/', [WelcomeController::class, 'index']);

Route::get('/home', function () {
    return view('home', ['name' => 'Tassawer']);
});

// Views using Template inheritance
Route::get('/ti-home', function () {
    return view('ti-home', ['name' => 'Tassawer']);
});

Route::get('/ti-about', function () {
    return view('ti-about', ['name' => 'Tassawer']);
});

// Views using Blade component
Route::get('/bc-home', function () {
    return view('bc-home', ['name' => 'Tassawer']);
});

Route::get('/bc-about', function () {
    return view('bc-about', ['name' => 'Tassawer']);
});

// Now we can access the home page using http://127.0.0.1:8000/home
// Route::get('/home', function () {
//     return view('welcome');
// });

// We can return simple HTML also.
// Route::get('/home', function () {
//     return "<h1>Welcome<h1>";
// });