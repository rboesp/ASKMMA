@extends('layouts.app')
@section('title')
    Users Update
@endsection

@section('content')
    <div class="container mx-auto">
        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="/dashboard/users/{{$user->id}}/update" method="POST">
                        {{ csrf_field() }}
                        <user-info value="{{$user}}"></user-info>
                        <div class="flex justify-end mt-5">
                            <button class="text-white text-base rounded bg-purple-500 shadow text-center font-semibold px-4 py-2">
                                Update User
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection