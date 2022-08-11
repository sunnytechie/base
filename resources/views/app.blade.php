<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/images/favicon_mj.png') }}">

        {{-- Custom css --}}
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

        {{-- Bootstrap Icon --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <!-- Scripts -->
        @routes
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>

        <style>
            /* .tox .tox-menubar {
                background-color: #f5f5f5;
            } */
            .tox-tinymce {
                border: 0 !important;
                border-right: 0 !important;
            }

            .tox .tox-statusbar {
                background-color: #1B2434 !important;
                border: 0 !important;
            }
        </style>
    </head>
    <body style="background: #1B2434; color:rgb(255, 253, 253)">
        @inertia

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv

        {{-- Tiny mce js --}}
        <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
        
    </body>
</html>
