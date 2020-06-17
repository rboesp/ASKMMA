<!DOCTYPE html>
<html lang="en" class="antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>MMA - Authorization</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
    @yield('styles')
    <style>
        .btn-loading {
            pointer-events: none;
        }

        .btn-loading span {
            pointer-events: none;
            color: transparent !important;
        }

        .btn-loading:before {
            content: '';
            display: block;
            width: 1em;
            height: 1em;
            border-width: 2px;
            border-color: currentColor;
            border-style: solid;
            border-right-color: transparent;
            border-top-color: transparent;
            position: absolute;
            left: calc(50% - (1em / 2));
            top: calc(50% - (1em / 2));
            border-radius: 50%;
            animation: rotate 0.5s infinite linear;
        }
        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
@php
    $isSunfire = $client->name == 'Sunfire';
@endphp


<body class="font-open-sans bg-input-grey">
<div class="flex mt-20 items-center justify-center">
    <div class="bg-white rounded shadow max-w-sm lg:max-w-lg pt-10 px-6 pb-6">
        <div class="flex flex-col items-center pb-4">
            <img class="h-20" src="/images/MMA_logo.png" alt="">
            <p class="text-xs text-center leading-normal mt-8">
                CareFree Insurance, Inc. provides Agents leading technology tools, marketing services and support to help drive more sales faster.
            </p>
        </div>

        <div class="mb-2 mt-2">
            <p class="text-sm font-montserrat">
                <span class="text-custom-blue font-semibold">{{ $client->name }} </span> is requesting permission to access your account.
            </p>
        </div>

        @if (count($scopes) > 0)
            <div>
                <p class="text-xs">This application will be able to:</p>
                <ul class="list-reset p-3">
                    @foreach ($scopes as $scope)
                        <li class="flex items-center mb-2">
                            <svg class="text-blue h-3 w-3 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/>
                            </svg>
                            <span class="text-sm">{{ $scope->description }}</span>
                        </li>
                    @endforeach

                </ul>
            </div>
        @endif

        @if ($isSunfire)
            <div id="app">
                <sunfire-authorize-form client-id="{{ $client->id }}" state="{{ $request->state }}">
                    <template slot="csrfAuthorize">{{ csrf_field() }}</template>
                    <template slot="csrfDelete">{{ csrf_field() }}</template>
                </sunfire-authorize-form>
            </div>
        @else
            <div class="flex justify-end items-center mt-4">
                <form id="authorizeForm" method="post" action="/oauth/authorize">
                    {{ csrf_field() }}
                    <input type="hidden" name="state" value="{{ $request->state }}">
                    <input type="hidden" name="client_id" value="{{ $client->id }}">
                    <button
                            class="relative bt-green mr-3 border text-sm"
                            id="authorize-button"
                    >
                    <span class="block">
                        Authorize
                    </span>
                    </button>
                </form>

                <form method="post" action="/oauth/authorize">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <input type="hidden" name="state" value="{{ $request->state }}">
                    <input type="hidden" name="client_id" value="{{ $client->id }}">
                    <button class="border border-custom-blue rounded-17 text-custom-blue py-1 flex items-center font-montserrat text-sm px-3">
                        Cancel
                    </button>
                </form>
            </div>
        @endif


    </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>



</body>

</html>
