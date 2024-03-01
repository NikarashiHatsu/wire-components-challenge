<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
    ])
    @livewireStyles
</head>
<body class="antialiased flex justify-center items-center bg-slate-100 w-full min-h-dvh py-8 overflow-y-auto text-gray-700">
    {{ $slot }}

    @livewireScripts
</body>
</html>
