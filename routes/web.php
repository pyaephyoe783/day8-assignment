<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('home', ['name' => 'PPA', 'name2' => 'bakhat']);
    return view('home')->with(['name' => 'PPA', 'name2' => 'bakhat', 'name3'=>'mgmg']);
    return view('get')->with(['name'=>'Blade']);
});



Route::get('/get', function () {
    return view('get')->with(['name'=>'Blade']);
});

Route::get('/test2', function () {
    return view('test2')->with(['name'=>'Blade']);
});

Route::get('/welcome', function () {
    return view('welcome');
});
