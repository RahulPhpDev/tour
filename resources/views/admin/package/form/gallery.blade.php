<div class="block w-full overflow-x-auto">
	@php

	@endphp
        <form enctype="multipart/form-data" class="mt-2 lg:w-2/3 space-y-6" method = "post" action="{{route('admin.package.store', $queryParamInString )}}">
            @csrf
            <input type = "hidden" name = "ongoing_step" value = "5" />
            <div class="flex">
            @if ($package->image) 
	            @foreach($package->image as $img)
	        		<img src = "{{$img->src}}" width="200" height="200" class="mx-4" />
                    {{$img->id}}
                 
                        <button  type="submit" class="align-end text-red font-bold text-red-400"> 
                            <a href = "{{route('admin.image.destroy', $img->id)}}">Delete </a></button>
            
	            @endforeach
	            @endif
	        </div>
            
            @if(!$request->query('page'))

            <div>
                <x-label for="title" :value="__('Upload Gallery')" />
               <input name ="image[]" multiple="multiple" type="file">
            </div>
            @endif
           	@if($request->query('page') )  'dfd' @endif
 				<div>
                      <button type="submit" 
                        @class([
                          "text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center",
                     'hidden'   => $request->query('page')
                    ])
            >Save</button>
	           	</div>
        </form>
    </div>

@push('scripts')
    <script type="text/javascript">

    
</script>
@endpush