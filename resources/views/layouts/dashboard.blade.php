<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


<body class="bg-gray-100">

    <div class="flex h-screen overflow-hidden">

        <x-dashboard.sidebar />

        <div class="flex-1 flex flex-col">

            <x-dashboard.topbar />

            <main class="flex-1 p-6 overflow-y-auto">
                @yield('content')
            </main>

        </div>

    </div>

</body>


</html>