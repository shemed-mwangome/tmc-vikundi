@extends('layouts.app')

@section('content')
    @include('layouts.topnav')


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

            {{-- links --}}

            @include('registration.links')

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

                                        <a href="#" title="view">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sky-600" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        <a href="#" title="edit">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-600"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
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

    @include('registration.scripts')

@endsection
