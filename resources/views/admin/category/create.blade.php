@extends('admin.layout.theme')
@section('content')

@php
    $route = app('RoutesEnum')['adminCategory']; 
@endphp  

                    
 <x-anchor href="{{route($route['index'])}}" >
     {{ __('Show List') }}
  </x-anchor>

        <h3 class="text-xl leading-none font-bold text-gray-900 mb-2">Add </h3>
        <div class="block w-full overflow-x-auto">
            <form enctype="multipart/form-data" class="mt-2 lg:w-2/3 space-y-6" method = "post" action="{{route($route['store'])}}">
                @csrf
                <div>
                    <x-label class="text-sm font-medium text-gray-900 block mb-2" for="name" :value="__('Type')" />
                     <x-input id="type" 
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
                       
@endsection
