<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TableRervationController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\adminMiddleware;
use App\Http\Middleware\authentication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



// User Auth
Route::get("user/login", [UserController::class, "userLogin"])->name('user.login');
Route::post("user/login/post", [UserController::class, "postLogin"])->name("user.login.post");

Route::get("user/register", [UserController::class, "indexRegister"])->name('user.register');
Route::post("user/register/create", [UserController::class, "createRegister"])->name('user.register.create');

//halaman dashboard user
Route::get('/user', [UserController::class, 'index'])->name('user')->middleware(authentication::class);

Route::get('/',  function () {
    // ambil properti name jika tidak null
    $loginName = Auth::check() ? Auth::user()->name : null;
    return view("dashboard", compact('loginName'));
})->name('dashboard');

Route::get("/profile", [UserController::class, "profile"])->middleware(authentication::class)->name("profile");

Route::get('/about', action: function () {
    return view("about");
})->name('about');

//=======Store start=========
Route::get('/store', [StoreController::class, 'index'])->name('store')->middleware(authentication::class);
Route::post('/store/sendProduct', [StoreController::class, "create"])->name('store.send');
//=======Store and =========

//========page revisi meja start===
Route::get('/tableReservations', [TableRervationController::class, 'index'])->name('tableReservations')->middleware(authentication::class);
Route::post('/tableReservations/create', [TableRervationController::class, 'create'])->name('tableReservations.create');

//========page revisi meja and=====

// ========== ADMIN ROUTE ( private ) ==========
Route::get('/admin', [AdminsController::class, 'index'])->name('admin.dashboard')->middleware([adminMiddleware::class, authentication::class]);
Route::get("/admin/login", [AdminsController::class, "adminLogin"])->name("admin.login");
Route::post("/admin/login/create", [AdminsController::class, "adminPostLoggin"])->name("admin.login.create");
