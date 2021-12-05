@extends('layouts.app')

@section('content')
    <section class="main-content">

        {{-- top nav --}}
        @include('layouts.topnav')

        {{-- Display all available module --}}
        {{-- But need to check for permission to display required --}}



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
