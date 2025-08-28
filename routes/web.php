<?php
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TableRervationController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\admin;
use App\Http\Middleware\authentication;
use Illuminate\Support\Facades\Route;



// User Auth
Route::get("user/login",[UserController::class,"indexLogin"])->name('user.login');
Route::post("user/login/post",[UserController::class,"postLogin"])->name("user.login.post");

Route::get("user/register",[UserController::class,"indexRegister"])->name('user.register');
Route::post("user/register/create",[UserController::class,"createRegister"])->name('user.register.create');

//halaman dashboard user
Route::get('/user',[UserController::class,'index'])->name('user')->middleware(authentication::class);

Route::get('/',  function () {
    //amsbil user yang sedang login saat ini | 
    $isLogin = auth()->user()->name ?? null;

    return view("dashboard",compact('isLogin'));
})->name('dashboard');

Route::get('/about', action: function () {
    return view("about");
})->name('about');

//=======Store start=========
Route::get('/store', [StoreController::class,'index'])->name('store')->middleware(authentication::class);
Route::post('/store/sendProduct',[StoreController::class,"create"])->name('store.send');
//=======Store and =========

//========page revisi meja start===
Route::get('/tableReservations',[TableRervationController::class,'index'])->name('tableReservations')->middleware(authentication::class);
Route::post('/tableReservations/create',[TableRervationController::class,'create'])->name('tableReservations.create');

//========page revisi meja and=====



// ========== ADMIN ROUTE ( private ) ==========


Route::get('/admin',[AdminsController::class,'index'])->name('admin.index')->middleware([authentication::class,admin::class]);

