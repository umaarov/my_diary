<!-- resources/views/404.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page Not Found</title>
    <style>
        body { text-align: center; padding: 50px; }
        h1 { font-size: 3em; }
        p { font-size: 1.5em; }
    </style>
</head>
<body>
    <h1>404</h1>
    <p>This page fucking doesn’t exist</p>
    <a href="{{ url('/') }}">Return to Home</a>
</body>
</html>
