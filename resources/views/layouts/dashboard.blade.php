<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


<body class="bg-(--secondary) text-(--text)]">

    <div class="flex h-screen overflow-hidden">

        <x-dashboard.sidebar />

        <div class="flex-1 flex flex-col overflow-hidden">

            <x-dashboard.topbar />

            <main class="flex-1 overflow-y-auto p-8 bg-(--secondary-2)">
                <div class="bg-(--card) border border-(--border) rounded-2xl shadow-2xl p-8 min-h-full">
                    @yield('content')
                </div>
            </main>

        </div>

    </div>

</body>



</html>
