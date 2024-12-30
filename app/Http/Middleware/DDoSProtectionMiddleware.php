<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;

class DDoSProtectionMiddleware
{
    protected $maxRequests = 100; // Max requests within the time window
    protected $decaySeconds = 60; // Time window in seconds
    protected $blockDuration = 300; // Block duration in seconds (5 minutes)
    public function handle($request, Closure $next)
    {
        $ip = $request->ip();
        $cacheKey = 'request_count_' . $ip;
        $blockKey = 'blocked_' . $ip;

        if (Cache::has($blockKey)) {
            $message = "IP >>>>>> | $ip | Too many requests. You are temporarily blocked";
            send_notification($message);
            return response('Too many requests. You are temporarily blocked.', 429);
        }

        $requestCount = Cache::increment($cacheKey);

        if ($requestCount === 1) {
            Cache::put($cacheKey, 1, $this->decaySeconds);
        }

        if ($requestCount > $this->maxRequests) {
            Cache::put($blockKey, true, $this->blockDuration);
            Cache::forget($cacheKey); // Reset request count

            $message = "IP >>>>>> | $ip | Too many requests. You are temporarily blocked";
            send_notification($message);

            return response('Too many requests. You are temporarily blocked.', 429);
        }

        return $next($request);
    }
}
