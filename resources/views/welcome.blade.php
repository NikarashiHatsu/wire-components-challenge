<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Livewire 30 Days Challenge</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
    ])
    @livewireStyles
</head>
<body class="antialiased bg-red-200">
    <div class="max-w-screen-lg mx-auto w-full font-display py-6">
        <h1 class="text-6xl text-center">
            LARAVEL LIVEWIRE<br/>
            30 DAYS CHALLENGE
        </h1>

        <div class="border-b border-red-400 mt-6"></div>

        <div class="grid grid-cols-12 grid-flow-row gap-8 px-8">
            <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                <div class="aspect-w-2 aspect-h-3 border border-red-400 border-t-0">
                    <p class="text-center">
                        Day 1
                    </p>
                </div>
            </div>

            <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                <div class="aspect-w-2 aspect-h-3 border border-red-400 border-t-0">
                    <p class="text-center">
                        Day 2
                    </p>
                </div>
            </div>

            <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                <div class="aspect-w-2 aspect-h-3 border border-red-400 border-t-0">
                    <p class="text-center">
                        Day 3
                    </p>
                </div>
            </div>
        </div>
    </div>

    @livewireScripts
</body>
</html>
