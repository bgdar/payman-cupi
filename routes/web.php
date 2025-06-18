<?php

use Illuminate\Support\Facades\Route;

//halama utama 
Route::get('/', function () {
    return view("dashboard");
});
//halama utama 
Route::get('/about', function () {
    return view("katagory.about");
});

