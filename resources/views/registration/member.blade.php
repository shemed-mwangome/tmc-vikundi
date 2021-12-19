@extends('layouts.app')

@section('content')
    @include('layouts.topnav')


    <div class="wrapper min-h-screen flex overflow-hidden ">

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
                        <h1 class="uppercase font-bold text-sm">SAJILI KIKUNDI</h1>
                    </div>
                    <div class="form px-8 py-4 bg-white rounded-sm">
                        <form action="" class="w-4/5 space-y-6">
                            <div class="grid grid-cols-3 gap-6 items-baseline">
                                <label for="group_name" class="inline-block ">Jina la Kikundi</label>
                                <input type="text" class="col-span-2" id="group_name">
                            </div>
                            <div class="grid grid-cols-3 gap-6 items-baseline">
                                <label for="ward" class="inline-block ">Kata</label>
                                <select name="ward" id="ward" class="col-span-2">
                                    <option value="">Azimio</option>
                                    <option value="">Azimio</option>
                                    <option value="">Azimio</option>
                                    <option value="">Azimio</option>
                                </select>
                            </div>
                            <div class="grid grid-cols-3 gap-6 items-baseline">
                                <label for="street" class="inline-block ">Mtaa</label>
                                <select name="street" id="street" class="col-span-2">
                                    <option value="">Azimio</option>
                                    <option value="">Azimio</option>
                                    <option value="">Azimio</option>
                                    <option value="">Azimio</option>
                                </select>
                            </div>
                            <div class="grid grid-cols-3 gap-6 items-baseline">
                                <label for="category" class="inline-block ">Aina ya Kikundi</label>
                                <select name="category" id="category" class="col-span-2">
                                    <option value="">Azimio</option>
                                    <option value="">Azimio</option>
                                    <option value="">Azimio</option>
                                    <option value="">Azimio</option>
                                </select>
                            </div>
                            <div class="grid grid-cols-3 gap-6 items-baseline">
                                <label for="category" class="inline-block ">Shughuli za Kikundi</label>
                                <select name="category" id="category" class="col-span-2">
                                    <option value="">Azimio</option>
                                    <option value="">Azimio</option>
                                    <option value="">Azimio</option>
                                    <option value="">Azimio</option>
                                </select>
                            </div>
                            <div class="grid grid-cols-3 gap-6 items-baseline">
                                <label for="submission_date" class="inline-block ">Tarehe ya kuleta katiba</label>
                                <input type="date" class="col-span-2" id="submission_date">
                            </div>
                            <div class="grid grid-cols-3 gap-6 items-baseline">
                                <label for="receipt_no " class="inline-block ">Namba ya malipo</label>
                                <input type="text" class="col-span-2" id="recepit_no">
                            </div>

                            <div class="grid grid-cols-3 gap-6 items-baseline">
                                <label for="submission_date" class="inline-block ">Tarehe ya Malipo </label>
                                <input type="date" class="col-span-2" id="pay_date">
                            </div>

                            <div class="grid grid-cols-3 gap-4">
                                <button type="submit"
                                    class="uppercase col-start-2 bg-emerald-600  text-white hover:bg-sky-700 px-4 py-3">Save</button>
                                <button type="submit"
                                    class="uppercase col-start-3 bg-emerald-600  text-white hover:bg-sky-700 px-4 py-3">Reset</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>


    </div>

    @include('registration.scripts')

@endsection
