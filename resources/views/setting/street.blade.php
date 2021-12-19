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
                        <a href="/setting/dashboard"
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
                        <a href="/setting/wards"
                            class="flex items-center align-baseline px-4 py-2 transition duration-200 ease-in-out hover:bg-gray-900 space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-xs">Kata</span>
                        </a>

                    </div>
                    <div class="">
                        <a href="/setting/streets"
                            class="flex items-center align-baseline px-4 py-2 transition duration-200 ease-in-out hover:bg-gray-900 space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-xs">Mtaa</span>
                        </a>
                    </div>
                    <div class="">
                        <a href="/setting/activity"
                            class="flex items-center align-baseline px-4 py-2 transition duration-200 ease-in-out hover:bg-gray-900 space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-xs">Shughuli za Vikundi</span>
                        </a>
                    </div>
                    <div class="">
                        <a href="/setting/category"
                            class="flex items-center align-baseline px-4 py-2 transition duration-200 ease-in-out hover:bg-gray-900 space-x-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-xs">Aina za Vikundi</span>
                        </a>
                    </div>

                    <div>
                        <a href="/setting/user"
                            class="flex items-center align-baseline px-4 py-2 transition duration-200 ease-in-out hover:bg-gray-900 space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-xs">Users</span>
                        </a>
                    </div>

                </nav>
                {{-- end links --}}


            </div>
            {{-- end sidebar --}}

            {{-- scroll wrapper --}}
            <div class="main_content flex-1 flex overflow-auto pb-12 ">

                {{-- scroll content --}}
                <div class="flex-1  px-8 py-6">
                    <div class="modal-wrapper space-y-2 relative pb-12 ">
                        <div class="content p-2 shadow-md bg-white rounded-sm">
                            <h1 class="uppercase font-bold text-sm">Mtaa</h1>
                        </div>

                        {{-- search bar --}}
                        <div class="form shadow-md px-8 py-4 bg-white ">
                            <div class="search flex justify-between">
                                <div>
                                    <button
                                        class="modal-btn px-4 py-2 bg-sky-600 text-white flex space-x-3 hover:bg-sky-700 ">
                                        <span>Add</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <form action="#" method="get" class="flex items-center   space-x-4">
                                    <div>
                                        <input type="search" name="search" id="search" placeholder="Mtaa">
                                    </div>
                                    <button type="submit"
                                        class="flex px-4 py-2 bg-sky-600 text-white hover:bg-sky-700 space-x-3">
                                        <span>Search</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </button>
                                </form>
                            </div>

                        </div>

                        {{-- modal --}}
                        <div class="modal  bg-white mx-auto z-50 shadow-md  inset-x-0 top-0 w-full h-max  ">
                            <div class="flex">
                                <h1 class="w-full px-4 py-2 bg-sky-600 uppercase text-md font-bold text-white">Sajili
                                    Mtaa</h1>
                                <button type="submit"
                                    class="close-modal px-4 py-2 bg-sky-600 text-white hover:bg-sky-700 flex space-x-3">
                                    <span>Close</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </button>
                            </div>
                            {{-- form --}}
                            <form action="/setting/streets" method="POST" class="space-y-4 px-6 py-5">
                                @csrf
                                <div class="space-y-2">
                                    <label for="ward" class="block ">Chagua Kata</label>
                                    <select name="ward" id="ward" class="w-full">
                                        <option value="" disabled selected>Chagua Kata</option>
                                        @forelse ($wards as $ward)
                                            <option value="{{ $ward->id }}">{{ $ward->name }}</option>
                                        @empty

                                        @endforelse
                                    </select>
                                </div>
                                <div class="space-y-2">
                                    <label for="street" class="block ">Jina la Mtaa</label>
                                    <input type="text" id="street" class="street w-full" name="street">
                                </div>
                                <button type="submit"
                                    class="px-4 py-2 bg-sky-600 text-white hover:bg-sky-700 flex space-x-3">
                                    <span>Save</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                                    </svg>
                                </button>
                            </form>

                        </div>

                        {{-- display table --}}
                        <div class="show-all  shadow-md  pb-24   bg-white relative">
                            <table class="w-full ">
                                <thead class="bg-gray-300 divide-y divide-gray-500">
                                    <tr class="whitespace-nowrap">
                                        <th class="px-6 py-2 text-sm text-gray-600">S/No </th>
                                        <th class="px-6 py-2 text-sm text-gray-600">Kata </th>
                                        <th class="px-6 py-2 text-sm text-gray-600">Mtaa </th>
                                        <th class="px-6 py-2 text-sm text-gray-600">Edit </th>
                                        <th class="px-6 py-2 text-sm text-gray-600">Delete </th>

                                    </tr>
                                </thead>

                                <tbody class="divide-y bg-white border-b-2 border-gray-300">

                                    @forelse ($data as $d)
                                        <tr class="whitespace-nowrap align-baseline text-center">
                                            <td class="border px-6 py-2 text-sm w-8">{{ $d->street_id }}</td>
                                            <td class="border px-6 py-2 text-sm ">{{ $d->ward_name }}</td>
                                            <td class="border px-6 py-2 text-sm ">{{ $d->street_name }}</td>
                                            <td class="border px-6 py-2 text-sm w-8">

                                                <a href="/setting/streets/{{ $d->street_id }}" title="view"
                                                    class="text-sky-500">

                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </a>
                                            </td>
                                            <td class="border px-6 py-2 text-sm w-8 ">

                                                <a href="/setting/streets/{{ $d->street_id }}" title="edit"
                                                    class="text-red-500">

                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty

                                    @endforelse


                                </tbody>
                            </table>

                            <div class="pagination w-max absolute right-0">
                                {{ $data->links() }}
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
            const mainContent = document.querySelector('.main_content');


            {{-- modal --}}
            const modalWrapper = document.querySelector('.modal-wrapper');
            const modal = document.querySelector('.modal');
            const modalBtn = document.querySelector('.modal-btn');
            const closeModalBtn = document.querySelector('.close-modal');

            const showModal = (e) => {
                console.log(e)
                modal.classList.toggle('hidden')
            }

            const closeModal = () => {
                modal.classList.toggle('hidden')
            }


            const toggleRightNav = () => {
                avatar_nav.classList.toggle("hidden")
            }

            const toggleSideNav = () => {
                sidenav.classList.toggle("-translate-x-full")
                sidenav.classList.toggle("hidden")

            }

            btn_toggle_nav.addEventListener("click", toggleRightNav);
            btn_toggle_sidenav.addEventListener("click", toggleSideNav);
            modalBtn.addEventListener("click", showModal)
            closeModalBtn.addEventListener("click", closeModal)
        })
    </script>


</body>

</html>
