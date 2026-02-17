<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - Modern Learning Platform</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap');
    </style>
</head>

<body class="font-['Inter']">

    <div class="flex-1 flex flex-col overflow-hidden">

        <x-website.header />

        <main>
            @yield('content')
        </main>

        <x-website.footer />

    </div>
</body>



</html>
