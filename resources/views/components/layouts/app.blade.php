<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Team Task Status' }}</title>
    @vite(['resources/scss/style.scss', 'resources/font-awesome-pro/fontawesome-pro-6.5.1-web/css/all.css'])
</head>
<body class="app-container">
<header>
    <nav>
        <a href="{{ route('index') }}" class="active" wire:navigate>
            <i class="fa-duotone fa-house-user"></i>
            Home
        </a>
        <a href="{{ route('logout') }}">
            <i class="fa-duotone fa-arrow-up-left-from-circle"></i>
            Logout
        </a>
    </nav>
</header>
{{ $slot }}
<footer></footer>
</body>
</html>
