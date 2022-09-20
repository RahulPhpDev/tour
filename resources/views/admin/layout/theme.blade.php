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

     <div class="flex overflow-hidden bg-white pt-16">

            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
                <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
                    <main>
                        <div class="pt-6 px-4">
                            <div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
                                <div class="bg-white shadow rounded-lg p-4  ">
                                    @yield('content')
                                    </div>
                               </div>
                         </div>
                      </main>
                 </div>
              </div>
        </div>

</body>
</html>
