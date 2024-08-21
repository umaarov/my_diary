<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/default.min.css">
    <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script> --}}
    <title>@yield('title', "Umarov's Diary")</title>
</head>
<body>
    <header>
        <h1>Umarov's Diary</h1>
        <nav>
            <a href="{{ route('posts.index') }}">Home</a>
            @yield('breadcrumb')
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script> --}}
</body>
</html>
