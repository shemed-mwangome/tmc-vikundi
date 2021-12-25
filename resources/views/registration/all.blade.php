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
            <div class="flex-1 px-8 py-6">
                <div class="space-y-4 pb-12">
                    <div class="content p-2 shadow-md bg-white rounded-sm">
                        <h1 class="uppercase font-bold text-sm">TAARIFA YA KIKUNDI</h1>
                    </div>
                    <div class="bg-white rounded-sm ">
                        <div class="p-4 bg-white">
                            <div class="flex justify-between">
                                <div>
                                    <button id="show-modal"
                                        class="px-4 py-2 bg-sky-600 hover:bg-sky-700 text-white flex space-x-3">
                                        <span>Add</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </button>
                                </div>
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

                        {{-- Overlay Effect --}}
                        <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-80 overflow-y-auto h-full w-full transition duration-100 ease-in-out"
                            id="registration-modal">

                            {{-- modal content --}}

                            <div class="relative top-20 mx-auto bg-white shadow-xl max-w-xl  rounded-lg overflow-clip">
                                <a href=""
                                    class="close-modal absolute top-4 right-4 text-gray-700 hover:text-gray-900 outline-2 outline-gray-900 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </a>
                                <div class="px-8 py-4 bg-white  ">
                                    <form action="" class="space-y-4" name="registerKikundi">
                                        @csrf
                                        <div class="flex items-center space-x-4">
                                            <label for="group_name"
                                                class="w-1/3 inline-block min-w-max font-bold text-right text-sm ">Jina
                                                la
                                                Kikundi</label>
                                            <input type="text" name="group_name" id="group_name"
                                                class="flex-1 text-sm border-0 border-b-2 border-gray-300  outline-none  focus:ring-0 focus:border-gray-500"
                                                placeholder="Jina la Kikundi">
                                        </div>
                                        <div class="flex items-center space-x-4">
                                            <label for="ward"
                                                class="inline-block min-w-max  w-1/3 font-bold text-right text-sm ">Kata</label>
                                            <select name="ward_name" id="ward_name"
                                                class="flex-1 text-sm border-0 border-b-2 border-gray-300 outline-none focus:ring-0 focus:border-gray-500">
                                                <option value="" selected disabled>Chagua...</option>
                                            </select>
                                        </div>
                                        <div class="flex items-center space-x-4">
                                            <label for="street"
                                                class="inline-block min-w-max  w-1/3 font-bold text-right text-sm ">Mtaa</label>
                                            <select name="street_name" id="street_name"
                                                class="flex-1 text-sm border-0 border-b-2 border-gray-300 outline-none focus:ring-0 focus:border-gray-500">
                                                <option value="" selected disabled>Chagua...</option>
                                            </select>
                                        </div>
                                        <div class="flex items-center space-x-4">
                                            <label for="category_name"
                                                class="inline-block min-w-max  w-1/3 font-bold text-right text-sm ">Aina
                                                ya Kikundi</label>
                                            <select name="category_name" id="category_name"
                                                class="flex-1 text-sm border-0 border-b-2 border-gray-300 outline-none focus:ring-0 focus:border-gray-500">
                                                <option value="">Chagua...</option>
                                            </select>
                                        </div>
                                        <div class="flex items-center space-x-4">
                                            <label for="activity_name"
                                                class="inline-block min-w-max  w-1/3 font-bold text-right text-sm ">Shughuli
                                                ya Kikundi</label>
                                            <select name="activity_name" id="activity_name"
                                                class="flex-1 text-sm border-0 border-b-2 border-gray-300 outline-none focus:ring-0 focus:border-gray-500">
                                                <option value="">Chagua...</option>
                                            </select>
                                        </div>
                                        <div class="flex items-center space-x-4">
                                            <label for="attachment_date"
                                                class="w-1/3 inline-block min-w-max font-bold text-right text-sm ">Tarehe
                                                ya Kuleta Katiba</label>
                                            <input type="text" name="attachment_date" id="attachment_date"
                                                class="flex-1 text-sm border-0 border-b-2 border-gray-300  outline-none  focus:ring-0 focus:border-gray-500"
                                                placeholder="Weka Tarehe ya Kuleta Katiba">
                                        </div>
                                        <div class="flex items-center space-x-4">
                                            <label for="payment_no"
                                                class="w-1/3 inline-block min-w-max font-bold text-right text-sm ">Namba
                                                ya Malipo</label>
                                            <input type="text" name="payment_no" id="payment_no"
                                                class="flex-1 text-sm border-0 border-b-2 border-gray-300  outline-none  focus:ring-0 focus:border-gray-500"
                                                placeholder="Namba ya Malipo">
                                        </div>
                                        <div class="flex items-center space-x-4">
                                            <label for="payment_date"
                                                class="w-1/3 inline-block min-w-max font-bold text-right text-sm ">Tarehe
                                                ya Malipo</label>
                                            <input type="text" name="payment_date" id="payment_date"
                                                class="flex-1 text-sm border-0 border-b-2 border-gray-300  outline-none  focus:ring-0 focus:border-gray-500"
                                                placeholder="Weka Tarehe ya Malipo">
                                        </div>

                                        <div class="flex space-x-3 justify-end">
                                            <button type="submit"
                                                class="px-4 py-2 flex items-center space-x-3 bg-sky-600 hover:bg-sky-700 text-white shadow">
                                                <span>Save</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                                                </svg>
                                            </button>
                                            <button id=""
                                                class="close-modal px-4 py-2 flex items-center space-x-3 bg-red-600 hover:bg-red-700 text-white shadow">
                                                <span>Close</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>

                    {{-- table --}}
                    <div class="pb-4 bg-white w-full">
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

                                        <a href="/groups/{id}" title="view" id="view-link">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sky-600" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        <a href="/groups/{id}/edit" title="edit" id="edit-link">

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

    </div>


    <script>
        $(document).ready(function() {

            fetchWards();
            fetchActivity();
            fetchCategory();


            function fetchWards() {
                $.ajax({
                    type: "GET",
                    url: "/fetch_wards",
                    dataType: "json",
                    success: function(data) {
                        let option = ``;

                        data.forEach(item => {
                            option += `<option value="${item.id}">${item.name}</option>`;
                        })

                        $("#ward_name").append(option)
                    }
                })
            }

            function fetchStreets($id) {


            }

            function fetchActivity() {
                $.ajax({
                    type: "GET",
                    url: "/fetch_activity",
                    dataType: "json",
                    success: function(data) {
                        let option = ``;

                        data.forEach(item => {
                            option += `<option value="${item.id}">${item.name}</option>`;
                        })

                        $("#activity_name").append(option)
                    }
                })
            }

            function fetchCategory() {
                $.ajax({
                    type: "GET",
                    url: "/fetch_category",
                    dataType: "json",
                    success: function(data) {
                        let option = ``;

                        data.forEach(item => {
                            option += `<option value="${item.id}">${item.name}</option>`;
                        })

                        $("#category_name").append(option)
                    }
                })
            }

            $('.toggle-sidenav').click(function() {
                $('.sidenav').toggleClass("hidden -translate-x-full")
            });

            //show modal
            $("#show-modal").click(function() {
                $("#registration-modal").show();
            })

            //close modal
            $(".close-modal").click(function() {
                $("#registration-modal").hide();
            })
            //show edit modal
            $("#edit-link").click(function(e) {
                e.preventDefault();
                $("#registration-modal").show();
            })

            $("#ward_name").change(function() {
                let id = $(this).val();

                console.log(id)

                $.ajax({
                        type: "GET",
                        url: `/fetch_streets/${id}`,
                        dataType: "json",
                    })
                    .done(function(data) {
                        let option = `<option value="" selected disabled>Chagua...</option>`

                        data.forEach(street => {
                            option += `<option value="${street.id}">${street.name}</option>`;
                        })

                        $("#street_name").empty().append(option)
                    });

            })

            $("#payment_date").datepicker({
                dateFormat: "dd-mm-yy",
                maxDate: 0
            });
            $("#attachment_date").datepicker({
                dateFormat: "dd-mm-yy",
                maxDate: 0
            });
        })
    </script>

@endsection
