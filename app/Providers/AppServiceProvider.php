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
            $connections = DB::select("SHOW STATUS WHERE `variable_name` = 'Threads_connected'");
            $message = "Active connections before disconnecting: " . $connections[0]->Value;
            send_notification($message);

            DB::disconnect();

            $connectionsAfter = DB::select("SHOW STATUS WHERE `variable_name` = 'Threads_connected'");
             $message = "'Active connections after disconnecting: " . $connectionsAfter[0]->Value;
            send_notification($message);;
        });

    }
}
