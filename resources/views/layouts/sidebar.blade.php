{{-- side nav --}}
<div class="sidenav bg-gray-800 w-1/5 max-w-max fixed inset-x-0 h-full space-y-0 transform  transition duration-200 ease-in-out ">
    <div class="px-4 pt-8 pb-6 font-bold text-lg uppercase text-gray-100">
        <a href="/dashboard" class="space-x-2">
            <i class="fas fa-home"></i>
            <span>HOME</span>
        </a>
    </div>

    {{-- include sidebar for registration --}}

    @include('registration.links')

    {{-- end sidebar --}}

    {{-- links --}}

</div>
