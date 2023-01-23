<header class="cover" style="background-image: url({{ $cover }})">
    <div class="container">
        @include('partials.navbar')
        <div class="row justify-content-center align-items-center h-75 text-white text-center ">
            <div class="col-md-6 ">
                @yield('heading')
            </div>
        </div>
    </div>
</header>
