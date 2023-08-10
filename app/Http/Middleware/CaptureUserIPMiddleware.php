<?php

namespace App\Http\Middleware;

use App\Models\UserVisit;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

class CaptureUserIPMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $storedIPs = Session::get('stored_ips', []);

        // dd(in_array($request->ip(), $storedIPs));
        $userIpAddress = $request->ip();;
        // $userIpAddress = "137.96.143.251";
        // dd($userIpAddress);
        if (!in_array($request->ip(), $storedIPs)) {

            $geoData = Http::get('http://ip-api.com/json/' . $userIpAddress)->json();
            // if ($geoData && $geoData['status'] === 'success') {

                UserVisit::create($geoData);
                $storedIPs[] = $request->ip();
                Session::put('stored_ips', $storedIPs);

            // }


        }
        return $next($request);
    }
}
