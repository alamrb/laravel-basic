<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/about', '/');

Route::get('/about/{name}', function ($name) {
    return view('about', ['name' => $name]);
});

Route::view('/home', 'home');
