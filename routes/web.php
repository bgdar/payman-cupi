<?php
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TableRervationController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\admin;
use App\Models\User;
use Illuminate\Support\Facades\Route;



// User Auth
Route::get("user/login",[UserController::class,"login"])->name('user.login');
Route::get("user/register",[UserController::class,"register"])->name('user.register');
//halaman dashboard user
Route::get('/user',[UserController::class,'index'])->name('user');

Route::get('/',  function () {
    //amsbil user yang sedang login saat ini | 
    $isLogin = auth()->user()->name ?? null;

    return view("dashboard",compact('isLogin'));
})->name('dashboard');

Route::get('/about', function () {
    return view("about");
})->name('about');

//=======Store start=========
Route::get('/store', [StoreController::class,'index'])->name('store');
//=======Store and =========

//========page revisi meja start===
Route::get('/tableReservations',[TableRervationController::class,'index'])->name('tableReservations');
Route::post('/tableReservations/create',[TableRervationController::class,'create'])->name('tableReservations.create');

//========page revisi meja and=====



// ========== ADMIN ROUTE ( private ) ==========

// akses ke route /admin hanya diperbolehkan jika pengguna memenuhi dua middleware sekaligus: auth dan admin.
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin',[AdminsController::class,'index'])->middleware('auth')->middleware('admin')->name('admin.index'); {
// }});
Route::get('/admin',[AdminsController::class,'index'])->name('admin.index')->middleware(admin::class);

