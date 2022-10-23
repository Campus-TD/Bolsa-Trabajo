<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Bolsa de Trabajo') }}</title>
        <link rel="icon" href="{{ asset('images/favicon.ico') }}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

        <!-- Styles -->
        @livewireStyles

    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <footer class="bg-slate-400 text-center text-white">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.5);">
              © 2022 Copyright:
              <a class="text-white" href="http://campustd.mx" target="_blank" style="text-decoration: none;">Campus TD</a>
            </div>
            <!-- Copyright -->
          </footer>
    </body>
</html>
