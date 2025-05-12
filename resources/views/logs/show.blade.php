<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Logs</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .log-container { margin: 20px; padding: 10px; background-color: #f4f4f4; border-radius: 5px; }
        .log-line { padding: 5px; font-size: 14px; }
    </style>
</head>
<body>
<div class="log-container">
    <h1>Log Viewer</h1>
    <div>
        @foreach ($logs as $log)
            <div class="log-line">{{ $log }}</div>
        @endforeach
    </div>
</div>
</body>
</html>
