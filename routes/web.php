<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('home', ['name' => 'PPA', 'name2' => 'bakhat']);
    return view('home')->with(['name' => 'PPA', 'name2' => 'bakhat']);
});

Route::get('/welcome', function () {
    return view('welcome');
});
