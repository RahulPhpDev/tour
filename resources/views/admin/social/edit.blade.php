@extends('admin.layout.theme')
@section('content')
@php
    $route = app('RoutesEnum')['adminSocial']; 
@endphp  

                 <x-anchor href="{{route($route['index'])}}" >
                     {{ __('Show List') }}
                  </x-anchor>

        <h3 class="text-xl mt-2 leading-none font-bold text-gray-900 mb-2">Add </h3>
        <div class="block w-full overflow-x-auto">
            <form 
                enctype="multipart/form-data" 
                class="mt-2 lg:w-2/3 space-y-6"
                method = "post"
                action="{{route($route['update'], $record->id)}}"
              >
              @method('put')
                @csrf
                <div class=" flex space-x-3">
                    <div class="w-1/2">
                        <x-label for="name" :value="__('Phone')" />
                        <x-input id="type" type="number" name="mobile" value="{{$record->mobile}}" required/>
                    </div>
                    <div class="w-1/2">
                        <x-label for="name" :value="__('Whats App ')" />
                        <x-input id="type" type="number" name="whats_app" value="{{$record->whats_app}}" required/>
                    </div>                
                 </div>
                 
                 <div class=" flex space-x-3">
                    <div class="w-1/2">
                        <x-label for="name" :value="__('Address')" />
                        <x-input id="type" type="text" name="address" value="{{$record->address}}" required/>
                    </div>      
                    
                    
                    <div class="w-1/2">
                        <x-label for="name" :value="__('Branch Address')" />
                        <x-input id="type" type="text" name="branch_address" value="{{$record->branch_address}}" required/>
                    </div>      
                 </div>

                 <div class=" flex space-x-3">
                    
                 <div class="w-1/2">
                        <x-label for="name" :value="__('Email')" />
                        <x-input id="type" type="text" name="email"  value="{{$record->email}}" required/>
                    </div>

                    <div class="w-1/2">
                        <x-label for="name" :value="__('Facebook')" />
                        <x-input id="type" type="text" name="facebook" value="{{$record->facebook}}" required/>
                    </div>
                               
                 </div>

                 <div class=" flex space-x-3">
                    <div class="w-1/2">
                        <x-label for="name" :value="__('Linkedin')" />
                        <x-input id="type" type="text" name="linkedin" value="{{$record->linkedin}}" required/>
                    </div>
                    <div class="w-1/2">
                        <x-label for="name" :value="__('Youtube')" />
                        <x-input id="type" type="text" name="youtube" value="{{$record->youtube}}" required/>
                    </div>                
                 </div>

                 <div class=" flex space-x-3">
                    <div class="w-1/2">
                        <x-label for="name" :value="__('Twitter')" />
                        <x-input id="type" type="text" name="twitter" value="{{$record->twitter}}" required/>
                    </div> 
                    <div class="w-1/2">
                        <x-label for="name" :value="__('Instagram')" />
                        <x-input id="type" type="text" name="instagram" value="{{$record->instagram}}" required/>
                    </div>               
                 </div>

                 <x-button >
                     {{ __('Update') }}
                  </x-button>
            </form>
        </div>
                       
@endsection
