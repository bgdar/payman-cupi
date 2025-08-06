<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// midleware yang akan di daftar
use App\Http\Middleware\admin;
use App\Http\Middleware\authentication;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
      
        //daftar middleware untuk di gunakan secara global
    // $middleware->append(admin::class);
    // $middleware->use([
    //     admin::class,
    //     authentication::class,

    // ]);
    
 } )->withExceptions(function (Exceptions $exceptions): void {
        //
    })
    ->create();
