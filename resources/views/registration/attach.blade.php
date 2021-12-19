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
                        <h1 class="uppercase font-bold text-sm">SAJILI VIAMBATISHO</h1>
                    </div>
                    <div class="form px-8 py-4 bg-white rounded-sm">
                        <form action="" class="w-4/5 space-y-6">
                            <div class="grid grid-cols-3 gap-6 items-baseline">
                                <label for="cover_page" class="inline-block ">Cover Page</label>
                                <input type="file" name="cover_page" id="cover_page"
                                    class="file:bg-emerald-600 file:rounded-full file:text-white file:font-bold file:px-4 file:py-2 file:border-0 file:hover:bg-emerald-700 col-span-2 ">
                            </div>
                            <div class="grid grid-cols-3 gap-6 items-baseline">
                                <label for="preface" class="inline-block ">Utangulizi </label>
                                <input type="file" name="preface" id="cover_page"
                                    class="file:bg-emerald-600 file:rounded-full file:text-white file:font-bold file:px-4 file:py-2 file:border-0 file:hover:bg-emerald-700 col-span-2">
                            </div>
                            <div class="grid grid-cols-3 gap-6 items-baseline">
                                <label for="mission" class="inline-block ">Mission</label>
                                <input type="file" name="mission" id="mission"
                                    class="file:bg-emerald-600 file:rounded-full file:text-white file:font-bold file:px-4 file:py-2 file:hover:bg-emerald-700 file:border-0 col-span-2">
                            </div>
                            <div class="grid grid-cols-3 gap-6 items-baseline">
                                <label for="vision" class="inline-block ">Vision</label>
                                <input type="file" name="vision" id="vision"
                                    class="file:bg-emerald-600 file:rounded-full file:text-white file:font-bold file:px-4 file:py-2 file:hover:bg-emerald-700 file:border-0 col-span-2">
                            </div>
                            <div class="grid grid-cols-3 gap-6 items-baseline">
                                <label for="fund_source" class="inline-block ">Vyanzo vya Fedha</label>
                                <input type="file" name="fund_source" id="fund_source"
                                    class="file:bg-emerald-600 file:rounded-full file:text-white file:font-bold file:px-4 file:py-2 file:border-0 file:hover:bg-emerald-700 col-span-2">
                            </div>
                            <div class="grid grid-cols-3 gap-6 items-baseline">
                                <label for="mediation" class="inline-block ">Utatuzi wa Migogoro</label>
                                <input type="file" name="mediation" id="mediation"
                                    class="file:bg-emerald-600 file:rounded-full file:text-white file:font-bold file:px-4 file:py-2 file:border-0 file:hover:bg-emerald-700 col-span-2">
                            </div>

                            <div class="grid grid-cols-3 gap-4">
                                <button type="submit"
                                    class="uppercase col-start-2 bg-emerald-600 font-bold text-white hover:bg-sky-700 px-4 py-3">Save</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>


    </div>

    @include('registration.scripts')

@endsection
