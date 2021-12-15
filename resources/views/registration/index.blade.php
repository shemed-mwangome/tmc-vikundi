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
                    <span class="text-sm">MWANZO</span>
                </a>
            </div>

            {{-- links --}}

            @include('registration.links')

            {{-- end links --}}

        </div>
        {{-- end sidebar --}}

        {{-- scroll wrapper --}}
        <div class="flex-1 flex overflow-hidden ">

            {{-- scroll content --}}
            <div class="flex-1  px-8 py-6">
                <div class="space-y-2">
                    <div class="content p-2 shadow-md bg-white rounded-sm">
                        <h1 class="uppercase font-bold text-sm">DASHBOARD</h1>
                    </div>

                    <div class="form shadow-md px-8 py-4 bg-white w-full">
                        <form action="" class="grid grid-cols-3 gap-y-5 gap-x-5">
                            <div class="space-y-2 col-span-2 ">
                                <label for="group_name" class="block font-medium text-sm text-gray-600">Jina la
                                    Kikundi</label>
                                <input type="text" name="group_name" id="group_name"
                                    class=" w-full border-gray-400 text-sm">
                            </div>
                            <div class="space-y-2 col-span-1 col-start-1">
                                <label for="group_activity" class="block font-medium text-sm text-gray-600">Shughuli za
                                    Kikundi
                                </label>
                                <select name="group_activity" id="group_activity" class="w-full text-sm">
                                    <option value="" selected disabled>Chagua Shughuli za kikundi</option>
                                    <option value="">Kusaidiana</option>
                                    <option value="">Wanawake</option>
                                    <option value="">Vijana</option>
                                    <option value="">Wanaume</option>
                                    <option value="">Machanganyiko</option>
                                </select>
                            </div>
                            <div class="space-y-2 col-span-1 col-start-2">
                                <label for="group_category" class="block font-medium text-sm text-gray-600">Aina ya Kikundi
                                </label>
                                <select name="group_category" id="group_category" class="w-full text-sm">
                                    <option value="" selected disabled>Chagua Aina ya Kikundi</option>
                                    <option value="">Walemavu</option>
                                    <option value="">Wanawake</option>
                                    <option value="">Vijana</option>
                                    <option value="">Wanaume</option>
                                    <option value="">Machanganyiko</option>
                                </select>
                            </div>
                            <div class="space-y-2 col-span-1 col-start-1">
                                <label for="ward_name" class="block font-medium text-sm text-gray-600">Kata </label>
                                <select name="ward_name" id="ward_name" class="w-full text-sm">
                                    <option value="" selected disabled>Chagua Kata</option>
                                    <option value="">Azimio</option>
                                    <option value="">Kijichi</option>
                                    <option value="">Buza</option>
                                    <option value="">Mbagala</option>
                                    <option value="">Sandali</option>
                                </select>
                            </div>
                            <div class="space-y-2 col-span-1 col-start-2">
                                <label for="street_name" class="block font-medium text-sm text-gray-600">Mtaa </label>
                                <select name="street_name" id="street_name" class="w-full text-sm">
                                    <option value="" selected disabled>Chagua Mtaa</option>
                                    <option value="">Azizi</option>
                                    <option value="">Azizi</option>
                                    <option value="">Azizi</option>
                                    <option value="">Azizi</option>
                                    <option value="">Azizi</option>
                                </select>
                            </div>
                            <div class="space-y-2 col-span-1 col-start-1">
                                <label for="submission_date" class="block font-medium text-sm text-gray-600">Tarehe ya
                                    Kuleta
                                    Katiba</label>
                                <input type="date" name="submission_date" id="submission_date" class="w-full text-sm">
                            </div>
                            <div class="space-y-2 col-span-1 col-start-1">
                                <label for="receipt_no" class="block font-medium text-sm text-gray-600">Namba Ya
                                    Malipo</label>
                                <input type="text" name="receipt_no" id="receipt_no" class="w-full text-sm">
                            </div>

                            <div class="space-y-2 col-span-1 col-start-2">
                                <label for="payment_date" class="block font-medium text-sm text-gray-600">Tarehe ya
                                    Malipo</label>
                                <input type="text" name="payment_date" id="payment_date" class="w-full text-sm"
                                    placeholder="Chagua Tarehe">
                            </div>
                            <div class="space-y-2 col-span-1 col-start-2">
                                <label for="payment_date" class="block font-medium text-sm text-gray-600">Tarehe ya
                                    Malipo</label>
                                <input type="text" name="payment_date" id="payment_date" class="w-full text-sm"
                                    placeholder="Chagua Tarehe">
                            </div>
                            <div class="space-y-2 col-span-1 col-start-2">
                                <label for="payment_date" class="block font-medium text-sm text-gray-600">Tarehe ya
                                    Malipo</label>
                                <input type="text" name="payment_date" id="payment_date" class="w-full text-sm"
                                    placeholder="Chagua Tarehe">
                            </div>
                            <div class="space-y-2 col-span-1 col-start-2">
                                <label for="payment_date" class="block font-medium text-sm text-gray-600">Tarehe ya
                                    Malipo</label>
                                <input type="text" name="payment_date" id="payment_date" class="w-full text-sm"
                                    placeholder="Chagua Tarehe">
                            </div>
                            <div class="space-y-2 col-span-1 col-start-2">
                                <label for="payment_date" class="block font-medium text-sm text-gray-600">Tarehe ya
                                    Malipo</label>
                                <input type="text" name="payment_date" id="payment_date" class="w-full text-sm"
                                    placeholder="Chagua Tarehe">
                            </div>
                            <div class="space-y-2 col-span-1 col-start-2">
                                <label for="payment_date" class="block font-medium text-sm text-gray-600">Tarehe ya
                                    Malipo</label>
                                <input type="text" name="payment_date" id="payment_date" class="w-full text-sm"
                                    placeholder="Chagua Tarehe">
                            </div>
                            <div class="space-y-2 col-span-1 col-start-2">
                                <label for="payment_date" class="block font-medium text-sm text-gray-600">Tarehe ya
                                    Malipo</label>
                                <input type="text" name="payment_date" id="payment_date" class="w-full text-sm"
                                    placeholder="Chagua Tarehe">
                            </div>
                            <div class="space-y-2 col-span-1 col-start-2">
                                <label for="payment_date" class="block font-medium text-sm text-gray-600">Tarehe ya
                                    Malipo</label>
                                <input type="text" name="payment_date" id="payment_date" class="w-full text-sm"
                                    placeholder="Chagua Tarehe">
                            </div>
                            <div class="space-y-2 col-span-1 col-start-2">
                                <label for="payment_date" class="block font-medium text-sm text-gray-600">Tarehe ya
                                    Malipo</label>
                                <input type="text" name="payment_date" id="payment_date" class="w-full text-sm"
                                    placeholder="Chagua Tarehe">
                            </div>
                            <div class="space-y-2 col-span-1 col-start-2">
                                <label for="payment_date" class="block font-medium text-sm text-gray-600">Tarehe ya
                                    Malipo</label>
                                <input type="text" name="payment_date" id="payment_date" class="w-full text-sm"
                                    placeholder="Chagua Tarehe">
                            </div>
                            <div class="space-y-2 col-span-1 col-start-2">
                                <label for="payment_date" class="block font-medium text-sm text-gray-600">Tarehe ya
                                    Malipo</label>
                                <input type="text" name="payment_date" id="payment_date" class="w-full text-sm"
                                    placeholder="Chagua Tarehe">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

    @include('registration.scripts')

@endsection
