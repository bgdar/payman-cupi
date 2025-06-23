<?php
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view("dashboard");
});

Route::get('/about', function () {
    return view("about");
})->name('about');

//=======Store start=========
Route::get('/store', [StoreController::class,'index'])->name('store');
//=======Store and =========
