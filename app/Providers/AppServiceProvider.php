<?php

namespace App\Providers;

use App\Services\TelegramService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpFoundation\Response;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(TelegramService::class, function ($app) {
            return new TelegramService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        app()->terminating(function () {
            DB::disconnect();
        });

        $ip = Request::ip();
        $key = "ip_attempts:{$ip}";

        // Increment the request count
        $attempts = Cache::increment($key);

        // Set cache expiration for the key (if it's the first request)
        if ($attempts === 1) {
            Cache::put($key, $attempts, now()->addMinutes(1));
        }

        // Block the IP after too many requests
        if ($attempts > 5) {
            $message = "Too many requests from your IP";
            send_notification($message);

            abort(Response::HTTP_TOO_MANY_REQUESTS, 'Too many requests from your IP.');
        }

    }
}
