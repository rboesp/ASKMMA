@extends('layouts.secondary', [
    'title' => 'Reset Password'
])


@section('content')
<div class="container mt-16 mx-auto">

    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-12 w-auto" src="images/MMA_logo.png" alt="Logo">
            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                Set new Password for your account
            </h2>
        </div>


        @if (!!session('error'))
            <div class="bg-red-200 text-red-700 rounded p-4" role="alert">
                Check Password, must match and be greater than 8.
            </div>
        @endif

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form  action="/reset-credentials" method="POST">
                    <input type="hidden" name="token" value="{{ $token }}">
                    @csrf
                    <div>
                        <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                            New Password
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="password" type="password" name="password" required autocomplete="new-password" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-500 @enderror">
                        </div>
                        @error('password')
                            <span class="text-red-500 text-sm italic mt-2 font-semibold" role="alert">{{ $errors->first('password') }}</span>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label for="password_confirmation" class="block text-sm font-medium leading-5 text-gray-700">
                            New Password confirmation
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-500 @enderror">
                        </div>
                        @error('password-confirm')
                            <span class="text-red-500 text-sm italic mt-2 font-semibold" role="alert">{{ $errors->first('password-confirm') }}</span>
                        @enderror
                    </div>

                    <div class="mt-6">
                      <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-mmared hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                          Reset Password
                        </button>
                      </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
