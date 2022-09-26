<html>
    <head>
        <title>App Name - @yield('title')</title>

        @include('frontend.layout.style')

    </head>
    <body>
       @include('frontend.layout.topbar')

       @include('frontend.layout.carousel')


            @yield('content')

       @include('frontend.layout.footer')
    </body>
            @include('frontend.layout.script')
</html>
