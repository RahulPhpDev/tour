@extends('admin.layout.theme')
@section('content')

                    <div class="bg-white shadow rounded-lg p-4  ">
                        <button>
                            <x-anchor href="{{route('admin.package.create')}}"> Add </x-anchor>
                        </button>
                        <h3 class="text-xl leading-none font-bold text-gray-900 my-2">Packges</h3>
                        <div class="flex space-x-7 justify-between flex-wrap w-full overflow-x-auto">

                   @foreach($records as $record)
                        <figure class="md:flex mt-8 w-2/5 bg-slate-100 rounded-xl p-8 md:p-0 dark:bg-slate-800 h-60">
                            <img class=" h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto"src="{{ $record->src}}" alt="" width="384" height="512">

                            <div class=" md:px-8 md:py-2 text-center md:text-left space-y-4">
                            <h2 class="font-bold">  {{$record->title}} </h2>
                            <blockquote>
                            <p class="text-lg font-medium">
                                     {!! substr($record->description, 0, 20) !!}
                            </p>
                            </blockquote>
                        <figcaption class="font-medium">
                            <div 
                                 @class([
                                    'text-sky-500 mt-3 dark:text-sky-400 text-red-500',
                                    'text-green-500' => $record->completed_step == 5
                                ]) 
                            >
                                  @if($record->completed_step == 5) Complete @else  Pending @endif
                            </div>
                            <div class="mt-3 text-slate-700 flex dark:text-slate-500">
                                <form method="post" action="{{route('admin.package.destroy', $record->id)}}">
                                       @method('delete')
                                       @csrf
                                      <button type ="submit" class="flex p-2 rounded-md text-xs text-white bg-red-400"> Delete </button>
                                </form>
                                 <button  class="flex ml-2 p-2 rounded-md text-xs text-white bg-blue-400 h-8">
                                  <a 
                                 href = "{{ route('admin.package.create', ['id' => $record->id] ) }}"
                                > 
                                 Edit 
                                </a>
                            </button>
                            </div>
                           <button  class="flex ml-2 p-2 rounded-md text-xs text-white bg-green-400 h-8">
                                  <a 
                                 href = "{{ route('admin.package.create', ['id' => $record->id, 'page' => 'show']  ) }}"
                                > 
                                 More Details -> 
                                </a>
                     
                        </figcaption>
                    </div>
                </figure>

                                

                           @endforeach

                        </div>
                    </div>
               
@endsection
