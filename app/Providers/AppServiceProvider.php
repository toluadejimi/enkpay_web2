<?php

namespace App\Providers;

use App\Services\TelegramService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;

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

            $message = date('ymd his').">>>>>>>| Database connection closed successfully";
            send_notification($message);
        });

        app()->terminating(function () {
            $ip = Request::ip(); // Get client IP
            $url = Request::url(); // Get request URL
            $messsage = "Request from IP: " . $ip . " to " . $url . "|". date('y-m-d h-i-s');
            send_notification($messsage);

        });

    }
}
