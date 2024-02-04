<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('includes.head')

<body class="antialiased font-main bg-[#fbfbfb]">
    @yield('content')
    @livewireScripts
</body>

</html>
