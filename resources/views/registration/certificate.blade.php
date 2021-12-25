@extends('layouts.app')
@section('content')


    {{-- top navigation bar --}}
    @include('layouts.topnav')
    {{-- end top navigation --}}



    <div class="wrapper h-screen flex overflow-hidden">

        {{-- side navigation --}}
        <div
            class="sidenav bg-gray-800 inset-x-0 space-y-0 transform  transition duration-200 ease-in-out w-64  shadow-md sticky top-0">
            <div class="px-4 pt-8 pb-6 bg-gray-700 mb-3">
                <a href="/dashboard" class="flex items-center font-bold text-gray-200 space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="text-sm">HOME</span>
                </a>
            </div>

            <nav class="text-gray-100 font-bold">
                @include('registration.links')
            </nav>



        </div>
        {{-- end sidebar --}}

        {{-- scroll wrapper --}}
        <div class="main_content flex-1 flex overflow-auto pb-12 ">
            {{-- scroll content --}}
            <div class="flex-1  px-8 py-6">
                <div class="space-y-2">
                    <div class="content p-2 shadow-md bg-white rounded-sm">
                        <h1 class="uppercase font-bold text-sm">DASHBOARD</h1>
                    </div>

                    <div class="form shadow-md px-8 py-4 bg-white ">

                    </div>
                </div>
            </div>
        </div>


    </div>

    </div>


    <script>
        $(document).ready(function() {

            $('.toggle-sidenav').click(function() {
                $('.sidenav').toggleClass("hidden -translate-x-full")
            });
        })
    </script>

@endsection
