<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A sample point-of-sale account directory built with Laravel and Blade.">
    <title>@yield('title', 'Home') | Laravel POS</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="site-shell">
        <header class="topbar">
            <a class="brand" href="{{ route('home') }}" aria-label="Laravel POS home">
                <span class="brand-mark">P</span>
                <span>POS<span class="brand-muted"> / Laravel</span></span>
            </a>
            <nav class="main-nav" aria-label="Main navigation">
                <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                <a class="{{ request()->routeIs('customers') ? 'active' : '' }}" href="{{ route('customers') }}">Customers</a>
                <a class="{{ request()->routeIs('users') ? 'active' : '' }}" href="{{ route('users') }}">Users</a>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="footer">
            <span>Laravel POS Foundations</span>
            <span>Sample data for learning purposes</span>
        </footer>
    </div>
</body>
</html>
