<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MMA') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        ul {
            list-style: none; /* Remove default bullets */
            display: table;
        }

        ul li::before {
            content: "\2022"; /* Add content: \2022 is the CSS Code/unicode for a bullet */
            color: #9d0200; /* Change the color */
            font-weight: bold; /* If you want it to be bold */
            width: 1em; /* Also needed for space (tweak if needed) */
            margin-left: 1em; /* Also needed for space (tweak if needed) */
            display: table-cell;
            text-align: right;
            padding-right: .6em;
        }

        li {
            display: inherit;
            margin-top: 0.5rem;
        }

        ul li.no-bullet::before{
            content: ""; /* Add content: \2022 is the CSS Code/unicode for a bullet */
            color: transparent; /* Change the color */
        }
        .btn--loading {
            position: relative;
            color: transparent;
            pointer-events: none;

        }
        .btn--loading::after {
            content: '';
            animation: busy-indicator 500ms infinite linear;
            border: solid 3px white;
            border-radius: 50%;
            display: block;
            position: absolute;
            border-right-color: transparent;
            height: 1.4em;
            width: 1.4em;
            left: calc(50% - (1.4em / 2));
            top: calc(50% - (1.4em / 2));
            transform-origin: center;
        }
        @keyframes busy-indicator {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
        @yield('styles')
    </style>

    @if(config('app.env' == 'production'))
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138115450-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-138115450-1');
        </script>
    @endif
</head>
<body>
<div id="app" class="flex flex-wrap font-openSans h-screen">
    <nav class="w-1/6 flex flex-col py-10 shadow-xl h-full">
        <h1 class="w-full text-4xl font-bold text-center">
            Admin Panel
        </h1>

        <div class="w-full mt-6">
            <div class="mx-auto text-blue-500 h-24 w-24 rounded-full"></div>
        </div>

        <div class="w-full flex flex-col mt-10">
            <span class="border-l-4 py-3 px-4 w-full">
                <a href="/dashboard" class="w-full text-black text-base font-semibold">
                    Careers
                </a>
            </span>
            <span class="border-l-4 py-3 px-4 w-full">
                <a href="/dashboard/feedback" class="w-full text-black text-base font-semibold">
                    Feedback
                </a>
            </span>
            <span class="border-l-4 py-3 px-4 w-full">
                <a href="/dashboard/messages" class="w-full text-black text-base font-semibold">
                    Contact Messages
                </a>
            </span>
        </div>

        <div class="flex h-full w-full items-end">

            <div class="w-full">
                <a class="text-blue-500 px-10 font-semibold hover:underline hover:font-bold"
                   href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </nav>

    <main class="w-5/6 bg-gray-100 py-10">
        @yield('content')
    </main>
</div>
</body>
</html>
