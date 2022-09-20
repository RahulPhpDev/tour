@extends('admin.layout.theme')
@section('content')


    <div class="flex overflow-hidden bg-white pt-16">

        <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
        <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
            <main>
                <div class="pt-6 px-4">


                    <div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">


                        <div class="bg-white shadow rounded-lg p-4  ">
                    
                                     <x-anchor href="{{route('admin.package-type.index')}}" >
                                         {{ __('Show List') }}
                                      </x-anchor>

                            <h3 class="text-xl leading-none font-bold text-gray-900 mb-2">Add </h3>
                            <div class="block w-full overflow-x-auto">
                                <form enctype="multipart/form-data" class="mt-2 lg:w-2/3 space-y-6" method = "post" action="{{route('admin.package.store')}}">
                                    @csrf
                                    <div>
                                        <x-label class="text-sm font-medium text-gray-900 block mb-2" for="name" :value="__('Type')" />
                                         <x-input id="type" class="block mt-1 w-full"
                                            type="text"
                                            name="type"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                            required/>
                                      
                                    </div>
                                     <x-button >
                                         {{ __('Save') }}
                                      </x-button>


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
