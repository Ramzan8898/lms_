<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <title>{{ config('app.name', 'Laravel') }} - Modern Learning Platform</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/logo/logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/logo/logo.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


<body class="bg-(--secondary) text-(--text)]">

    <div class="flex h-screen overflow-hidden">

        <x-dashboard.sidebar />

        <div class="flex-1 flex flex-col overflow-hidden">

            <x-dashboard.topbar />

            <main class="flex-1 overflow-y-auto p-8 bg-(--secondary-2)">
                @yield('content')
            </main>

        </div>

    </div>

</body>

</html>