<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'TMC-VIKUNDI') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('js/jquery.js') }}">
    <link rel="shortcut icon" href="{{ asset('images/coat_of_arms.png') }}" type="image/x-icon">
</head>

<body>
    <div class="bg-slate-200 min-h-screen overflow-hidden ">

        @yield('content')

    </div>

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
                sidenav.classList.toggle("hidden")
            }

            btn_toggle_nav.addEventListener("click", toggleRightNav);
            btn_toggle_sidenav.addEventListener("click", toggleSideNav);
        })
    </script>

</body>

</html>
