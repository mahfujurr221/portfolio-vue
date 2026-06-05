<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title inertia>{{ config('app.name', 'Laravel') }}</title>


    <!-- Load Vite Assets -->
    @vite('resources/js/app.js')


    <!-- Inertia Head Data -->
    @inertiaHead
</head>
<body class="font-sans antialiased">
    <!-- Inertia Root Element -->
    @inertia
</body>
</html>
