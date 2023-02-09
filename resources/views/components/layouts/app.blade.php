<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/brand/favicon.svg') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Montserrat:wght@300;400;500;600;700&family=Roboto:ital,wght@0,300;0,400;0,700;0,900;1,700;1,900&display=swap"
        rel="stylesheet">

    {{ $head ?? '' }}

    {!! SEO::generate() !!}

    <style>
        [x-cloak=""],
        [x-cloak="x-cloak"],
        [x-cloak="1"] {
            display: none !important;
        }
    </style>


    @vite(['resources/css/app.scss', 'resources/js/app.js'])

    @livewireStyles
    @livewireScripts

    @stack('scripts')

    {{ $styles ?? '' }}
</head>

<body class="font-sans antialiased bg-primary-500">

    {{ $afterBody ?? '' }}

    <x-layouts.app.header />

    {{ $slot }}

    <x-layouts.app.footer />

    {{ $scripts ?? '' }}

    @livewire('notifications')
</body>

</html>
