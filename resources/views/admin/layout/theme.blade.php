<html>
<head>
    <title>App Name - @yield('title')</title>

    @include('admin.layout.style')
    @include('frontend.layout.script')
</head>
<body>

<div class="container">
    @include('admin.layout.navbar')
    @include('admin.layout.sidebar')
    @yield('content')
</div>

</body>
</html>
