@extends('admin.layout.theme')
@section('content')

                    

        <h3 class="text-xl leading-none font-bold text-gray-900 mb-2">Add </h3>
        <div class="block w-full overflow-x-auto">
            <form enctype="multipart/form-data" class="mt-2 lg:w-2/3 space-y-6" method = "post" action="{{route('admin.visitor.store')}}">
                @csrf
                <div class=" flex space-x-3">
                    <div class="w-1/2">
                        Old Count: {{$record->number}}
                        <x-label for="name" :value="__('Visitor Number')" />
                        <x-input id="type" type="text" name="number" value="{{$record->number}}" required/>
                    </div>            
                 </div>
                 

                 <x-button >
                     {{ __('Save') }}
                  </x-button>


            </form>
        </div>
                       
@endsection
