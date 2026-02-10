<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Symfony\Component\HttpFoundation\Response;

class checkuser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Pastikan pengguna sudah diautentikasi
        if (FacadesAuth::check()) {
            // Izinkan akses untuk admin ke semua rute
            if (Auth()->user()->level == 'admin') {
                return $next($request);
            }

            // Izinkan akses untuk karangtaruna ke rute tertentu
            if (Auth()->user()->level == 'karangtaruna') {
                return $next($request);
            }

            // Izinkan akses untuk karangtaruna ke rute tertentu
            if (Auth()->user()->level == 'user') {
                return $next($request);
            }
        }

        // Arahkan pengguna non-admin atau non-'karangtaruna' ke /dashboard
        return redirect('/dashboard')->with('error', 'You do not have access.');
    }
}
