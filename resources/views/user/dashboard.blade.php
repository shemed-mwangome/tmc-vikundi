@extends('layouts.app')

@section('content')
    <section class="main-content w-screen h-screen">

        {{-- top nav --}}
        @include('layouts.topnav')

        {{-- Display all available module --}}
        {{-- But need to check for permission to display required --}}

        <div class="container max-w-screen mx-auto">
            <div class="container px-8 py-6 relative ">
                <span class="">Time is here</span>
            </div>
            <div class="modules mx-auto grid grid-cols-3 gap-2 max-w-4xl  ">
                <div class="w-48 h-48 bg-green-500 shadow-lg rounded-md overflow-hidden">
                    <div class="text-white p-8 flex items-center justify-center text-5xl"><i class="fas fa-users "
                            aria-hidden="true"></i></div>
                    <div>
                        <button
                            class="flex items-center justify-center w-full p-8 bg-green-700 uppercase font-bold text-gray-100">Usajili</button>
                    </div>
                </div>
                <div class="w-48 h-48 bg-green-500 shadow-lg rounded-md overflow-hidden">
                    <div class="text-white p-8 flex items-center justify-center text-5xl"><i
                            class="fas fa-hand-holding-usd"></i></div>
                    <div>
                        <button
                            class="flex items-center justify-center w-full p-8 bg-green-700 uppercase font-bold text-gray-100">Mikopo</button>
                    </div>
                </div>
                <div class="w-48 h-48 bg-green-500 shadow-lg rounded-md overflow-hidden">
                    <div class="text-white p-8 flex items-center justify-center text-5xl"><i
                            class="fas fa-money-bill-alt"></i></div>
                    <div>
                        <button
                            class="flex items-center justify-center w-full p-8 bg-green-700 uppercase font-bold text-gray-100">Marejesho</button>
                    </div>
                </div>
            </div>
        </div>


    </section>
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
