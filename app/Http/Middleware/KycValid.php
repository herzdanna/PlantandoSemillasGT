<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class KycValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::User()->kyc_valid == 1) {
            if (Auth::User()->seed) {
                if (Auth::User()->seed_valid == 0 && Auth::User()->id > 973) {
                    return redirect('/verificarmisemilla');
                }else{
                    return $next($request);
                }
            }else{
                return redirect('/create_seed');
            }
        }else{
            if (Auth::user()->address && Auth::user()->city) {
                return redirect('/kyc/step2');
            }else{
                return redirect('/kyc/step1');
            }
        }
    }
}
