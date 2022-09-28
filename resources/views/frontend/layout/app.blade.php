<html>
    <head>
        <title>App Name - @yield('title')</title>

        @include('frontend.layout.style')

    </head>
    <body>
       @include('frontend.layout.topbar')
@if(request()->route()->getName() === 'homepage' ||
request()->route()->getName() === 'home.about'
)
       @include('frontend.layout.carousel')
@endif

            @yield('content')

       @include('frontend.layout.footer')
       @include('frontend.utils.enquiry-modal')
    </body>
            @include('frontend.layout.script')
</html>
