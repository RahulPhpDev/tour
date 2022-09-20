@extends('admin.layout.theme')
@section('content')


    <div class="flex overflow-hidden bg-white pt-16">

        <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
        <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
            <main>
                <div class="pt-6 px-4">


                    <div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">


                        <div class="bg-white shadow rounded-lg p-4  ">
                            <button>
                                <a href="{{route('admin.destination.index')}}" class=" mb-10 hidden sm:inline-flex ml-5 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 ml-0 py-2 text-center items-right mr-3">

                                    Show List
                                </a>
                            </button>
                            <h3 class="text-xl leading-none font-bold text-gray-900 mb-2">Add </h3>
                            <div class="block w-full overflow-x-auto">
                                <form class="mt-2 lg:w-2/3 space-y-6" method = "post" action="{{route('admin.destination.store')}}">
                                    @csrf
                                    <div>
                                        <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Title</label>
                                        <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Destination Title">
                                    </div>
                                    <div>
                                        <label for="description" class="text-sm font-medium text-gray-900 block mb-2"> Description</label>
                                        <textarea name="description" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" required></textarea>
                                    </div>


                                    <button type="submit" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center">Save</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <p class="text-center text-sm text-gray-500 my-10">
                &copy; 2019-2021 <a href="https://themesberg.com" class="hover:underline" target="_blank">Themesberg</a>. All rights reserved.
            </p>
        </div>
    </div>
@endsection
