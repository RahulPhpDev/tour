@extends('admin.layout.theme')

@section('content')




<body class="bg-gray-50">


<div class="flex overflow-hidden bg-white pt-16">

    <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>

    @include('admin.demo')
</div>
</body>
</html>
    @endsection


