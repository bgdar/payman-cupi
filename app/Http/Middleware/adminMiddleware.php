<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\admins;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class adminMiddleware
{
    /**
     * Handle an incoming request.
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        // SIAL AKU BINGUN APA YNG HARUS DI JADIKAN ACUAN UNTUK ADMINUA TIDAK PERLU LOGINLAGI
        // tapi ini adalah ide terbaik sih | nantik kalau terpikirkan lagi 

        // jika bukan role nya user dan
        // ini perlu di cek lagi di admin login dan memberikan role yang sama dengan user adlah admin
        if (!Auth::check() || $user->role != 'admin') {
            return redirect()->route("admin.login");
        }

        return $next($request);
    }
}
