@extends('layouts.app')

@section('content')
    @include('layouts.topnav')



    {{-- side nav --}}
    <div class="sidenav bg-gray-800 w-1/5 fixed inset-x-0 h-full space-y-0 transform  transition duration-200 ease-in-out ">
        <div class="px-4 pt-8 pb-6 font-bold text-lg uppercase text-gray-100">
            <a href="/dashboard" class="space-x-2">
                <i class="fas fa-home"></i>
                <span>HOME</span>
            </a>
        </div>

        {{-- include sidebar for registration --}}

        @include('registration.links')

        {{-- end sidebar --}}

        {{-- links --}}

    </div>
    {{-- end side nav --}}

    {{-- main contet --}}
    <div class="flex-1 ">

    </div>
    {{-- end main content --}}

@endsection

<script>
    window.addEventListener("DOMContentLoaded", () => {
        const btn_toggle_nav = document.querySelector(".toggle-avatar-nav");
        const avatar_nav = document.querySelector(".avatar-nav");
        const btn_toggle_sidenav = document.querySelector('.toggle-sidenav');
        const sidenav = document.querySelector('.sidenav');



        const toggleRightNav = () => {
            avatar_nav.classList.toggle("hidden")
        }

        const toggleSideNav = () => {
            sidenav.classList.toggle("-translate-x-full")
        }

        btn_toggle_nav.addEventListener("click", toggleRightNav);
        btn_toggle_sidenav.addEventListener("click", toggleSideNav);
    })
</script>
