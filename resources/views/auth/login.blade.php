@extends('layouts.secondary', [
    'title' => 'Login'
])

@section('content')
    <div class="mx-auto container h-112 flex items-center justify-center">
        <div class="flex w-2/3 lg:w-1/3 shadow py-8 px-8">
            <div class="w-full">
                <h1 class="text-3xl text-center font-semibold text-mmablue mb-12">{{ __('Login') }}</h1>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="flex flex-wrap items-center py-2">
                                <input id="email" type="email"
                                       class="rounded-sm w-full bg-white appearance-none border-2 border-gray-300 py-2 pl-4 pr-16 text-gray-700 text-base leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                <span class="text-mmared w-full" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="flex flex-wrap items-center py-2">
                                <input id="password" type="password"
                                       class="rounded-sm w-full bg-white appearance-none border-2 border-gray-300 py-2 pl-4 pr-16 text-gray-700 text-base leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                       name="password"
                                       required autocomplete="current-password"
                                       placeholder="Password">

                            @error('password')
                            <span class="invalid-feedback w-full" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="w-full flex justify-center mb-4">
                            <button
                                    type="submit"
                                    class="w-4/5 sm:w-3/5 lg:w-2/5 mt-2 self-end bg-mmared hover:bg-mmalightblue focus:shadow-outline focus:outline-none text-white hover:text-white font-bold py-3 px-10 rounded-lg"
                            >
                                {{ __('Login') }}
                            </button>
                        </div>

                        <div class="w-full flex flex-wrap justify-end">
                            <div class="flex items-center">
                                <input class="mr-2" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            {{--<div class="w-full lg:w-1/2">--}}
                                {{--@if (Route::has('password.request'))--}}
                                    {{--<a class="hover:underline hover:font-semibold text-blue-600" href="{{ route('password.request') }}">--}}
                                        {{--{{ __('Forgot Your Password?') }}--}}
                                    {{--</a>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
