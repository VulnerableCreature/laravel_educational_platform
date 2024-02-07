<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('includes.head')

<body class="antialiased font-main bg-[#fbfbfb]">
    @include('includes.aside-user')
    <section class="ml-0 py-4 px-3 lg:ml-72 h-screen">
        <div class="float-left w-full xl:w-3/5 px-4 min-h-full">
            <header class="w-full h-16 ">
                <livewire:decoration.title />
            </header>
            @yield('content')
        </div>
        <div class="float-right w-2/5 px-8 hidden min-h-full xl:block">
            <livewire:decoration.profile />
        </div>
    </section>
    @livewireScripts
</body>

</html>
