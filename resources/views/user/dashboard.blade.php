@extends('layouts.app')

@section('content')
    <section class="main-content">
        {{-- Display all available module --}}
        {{-- But need to check for permission to display required --}}
        <div class="top-nav bg-green-600 p-8 flex justify-between">
            <div class="left-nav">
                {{-- menu icon --}}
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </a>
            </div>
            <div class="right-nav">
                right
            </div>
        </div>
    </section>
@endsection
