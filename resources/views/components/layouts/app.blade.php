<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body>
        @livewire('partials.navbar')
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            @livewire('partials.footer')
    </body>
</html>
