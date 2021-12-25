@extends('layouts.app')
@section('content')


    {{-- top navigation bar --}}
    @include('layouts.topnav')
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
                @include('registration.links')
            </nav>



        </div>
        {{-- end sidebar --}}

        {{-- scroll wrapper --}}
        <div class="main_content flex-1 flex overflow-auto pb-12 ">


                {{-- scroll content --}}
                <div class="flex-1 px-8 py-6 ">
                    <div class="space-y-2 pb-12">
                        <div class="content p-2 shadow-md bg-white rounded-sm">
                            <h1 class="uppercase font-bold text-sm">TAARIFA YA KIKUNDI</h1>
                        </div>
                        <div class="px-8 py-4 bg-white rounded-sm ">
                            <div class="content space-y-6">
                                <div class="space-y-2 shadow-lg min-w-max pb-6 ">
                                    <h1 class="px-2 py-6 bg-sky-700 text-white text-center font-bold uppercase">
                                        TAARIFA ZA KIKUNDI
                                    </h1>
                                    <div class="px-4 space-y-6 ">
                                        <div class="space-x-4">
                                            <label for="" class="font-bold text-sm uppercase ">Jina: </label>
                                            <span class="font-bold text-sm uppercase">TUpendande Empowerment</span>
                                        </div>
                                        <div class="space-x-4">
                                            <label for="" class="font-bold text-sm uppercase ">USAJILI: </label>
                                            <span class="font-bold text-sm uppercase">TMC/REG/2021/3309</span>
                                        </div>
                                        <div class="space-x-4">
                                            <label for="" class="font-bold text-sm uppercase ">KATA: </label>
                                            <span class="font-bold text-sm uppercase">AZIMIO</span>
                                        </div>
                                        <div class="space-x-4">
                                            <label for="" class="font-bold text-sm uppercase ">MTAA: </label>
                                            <span class="font-bold text-sm uppercase">MAJI</span>
                                        </div>
                                        <div class="space-x-4">
                                            <label for="" class="font-bold text-sm uppercase ">IDADI: </label>
                                            <span class="font-bold text-sm uppercase">10</span>
                                        </div>
                                        <div class="space-x-4">
                                            <label for="" class="font-bold text-sm uppercase ">TAREHE: </label>
                                            <span class="font-bold text-sm uppercase">10/02/2021</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-2 shadow-lg">
                                    <h1 class="px-2 py-6 bg-sky-700 text-white text-center font-bold uppercase">
                                        TAARIFA ZA MKOPO
                                    </h1>
                                    <div class="px-4 space-y-6 pb-6 ">
                                        <div class="">
                                            <label for="" class="font-bold text-sm uppercase ">CODE: </label>
                                            <span class="font-bold text-sm uppercase">CDE0398</span>
                                        </div>
                                        <div class="">
                                            <label for="" class="font-bold text-sm uppercase ">TAREHE: </label>
                                            <span class="font-bold text-sm uppercase">12/1/2021</span>
                                        </div>
                                        <div class="">
                                            <label for="" class="font-bold text-sm uppercase ">MKOPO: </label>
                                            <span class="font-bold text-sm uppercase">4,000,000.00</span>
                                        </div>
                                        <div class="">
                                            <label for="" class="font-bold text-sm uppercase ">MAREJESHO: </label>
                                            <span class="font-bold text-sm uppercase">0</span>
                                        </div>
                                        <div class="">
                                            <label for="" class="font-bold text-sm uppercase ">BAKI: </label>
                                            <span class="font-bold text-sm uppercase">4,000,000.00</span>
                                        </div>
                                        <div class="">
                                            <label for="" class="font-bold text-sm uppercase ">STATUS: </label>
                                            <span class="font-bold text-sm uppercase">MAOMBI</span>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h1 class="px-2 py-6 bg-sky-700 text-white text-center font-bold uppercase">
                                        TAARIFA ZA WANACHAMA
                                    </h1>
                                    <table class="w-full text-center shadow-lg">
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

                                                    <a href="/registration/view" title="view">

                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-6 w-6 text-sky-600" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
                                                    <a href="/registration/new" title="edit">

                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-6 w-6 text-emerald-600" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="whitespace-nowrap align-baseline">
                                                <td class="px-6 py-2 text-xs">Tupendane Empowerment</td>
                                                <td class="px-6 py-2 text-xs">TMC/2030/202</td>
                                                <td class="px-6 py-2 text-xs">19/1/2017</td>
                                                <td class="px-6 py-2 text-xs">10</td>
                                                <td class="px-6 py-2 text-xs flex space-x-4 justify-between">

                                                    <a href="/registration/view" title="view">

                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-6 w-6 text-sky-600" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
                                                    <a href="/registration/new" title="edit">

                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-6 w-6 text-emerald-600" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
        </div>


    </div>

    </div>


    <script>
        $(document).ready(function() {

            $('.toggle-sidenav').click(function() {
                $('.sidenav').toggleClass("hidden -translate-x-full")
            });
        })
    </script>

@endsection
