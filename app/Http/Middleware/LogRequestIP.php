<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogRequestIP
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $ip = $request->ip();
        $messsage = "Request from IP: " . $ip . " to " . $request->url(). date('y-m-d h-i-s');
        send_notification($messsage);
        return $next($request);
    }
}
