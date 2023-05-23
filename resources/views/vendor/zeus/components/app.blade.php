<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ __('filament::layout.direction') ?? 'ltr' }}"
    class="antialiased filament js-focus-visible">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="application-name" content="{{ config('app.name', 'Laravel') }}">

    <!-- Seo Tags -->
    <x-seo::meta />
    <!-- Seo Tags -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=KoHo:ital,wght@0,200;0,300;0,500;0,700;1,200;1,300;1,600;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('vendor/zeus/frontend.css') }}">
    @livewireStyles
    @stack('styles')

    <style>
        * {
            font-family: 'KoHo', 'Almarai', sans-serif;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body
    class="font-sans antialiased bg-gray-50 text-gray-900 dark:text-gray-100 dark:bg-gray-900 @if (app()->isLocal()) debug-screens @endif">



    @extends('portfolio.app')

    @section('content')
        <div class="container-fluid">

            <div class="row p-60-0 p-lg-30-0 p-md-15-0">

                <div class="col-lg-12">




                    <div class="container mx-auto">
                        {{ $slot }}
                       
                    </div>


                </div>
            </div>


        </div>
    @endsection

    <script src="{{ asset('vendor/zeus/app.js') }}" defer></script>

    @stack('scripts')
    @livewireScripts
    @livewire('notifications')

    <script>
        const theme = localStorage.getItem('theme')
        document.documentElement.classList.add('dark')
        if ((theme === 'dark') || (!theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        }
    </script>

</body>

</html>
