<html>
    <head>
        <title>App Name - @yield('title')</title>

        @include('frontend.layout.style')
        @include('frontend.layout.script')
    </head>
    <body>
       @include('frontend.layout.header')

        <div class="container">
            @yield('content')
        </div>

       @include('frontend.layout.footer')
    </body>
</html>
