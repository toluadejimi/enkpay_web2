<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Logs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f7f7f7; }
        .container { width: 80%; margin: 20px auto; }
        .log-line { padding: 5px; font-size: 14px; background-color: #fff; margin: 5px 0; border-radius: 5px; }
        .log-level { font-weight: bold; }
        .log-container { max-height: 400px; overflow-y: scroll; }
        .search-bar { margin-bottom: 15px; }
        .search-input { width: 80%; padding: 8px; }
        .btn { padding: 8px 15px; background-color: #007BFF; color: white; border: none; cursor: pointer; }
        .btn:hover { background-color: #0056b3; }
    </style>
</head>
<body>
<div class="container">
    <h1>Log Viewer</h1>

    <div class="search-bar">
        <input type="text" class="search-input" id="searchQuery" placeholder="Search logs..." />
        <button class="btn" id="searchButton">Search</button>
    </div>

    <div class="log-container">
        <div id="logLines">
            @foreach ($logs as $log)
                <div class="log-line">{{ $log }}</div>
            @endforeach
        </div>
    </div>

    <div class="pagination">
        <!-- Example pagination links (implement server-side pagination if needed) -->
        <button class="btn">Previous</button>
        <button class="btn">Next</button>
    </div>
</div>

<script>
    document.getElementById('searchButton').addEventListener('click', function() {
        var query = document.getElementById('searchQuery').value;

        // Send AJAX request to search logs
        fetch('/logs/search?query=' + query)
            .then(response => response.json())
            .then(data => {
                var logContainer = document.getElementById('logLines');
                logContainer.innerHTML = ''; // Clear current logs

                // Display new logs based on search result
                data.forEach(function(log) {
                    var logElement = document.createElement('div');
                    logElement.className = 'log-line';
                    logElement.innerText = log;
                    logContainer.appendChild(logElement);
                });
            });
    });
</script>
</body>
</html>
