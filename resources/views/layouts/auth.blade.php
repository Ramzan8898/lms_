<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} | Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-h-screen flex items-center justify-center bg-black relative overflow-hidden">

    <video autoplay muted loop playsinline class="fixed inset-0 w-full h-full object-cover -z-10">
        <source src="{{ asset('assets/images/background.mp4') }}" type="video/mp4">
    </video>


    <div class="w-full p-8 rounded-2xl container">
        @yield('content')
    </div>

</body>



</html>
