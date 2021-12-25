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
                @include('setting.links')
            </nav>



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
                                <button class="modal-btn px-4 py-2 bg-sky-600 text-white flex space-x-3 hover:bg-sky-700 ">
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
                        <form action="/streets" method="POST" class="space-y-4 px-6 py-5">
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
                            <button type="submit" class="px-4 py-2 bg-sky-600 text-white hover:bg-sky-700 flex space-x-3">
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

                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                        </td>
                                        <td class="border px-6 py-2 text-sm w-8 ">

                                            <a href="/setting/streets/{{ $d->street_id }}" title="edit"
                                                class="text-red-500">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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
        $(document).ready(function() {

            $('.modal-btn').on("click", function() {
                $('.modal').show();
            })

            $('.close-modal').click(function() {
                $('.modal').hide();
            })


            $('.toggle-sidenav').click(function() {
                $('.sidenav').toggleClass("hidden -translate-x-full")
            });
        })
    </script>

@endsection
