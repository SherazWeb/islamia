<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/new', function(){
    return view('hello');
});
Route::get('/new', function(){
    return view('hello');
});