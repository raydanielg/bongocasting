<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body class="font-sans antialiased transition-colors duration-300" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))" :class="{ 'dark': darkMode }">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[var(--bg-main)] bg-mesh">
            <div class="mb-8">
                <a href="/">
                    <span class="text-4xl font-heading font-extrabold tracking-tighter italic">
                        <span class="text-primary-600">BONGO</span><span class="dark:text-white text-black">CASTING</span>
                    </span>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-8 py-10 glass-card shadow-2xl overflow-hidden sm:rounded-[2rem] border border-white/10">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
