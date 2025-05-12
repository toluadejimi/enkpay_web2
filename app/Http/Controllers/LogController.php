<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LogController extends Controller
{
    public function showLogs()
    {
        // Define the log file location
        $logFile = storage_path('logs/laravel.log');

        // Check if the log file exists
        if (File::exists($logFile)) {
            // Get the last 100 lines of the log file
            $logs = collect(File::lines($logFile))->reverse()->take(100);
        } else {
            $logs = collect(['No log file found.']);
        }

        return view('logs.show', compact('logs'));
    }
}
