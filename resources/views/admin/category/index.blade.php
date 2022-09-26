

@extends('admin.layout.theme')
@section('content')
@php
$route = app('RoutesEnum')['adminCategory']; 
@endphp  
            <button>
        

                         <x-anchor href="{{route($route['create'])}}" >
                             {{ __('Add') }}
                          </x-anchor>
            </button>
            
             <!-- Session Status -->
         <x-auth-session-status class="mb-4" :status="session('status')" />
        @php
            $thead = ['Id', 'Type', 'Edit']
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
                                <x-tdata data="{{$record->type}}" />
                                <x-tdata class="flex" slot="true" >
                                <x-anchor href="{{route($route['edit'], $record->id)}}" class=" h-8"> Edit </x-anchor>
                                <form method="post" action="{{route($route['destroy'], $record->id)}}">
                                    @method('delete')
                                    @csrf
                                    <button type ="submit" class="flex p-2 rounded-md text-white bg-red-400"> Delete </button>
                                </form>
                            </x-tdata>
                            </tr>
                        @endforeach
                    </tbody>
                  
                </x-table>
            
            </div>
            {{ $records->links('pagination::tailwind') }}
                  
@endsection
