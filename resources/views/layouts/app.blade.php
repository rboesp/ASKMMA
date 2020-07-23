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
</head>
<body>
<div id="app" class="flex flex-wrap font-openSans h-screen">


    <div class="h-screen w-full flex overflow-hidden bg-gray-100">
        <!-- Static sidebar for desktop -->
        <div class="flex flex-shrink-0">
            <div class="flex flex-col w-64">
                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <div class="flex flex-col h-0 flex-1 bg-gray-800">
                    <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto text-white font-semibold text-xl">
                        <div class="flex items-center flex-shrink-0 px-4">
                            {{--<img class="h-8 w-auto" src="images/MMA_logo.png" alt="Workflow">--}}
                            <h1>MMA Admin</h1>
                        </div>
                        <nav class="mt-5 flex-1 px-2 bg-gray-800">
                            <a href="/dashboard" class="@if(Str::endsWith(url()->current(), '/dashboard'))bg-gray-900 @endif mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition ease-in-out duration-150">
                                <svg class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Careers
                            </a>
                            <a href="/dashboard/feedback" class="@if(Str::endsWith(url()->current(), '/feedback'))bg-gray-900 @endif mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition ease-in-out duration-150">
                                <svg class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                                Feedback
                            </a>
                            <a href="/dashboard/messages" class="@if(Str::endsWith(url()->current(), '/messages'))bg-gray-900 @endif mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition ease-in-out duration-150">
                                <svg class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </svg>
                                Contact Messages
                            </a>
                            <a href="/dashboard/users" class="@if(Str::endsWith(url()->current(), '/users'))bg-gray-900 @endif mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition ease-in-out duration-150">
                                <svg class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                Users
                            </a>
                        </nav>
                    </div>
                    <div class="flex-shrink-0 flex bg-gray-700 p-4">
                        <div class="flex-shrink-0 w-full group block">
                            <div class="flex items-center">
                                <div>
                                    <img class="inline-block h-8 w-8 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/2/24/Missing_avatar.svg" alt="">
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm leading-5 text-white font-semibold">
                                       {{ auth()->user()->name }}
                                    </p>
                                    <p class="text-xs leading-4 font-medium text-gray-300 group-hover:text-gray-200 transition ease-in-out duration-150">
                                        <a class="hover:underline"
                                           href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                    </p>

                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
                <button class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150" aria-label="Open sidebar">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
                <div class="pt-2 pb-6 md:py-6">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <h1 class="text-2xl font-semibold text-gray-900">@yield('title')</h1>
                    </div>
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        @yield('description')
                        <div class="py-4">
                            @yield('content')
                        </div>
                        <!-- /End replace -->
                    </div>
                </div>
            </main>
        </div>
    </div>





    {{--<nav class="w-1/6 flex flex-col py-10 shadow-xl h-full">--}}
        {{--<h1 class="w-full text-4xl font-bold text-center">--}}
            {{--Admin Panel--}}
        {{--</h1>--}}

        {{--<div class="w-full mt-6">--}}
            {{--<div class="mx-auto text-blue-500 h-24 w-24 rounded-full"></div>--}}
        {{--</div>--}}

        {{--<div class="w-full flex flex-col mt-10">--}}
            {{--<span class="border-l-4 py-3 px-4 w-full">--}}
                {{--<a href="/dashboard" class="w-full text-black text-base font-semibold">--}}
                    {{--Careers--}}
                {{--</a>--}}
            {{--</span>--}}
            {{--<span class="border-l-4 py-3 px-4 w-full">--}}
                {{--<a href="/dashboard/feedback" class="w-full text-black text-base font-semibold">--}}
                    {{--Feedback--}}
                {{--</a>--}}
            {{--</span>--}}
            {{--<span class="border-l-4 py-3 px-4 w-full">--}}
                {{--<a href="/dashboard/messages" class="w-full text-black text-base font-semibold">--}}
                    {{--Contact Messages--}}
                {{--</a>--}}
            {{--</span>--}}
        {{--</div>--}}

        {{--<div class="flex h-full w-full items-end">--}}

            {{--<div class="w-full">--}}
                {{--<a class="text-blue-500 px-10 font-semibold hover:underline hover:font-bold"--}}
                   {{--href="{{ route('logout') }}"--}}
                   {{--onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
                    {{--{{ __('Logout') }}--}}
                {{--</a>--}}

                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                    {{--@csrf--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</nav>--}}

    {{--<main class="w-5/6 bg-gray-100 py-10">--}}
        {{--@yield('content')--}}
    {{--</main>--}}
</div>
</body>
</html>
