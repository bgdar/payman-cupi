<?php
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TableRervationController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view("dashboard");
})->name('dashboard');

Route::get('/about', function () {
    return view("about");
})->name('about');

//=======Store start=========
Route::get('/store', [StoreController::class,'index'])->name('store');
//=======Store and =========

//========page revisi meja start===
Route::get('/tableReservations',[TableRervationController::class,'index'])->name('tableReservations');

//========page revisi meja and=====
