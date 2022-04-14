<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Blog - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jura&display=swap" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<header class="header">
    <div class="container">
        <nav>
            <ul class="header__nav">
                <li><a class="header__nav-item" href="{{ route('about.index') }}">About</a></li>
                <li><a class="header__nav-item" href="{{ route('rating.index') }}">Rating</a></li>
                <li><a class="header__nav-item" href="{{ route('articles.index') }}">Articles</a></li>
                <li><a class="header__nav-item" href="{{ route('article_category.index') }}">Article category</a></li>
            </ul>
        </nav>
    </div>
</header>
<main class="main">
    <div class="container">
        <h1>@yield('header')</h1>
        <div>
            @yield('content')
        </div>
    </div>
</main>
</body>
</html>
