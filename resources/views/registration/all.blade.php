<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'TMC-VIKUNDI') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.min.css') }}">
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
                    <button id="toggle-top-nav"
                        class=" bg-gray-200 rounded-full overflow-hidden p-1 hover:bg-gray-300 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 object-cover" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </button>
                    <nav id="top-nav"
                        class=" hidden w-52 bg-green-600 text-gray-100 absolute right-0 my-2 text-sm  space-y-1 overflow-hidden rounded-sm transition duration-500 ease-in-out shadow-xl">
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
                        <a href="/registration"
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
                        <a href="/groups"
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
                        <a href="/attachments"
                            class="flex items-center align-baseline px-4 py-2 transition duration-200 ease-in-out hover:bg-gray-900 space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                            </svg>
                            <span class="text-xs">Attachments</span>
                        </a>
                    </div>
                    {{-- <div class="">
                        <a href="/registration/certificate"
                            class="flex items-center align-baseline px-4 py-2 transition duration-200 ease-in-out hover:bg-gray-900 space-x-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span class="text-xs">Certificates</span>
                        </a>
                    </div> --}}

                    <div>
                        <a href="/reports"
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
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
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

                                <div
                                    class="relative top-20 mx-auto bg-white shadow-xl max-w-xl  rounded-lg overflow-clip">
                                    {{-- <div class="bg-sky-700 p-5 overflow-clip">
                                        <h1 class="text-white font-bold uppercase">SAJILI KIKUNDI</h1>
                                    </div> --}}
                                    <a href=""
                                        class="close-modal absolute top-4 right-4 text-gray-700 hover:text-gray-900 outline-2 outline-gray-900 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </a>
                                    <div class="px-8 py-4 bg-white  ">
                                        <form action="" class="space-y-5" name="registerKikundi">
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                                                    </svg>
                                                </button>
                                                <button id=""
                                                    class="close-modal px-4 py-2 flex items-center space-x-3 bg-red-600 hover:bg-red-700 text-white shadow">
                                                    <span>Close</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
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

                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sky-600"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </a>
                                            <a href="/groups/{id}/edit" title="edit" id="edit-link">

                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-6 w-6 text-emerald-600" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
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
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('jquery-ui/jquery-ui.js') }}"></script>

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
                $("#street_name").val = ""

                let id = $id
                $.ajax({
                        type: "GET",
                        url: `/fetch_streets/${id}`,
                        dataType: "json",
                        data: {
                            'id': $id
                        }
                    })
                    .done(function(data) {
                        let option = `<option value="" selected disabled>Chagua...</option>`

                        data.forEach(street => {
                            option += `<option value="${street.id}">${street.name}</option>`;
                        })

                        $("#street_name").empty().append(option)
                    });
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


            //toggle avatar nav
            $("#toggle-top-nav").click(function() {
                $("#top-nav").toggle();
            })

            // toggle sidebar
            $(".toggle-sidenav").click(function() {
                $(".sidenav").toggle();
            })

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
                let ward_id = $(this).val();
                fetchStreets(ward_id);
            })

            $("#payment_date").datepicker({
                dateFormat: "dd-mm-yy",
                maxDate : 0
            });
            $("#attachment_date").datepicker({
                dateFormat: "dd-mm-yy",
                maxDate : 0
            });

        });
    </script>

</body>

</html>
