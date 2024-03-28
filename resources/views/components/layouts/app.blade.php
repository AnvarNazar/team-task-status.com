<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Team Task Status' }}</title>
    @vite(['resources/scss/style.scss', 'resources/font-awesome-pro/fontawesome-pro-6.5.1-web/css/all.css'])
</head>
<body>
<header>
    <nav>
        <a href="{{ route('index') }}" wire:navigate>Home</a>
        <a href="{{ route('logout') }}">Logout</a>
    </nav>
</header>
{{ $slot }}
<footer></footer>
</body>
</html>
