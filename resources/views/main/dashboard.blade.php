@extends('layouts.app')
@section('content')
    @include('layouts.topnav')
    {{-- Dashboard --}}

    <div class="container max-w-full mx-auto my-8">
        <div class="modules mx-auto grid grid-cols-4 gap-x-2 gap-y-8 max-w-4xl  ">
            <div class="w-48 h-48 bg-green-600  shadow-md rounded-md overflow-hidden hover:shadow-xl">
                <div class="text-white p-8 flex items-center justify-center text-5xl">
                    <i class="fas fa-users " aria-hidden="true"></i>
                </div>
                <div>
                    <a href="/registration/dashboard"
                        class="flex items-center justify-center w-full p-8 bg-green-700 uppercase font-bold text-gray-100">Registration
                    </a>
                </div>
            </div>
            <div class="w-48 h-48 bg-green-600 shadow-md rounded-md overflow-hidden hover:shadow-xl">
                <div class="text-white p-8 flex items-center justify-center text-5xl"><i class="fas fa-money-bill-alt"></i>
                </div>
                <div>
                    <a href="/loans"
                        class="flex items-center justify-center w-full p-8 bg-green-700 uppercase font-bold text-gray-100">Loans</a>
                </div>
            </div>
            <div class="w-48 h-48 bg-green-600 shadow-md rounded-md overflow-hidden hover:shadow-xl">
                <div class="text-white p-8 flex items-center justify-center text-5xl"><i
                        class="fas fa-hand-holding-usd"></i></div>
                <div>
                    <a href="/accounting"
                        class="flex items-center justify-center w-full p-8 bg-green-700 uppercase font-bold text-gray-100">Accounts</a>
                </div>
            </div>
            <div class="w-48 h-48 bg-green-600 shadow-md rounded-md overflow-hidden hover:shadow-xl">
                <div class="text-white p-8 flex items-center justify-center text-5xl">
                    <i class="fas fa-file-invoice"></i>
                </div>
                <div>
                    <a href="/reporting"
                        class="flex items-center justify-center w-full p-8 bg-green-700 uppercase font-bold text-gray-100">Reports</a>
                </div>
            </div>
            <div class="w-48 h-48 bg-green-600 shadow-md rounded-md overflow-hidden hover:shadow-xl">
                <div class="text-white p-8 flex items-center justify-center text-5xl">
                    <i class="fas fa-cogs"></i>
                </div>
                <div>
                    <a href="/setting/dashboard"
                        class="flex items-center justify-center w-full p-8 bg-green-700 uppercase font-bold text-gray-100">Settings</a>
                </div>
            </div>
        </div>
    </div>
    {{-- end Dashboard --}}
@endsection

<script>
    window.addEventListener("DOMContentLoaded", () => {
        const btn_toggle_nav = document.querySelector(".toggle-avatar-nav");
        const avatar_nav = document.querySelector(".avatar-nav");

        btn_toggle_nav.addEventListener("click", () => {
            avatar_nav.classList.toggle("hidden")
        })

    })
</script>
