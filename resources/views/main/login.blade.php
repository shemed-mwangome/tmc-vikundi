@extends('layouts.app')
@section('content')
@include('layouts.header')
    <section class="login w-full flex flex-col items-center py-4 space-y-3">
        <img src="{{ asset('images/avatar.svg') }}" alt="Avatar" class="w-20 h-20 block bg-transparent">
        <form action="/login" class="w-4/12 bg-white shadow-lg px-8 pb-8 pt-2 rounded-lg" method="GET">
            @csrf
            <div>
                <div>
                    <label for="username" class="block text-sm my-2">Username </label>
                    <div class="mt-1">
                        <input type="text" id="username" class="border-1 w-full py-2 rounded-sm border-gray-300 ">
                    </div>
                </div>
                <div>
                    <label for="password" class="block text-sm my-2">Password</label>
                    <div class="mt-1">
                        <input type="password" id="password" class="w-full rounded-sm border-gray-300">
                    </div>
                </div>
                <div>
                    <div class=mt-3>
                        <button type="submit"
                            class="w-24 bg-green-600 px-3 py-2 text-white  font-bold hover:bg-green-700  shadow-lg">Login</button>
                    </div>
                </div>

        </form>
    </section>

@endsection
