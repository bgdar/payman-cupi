<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\admins;
use Symfony\Component\HttpFoundation\Response;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

       // validasi jika admin ata bukan 
$admins = admins::all();

        // if($admins-)

      
        // Jika bukan admin, redirect atau tampilkan pesan error    

        return $next($request);


    }
}
