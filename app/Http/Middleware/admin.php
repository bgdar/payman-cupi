<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\admins;
use App\Models\User;
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

    // jika user adlah admin maka izinkan

        if($admins->find(auth()->user()->name) && $admins->find(auth()->user()->password)){

            // Jika admin, lanjutkan ke request berikutnya
            return $next($request);
        }else {
            // untuk sekarang biarkan ada info dulu
            // Jika bukan admin, redirect atau tampilkan pesan error    
            return redirect()->route('dashboard')->with('error', 'You do not have admin access.');
        }


    }
}
