<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

        </div>

    <div>
            @include(config('laravel-menu.views.bootstrap-items'), ['items' => $MyNavBar->roots()])
            @yield('content')
            
    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
