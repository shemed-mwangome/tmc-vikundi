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
                    <div>
                        <a href="/registration/dashboard"
                            class="flex items-center align-baseline px-4 py-2 transition duration-200 ease-in-out hover:bg-gray-900 space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            <span class="text-xs">Dashboard</span>
                        </a>
                    </div>
                    <div>
                        <a href="/registration/all"
                            class="flex items-center align-baseline px-4 py-2 transition duration-200 ease-in-out hover:bg-gray-900 space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="text-xs">View All</span>
                        </a>

                    </div>

                    <div class="">
                        <a href="/registration/uploads"
                            class="flex items-center align-baseline px-4 py-2 transition duration-200 ease-in-out hover:bg-gray-900 space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                            </svg>
                            <span class="text-xs">Attachments</span>
                        </a>
                    </div>
                    <div class="">
                        <a href="/registration/certificate"
                            class="flex items-center align-baseline px-4 py-2 transition duration-200 ease-in-out hover:bg-gray-900 space-x-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span class="text-xs">Certificates</span>
                        </a>
                    </div>

                    <div>
                        <a href="/registration/report"
                            class="flex items-center align-baseline px-4 py-2 transition duration-200 ease-in-out hover:bg-gray-900 space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span class="text-xs">Reports</span>
                        </a>
                    </div>

                </nav>
                {{-- end links --}}


            </div>
            {{-- end sidebar --}}

            {{-- scroll wrapper --}}
            <div class="main_content flex-1 flex overflow-auto pb-12 ">

                {{-- scroll content --}}
                <div class="flex-1 px-8 py-6">
                    <div class="space-y-2">
                        <div class="content p-2 shadow-md bg-white rounded-sm">
                            <h1 class="uppercase font-bold text-sm">VIKUNDI VILIVYOSAJILIWA</h1>
                        </div>
                        <div class="shadow-md p-4 bg-white">
                            <div>
                                <form action="" class=" flex items-center justify-center space-x-4">
                                    <div>
                                        <input type="text" name="search" id="search" class="w-80 text-sm"
                                            placeholder="Jina au namba ya usajili">
                                    </div>
                                    <div>
                                        <button
                                            class="py-2 px-4 bg-sky-600 text-white hover:bg-sky-700 flex items-center space-x-2">
                                            <span>Tafuta</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="shadow-md px-8 py-4 bg-white w-full">
                            <table class="w-full text-center">
                                <thead class="bg-gray-300 divide-y divide-gray-500">
                                    <tr class="whitespace-nowrap">
                                        <th class="px-6 py-2 text-sm text-gray-600">Jina </th>
                                        <th class="px-6 py-2 text-sm text-gray-600">Usajili </th>
                                        <th class="px-6 py-2 text-sm text-gray-600">Tarehe ya Usajili </th>
                                        <th class="px-6 py-2 text-sm text-gray-600">Idadi ya Wanachama</th>
                                        <th class="px-6 py-2 text-sm text-gray-600"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y bg-white border-b-2 border-gray-300">
                                    <tr class="whitespace-nowrap align-baseline">
                                        <td class="px-6 py-2 text-xs">Tupendane Empowerment</td>
                                        <td class="px-6 py-2 text-xs">TMC/2030/202</td>
                                        <td class="px-6 py-2 text-xs">19/1/2017</td>
                                        <td class="px-6 py-2 text-xs">10</td>
                                        <td class="px-6 py-2 text-xs flex space-x-4 justify-between">


                                            <a href="/registration/attach" title="edit">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            {{-- pagination here --}}
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

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
