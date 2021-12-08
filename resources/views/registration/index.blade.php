@extends('layouts.app')

@section('content')


    <div class="min-h-screen flex relative">
        {{-- side nav --}}
        <div
            class="sidenav bg-gray-800 w-1/5 fixed inset-x-0 h-full space-y-0 transform  transition duration-200 ease-in-out ">
            <div class="px-4 pt-8 pb-6 font-bold text-lg uppercase text-gray-100">
                <a href="/dashboard" class="space-x-2">
                    <i class="fas fa-home"></i>
                    <small>HOME</small>
                </a>
            </div>

            {{-- links --}}
            <nav class="text-gray-100">
                <ul>
                    <li>
                        <a href="" class="px-4 py-2 transition duration-200 ease-in-out block hover:bg-gray-900 space-x-2">
                            <i class="fas fa-home"></i>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <li class="w-full">
                        <a href=""
                            class=" px-4 py-2 transition duration-200 ease-in-out block hover:bg-gray-900 space-x-2 toggle-caret ">
                            <i class="fas fa-users"></i>
                            <small>Vikundi</small>
                            <i class="fas fa-caret-right"></i>
                        </a>
                        <ul class="px-16 w-full bg-gray-900 hidden">
                            <li>
                                <a href="" class="">
                                    <small>Tafuta</small>
                                </a>
                            </li>

                            <li>
                                <a href="" class="">
                                    <small>Tafuta</small>
                                </a>
                            </li>

                            <li>
                                <a href="" class="">
                                    <small>Tafuta</small>
                                </a>
                            </li>


                        </ul>
                    </li>

                    <li>
                        <a href=""
                            class=" px-4 py-2 transition duration-200 ease-in-out block hover:bg-gray-900 space-x-2 toggle-caret ">
                            <i class="fas fa-file-pdf"></i>
                            <small>Report</small>
                        </a>

                    </li>


                </ul>
            </nav>
            {{-- end links --}}
        </div>
        {{-- end side nav --}}

        {{-- main contet --}}
        <div class="flex-1 bg-green-200">

        </div>
        {{-- end main content --}}
    </div>
@endsection
