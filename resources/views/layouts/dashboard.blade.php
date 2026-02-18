<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
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

    <script type="text/javascript">
        // Prevent back button after logout
        (function() {
            window.history.forward();

            window.onload = function() {
                setTimeout(function() {
                    window.history.forward();
                }, 0);
            };

            window.onpageshow = function(evt) {
                if (evt.persisted) {
                    setTimeout(function() {
                        window.history.forward();
                    }, 0);
                }
            };
        })();
    </script>
</body>



</html>
