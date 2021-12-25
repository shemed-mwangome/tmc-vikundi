<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'TMC-VIKUNDI') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/coat_of_arms.png') }}" type="image/x-icon">
    <script src="{{ asset('js/jquery.js') }}"></script>
</head>

<body>
    <div class="bg-slate-200 min-h-screen overflow-hidden ">
        @yield('content')
    </div>

    <script>
        $(document).ready(function() {

            $(".toggle-avatar-nav").click(function() {
                $(".avatar-nav").toggle('hidden');
            })
        });
    </script>

</body>

</html>
