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


        {{-- top navigation bar --}}
        <div
            class="top-nav sticky top-0 bg-green-600 py-4 px-6 flex justify-between z-50 shadow-md border-b-4 border-gray-700">

            {{-- left side --}}
            <div class="left-nav flex items-center space-x-5">
                {{-- menu icon --}}
                <button class="toggle-sidenav bg-green-600 block px-1 py-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-200 hover:text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <img src="{{ asset('images/coat_of_arms.png') }}" alt="Coat of Arms" class="w-6 h-6">
                <a href="/">
                    <span class="block uppercase font-extrabold text-lg text-white">tmc vikundi</span>
                </a>
            </div>

            {{-- end left side --}}

            {{-- right side --}}
            <div class="right-nav flex justify-between items-center  space-x-6 relative">
                <span class="font-bold text-white uppercase text-sm">Selemani Hemed</span>
                <div class="relative">
                    <button class="toggle-avatar-nav bg-gray-200 rounded-full overflow-hidden p-1 hover:bg-gray-300 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 object-cover" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </button>
                    <nav
                        class="avatar-nav w-52 bg-green-600 text-gray-100 absolute right-0 my-2 text-sm hidden space-y-1 overflow-hidden rounded-sm transition duration-500 ease-in-out shadow-xl">
                        <a href="#" class="block px-3 py-2 hover:bg-gray-500 hover:text-gray-200">My Account</a>
                        <a href="{{ route('logout') }}"
                            class="block px-3 py-2 hover:bg-gray-500 hover:text-gray-200">Logout</a>
                    </nav>
                </div>
            </div>

            {{-- end right side --}}
        </div>
        {{-- end top navigation --}}

        {{-- Dashboard --}}

        <div class="container max-w-full mx-auto my-8">
            <div class="modules mx-auto grid grid-cols-4 gap-x-2 gap-y-8 max-w-4xl  ">
                <div class="w-48 h-48 bg-green-600  shadow-md rounded-md overflow-hidden hover:shadow-xl">
                    <div class="text-white p-8 flex items-center justify-center text-5xl">
                        <i class="fas fa-users " aria-hidden="true"></i>
                    </div>
                    <div>
                        <a href="/registration"
                            class="flex items-center justify-center w-full p-8 bg-green-700 uppercase font-bold text-gray-100">Registration
                        </a>
                    </div>
                </div>
                <div class="w-48 h-48 bg-green-600 shadow-md rounded-md overflow-hidden hover:shadow-xl">
                    <div class="text-white p-8 flex items-center justify-center text-5xl"><i
                            class="fas fa-money-bill-alt"></i>
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
                        <a href="/setting"
                            class="flex items-center justify-center w-full p-8 bg-green-700 uppercase font-bold text-gray-100">Settings</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- end Dashboard --}}




    </div>

    <script>
        window.addEventListener("DOMContentLoaded", () => {
            const btn_toggle_nav = document.querySelector(".toggle-avatar-nav");
            const avatar_nav = document.querySelector(".avatar-nav");

            btn_toggle_nav.addEventListener("click", () => {
                avatar_nav.classList.toggle("hidden")
            })

        })
    </script>
</body>

</html>
