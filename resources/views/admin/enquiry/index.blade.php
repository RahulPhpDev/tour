

@extends('admin.layout.theme')
@section('content')
@php
$route = app('RoutesEnum')['adminCategory']; 
@endphp  
         
            
             <!-- Session Status -->
         <x-auth-session-status class="mb-4" :status="session('status')" />
       
            <div class="flex space-x-10 flex-wrap space-y-8">
               
                @foreach($records as $record)
                    <div class="w-2/5 max-w-sm rounded overflow-hidden shadow-lg">
                        
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{$record->name}}</div>
                            <p class="text-gray-700 text-base">
                                {{$record->enquiry}}
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Adult: {{$record->adult}}</span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Child: {{$record->child}}</span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Email: {{$record->email}}</span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Mobile: {{$record->mobile}}</span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Date: {{$record->date}}</span>
                        </div>
                        </div>
                   
                        
                        @endforeach
            
            </div>
            {{ $records->links('pagination::tailwind') }}
                  
@endsection
