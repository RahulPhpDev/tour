<div class="block w-full overflow-x-auto">
        <form enctype="multipart/form-data" class="mt-2 lg:w-2/3 space-y-6" method = "post" action="{{route('admin.package.store',$queryParamInString)}}">
            @csrf
            <input type = "hidden" name = "ongoing_step" value = "1" />
            <div>
                <x-label for="title" :value="__('Title')" />
                <x-input id="title" 
                        placeholder="Package Title"
                        name="title" 
                        required
                        value="{{$package->title}}"
                />
            </div>
            <div>
                <x-label for="destination" :value="__('Destination')" />
                <x-input id="destination" 
                        placeholder="Destination Place"
                        name="destination" 
                        required
                        value="{{$package->destination}}"
                />
            </div>
            <div>
                <x-label for="name" :value="__('Description')" />
                 
                <textarea  class="editor" name="description">{!!$package->description!!}</textarea>
            </div>
            {{-- category --}}
           
            <div>
                <x-label class="text-sm font-medium text-gray-900 block mb-2" for="name" :value="__('Theme')" />
                     <select name = "category[]" multiple="multiple" class="select-2 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                        
                         @foreach($category as $value => $id)
                            <option 
                                value = "{{$id}}"
                                @if(
                                 collect($package->category->pluck('id')->toArray())->contains($id) 
                                 )  selected @endif
                             
                            > 
                            {{$value}} 
                        </option>
                         @endforeach
                     </select>
            </div>

            <div>
                <x-label class="text-sm font-medium text-gray-900 block mb-2" for="name" :value="__('Facility')" />
                     <select name = "facility[]" multiple="multiple" class="select-2 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                         @foreach($facility as $value => $id)
                            <option 
                                value = "{{$id}}"
                                @if(
                                   in_array($id,  explode(',',$package->facility))
                                 )  selected @endif
                             
                            > 
                            {{$value}} 
                        </option>
                         @endforeach
                     </select>
            </div>

            <div>
                <x-label for="name" :value="__('Duration')" />
                <x-input id="type" 
                        type="text"
                        name="duration" 
                        placeholder="Duration"
                        value="{{$package->duration}}"
                        required
                />
              
            </div>

            <div>
                <x-label for="name" :value="__('Price')" />
                <x-input id="type" 
                        type="text"
                        name="price" 
                        placeholder="Price"
                        value="{{$package->price}}"
                        required
                />
              
            </div>

            <div>
                <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Upload Image</label>
                @if($package->src) <img src="{{$package->src}}" width="200" /> @endif
                <input type="file" name="image"  @class([
                     'hidden'   => $request->query('page')
                    ]) >
            </div>

            <button type="submit" 
                @class([
                  "text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center",
                     'hidden'   => $request->query('page')
                    ])
            >Save</button>

        </form>
    </div>