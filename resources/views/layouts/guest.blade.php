<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'prueba') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ url('assets/css/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ url('assets/css/floating-labels.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    </head>
    <body style="background: #EB3349;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #F45C43, #EB3349);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #F45C43, #EB3349); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    ">
        <div class="font-sans text-gray-900 antialiased w-100">
            {{ $slot }}
        </div>
    </body>
</html>
