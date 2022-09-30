

@extends('admin.layout.theme')
@section('content')
@php
$route = app('RoutesEnum')['adminSocial']; 
@endphp  
            <button>
                        <x-anchor href="{{route($route['create'])}}" >
                            {{ __('Add') }}
                    </x-anchor>
            </button>
            
             <!-- Session Status -->
         <x-auth-session-status class="mb-4" :status="session('status')" />
        @php
            $thead = ['Id', 'Phone', 'Whats App', 'Email','Address', 'Facebook', 'Instagram', 'Youtube', 'Linkedin', 'Twitter', 'Edit']
        @endphp
            <div class="block w-full overflow-x-auto">
                <x-table>
                    <thead>
                        <tr>
                            @foreach( $thead as $th)
                                <x-thead text="{{$th}}" />
                            @endforeach
                          </tr>
                    </thead>
                    <tbody>
                        @foreach($records as $record)
                            <tr class="border">
                                <x-tdata data="{{$record->id}}" />
                                <x-tdata data="{{$record->mobile}}" />
                                <x-tdata data="{{$record->whats_app}}" />
                                <x-tdata data="{{$record->email}}" />
                                <x-tdata data="{{$record->address}}" />
                                <x-tdata data="{{$record->facebook}}" />
                                <x-tdata data="{{$record->instagram}}" />
                                <x-tdata data="{{$record->youtube}}" />
                                <x-tdata data="{{$record->linkedin}}" />
                                <x-tdata data="{{$record->twitter}}" />
                                <x-tdata>
                                  <x-anchor href="{{route($route['edit'], $record->id)}}" class=" h-8"> Edit </x-anchor>
                                </x-tdata>
                            </tr>
                        @endforeach
                    </tbody>
                  
                </x-table>
            
            </div>
                  
@endsection
