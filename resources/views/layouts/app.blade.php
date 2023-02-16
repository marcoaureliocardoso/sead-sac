<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SAC - @yield('title')</title>
        <meta name="description" content="SAC - Sistema de Acompanhamento de Contratos da Sead/Ufes">
        <link rel="shortcut icon" href="{{ Vite::asset('resources/images/sead.png') }}">

        <!-- Scripts -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])

        @yield('headerScripts')
    </head>

    <body>
        @include('layouts.partialHeader')
        <div class="container-fluid">
            @yield('content')
        </div>
        @include('layouts.partialFooter')
        @yield('scripts')
    </body>

</html>
