<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class LogController extends Controller
{
    // Method to display logs
    public function index(Request $request)
    {
        $logFile = storage_path('logs/laravel.log');

        // Check if the log file exists
        if (File::exists($logFile)) {
            $logs = collect(File::lines($logFile))->reverse()->take(50);
        } else {
            $logs = collect(['No log file found.']);
        }

        return view('logs.show', compact('logs'));
    }

    // Method to search logs
    public function search(Request $request)
    {
        $searchQuery = $request->input('query');
        $logFile = storage_path('logs/laravel.log');

        // Filter logs based on the search query
        if (File::exists($logFile)) {
            $logs = collect(File::lines($logFile))->reverse()->filter(function ($line) use ($searchQuery) {
                return str_contains($line, $searchQuery);
            });
        } else {
            $logs = collect(['No log file found.']);
        }

        return response()->json($logs);
    }
}
