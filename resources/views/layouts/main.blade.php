<!doctype html>
<html>
<head>
    @include('includes.headm')
</head>
<body>


    <header class="row">
        @include('includes.headerm')
    </header>

            {{--@include(config('laravel-menu.views.bootstrap-items'), ['items' => $MyNavBar->roots()])--}}
            @include(config('laravel-menu.views.bootstrap-items'), ['items' => $MyNavBar->roots()])
            @yield('content')

        
    <footer class="row">
        @include('includes.footerm')
    </footer>


</body>
</html>
