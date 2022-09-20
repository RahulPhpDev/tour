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
                        <a href="{{route('admin.destination.create')}}" class=" mb-10 hidden sm:inline-flex ml-5 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 ml-0 py-2.5 text-center items-right mr-3">
                           Add
                        </a>
                        </button>
                        <h3 class="text-xl leading-none font-bold text-gray-900 mb-10">Acquisition Overview</h3>
                        <div class="block w-full overflow-x-auto">
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                <tr>
                                    <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">Name</th>
                                    <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">Description</th>

                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                @foreach($records as $record)
                                    <tr class="text-gray-500">
                                        <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">
                                            {{$record->name}}
                                        </th>
                                        <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                                            {{$record->description}}

                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
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
