<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'TMC-VIKUNDI') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/coat_of_arms.png') }}" type="image/x-icon">
</head>

<body class="bg-gray-200">
    <div class="wrapper">

        <header class="flex justify-between items-center py-2 px-4 bg-green-600">
            <img src="{{ asset('images/coat_of_arms.png') }}" alt="Coat Of Arms" class="w-20 ">
            <div class="flex flex-col text-center text-white">
                <h1 class=" text-5xl font-extrabold">TEMEKE MUNICIPAL COUNCIL</h1>
                <h2 class="text-md font-semibold">MFUMO WA KUSAJILI VIKUNDI VYA WAJASIRIAMALI</h2>
            </div>
            <img src="{{ asset('images/temeke.png') }}" alt="Coat Of Arms" class="w-20">
        </header>

        <section class="login w-full flex flex-col items-center py-4 space-y-5">
            <img src="{{ asset('images/avatar.svg') }}" alt="Avatar" class="w-24 h-24 block bg-transparent">
            <form action="/login" class="w-4/12 bg-white shadow-lg px-8 pb-8 pt-2 rounded-lg" method="GET">
                @csrf
                <div>
                    <div>
                        <label for="username" class="block text-sm my-2">Username</label>
                        <div class="mt-1">
                            <input type="text" id="username" class="w-full py-2 rounded-sm border-gray-300 ">
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
                                class="w-24 bg-green-600 px-3 py-2 text-white  font-bold hover:bg-green-700">Login</button>
                        </div>
                    </div>

            </form>
        </section>


    </div>

</body>

</html>
