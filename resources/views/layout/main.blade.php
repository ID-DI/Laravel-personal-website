<!doctype html>
<html lang="en">

@include('partials.head')

<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    <script src="{{ asset('js/navbar.js') }}"></script>
</body>

</html>
