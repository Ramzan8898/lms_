<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>{{ config('app.name', 'Laravel') }} - Modern Learning Platform</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap');
    </style>
</head>

<body class="font-['Inter']">

    <div class="flex flex-col overflow-hidden">

        <x-website.header />

        <main>
            @yield('content')
        </main>

        <x-website.footer />

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
