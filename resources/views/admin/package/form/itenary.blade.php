<div class="block w-full overflow-x-auto">
	@php
	// dd( $package->itinerary->count());
	$times = $package->itinerary->count();
	@endphp
        <form enctype="multipart/form-data" class="mt-2 lg:w-2/3 space-y-6" method = "post" action="{{route('admin.package.store', $queryParamInString )}}">
            @csrf
            <input type = "hidden" name = "ongoing_step" value = "3" />
            <input type = "text" id = "times" value = "{{$times}}" />

   			 @foreach( $package->itinerary as $key => $itinerary)

   			 	<div>
	                <x-label for="title" :value="__('Title')" />
	                <x-input id="title" 
	                        placeholder="Title"
	                        name="title[{{$key}}]"
	                        value="{{$itinerary->title}}"
	                        required
	                />
       			 </div>

	            <div>
	                <x-label for="name" :value="__('Description')" />
	                <textarea class="editor{{$loop->index}}" name="description[{{$key}}]">{{$itinerary->description}}</textarea>
	            </div>
            @endforeach

            @if(!$request->query('page'))
		            <div>
		                <x-label for="title" :value="__('Title')" />
		                <x-input id="title" 
		                        placeholder="Title"
		                        name="title[{{$times}}]" 
		                        required
		                />
		            </div>


		            <div>
		                <x-label for="name" :value="__('Description')" />
		                <textarea id="editor2" class="editor{{$times}}" name="description[{{$times}}]"></textarea>
		            </div>
            @endif

            <div id = "div1">
            </div>
           	<button type="button" 
           	onClick="renderMore()"
		                @class([
		                  "bg-red-400  text-white px-1 rounded-lg text-sm py-1 ",
		                     'hidden'   => $request->query('page')
		                    ])
		            >+ Add More</button>
 			
 				<div>
 					  <button type="submit" 
		                @class([
		                  "text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center",
		                     'hidden'   => $request->query('page')
		                    ])
		            >Save</button>
	           	 {{-- <x-button class="@if($request->query('page')) hidden @endif" type="submit"> Save </x-button> --}}
	           	</div>
        </form>
    </div>

@push('scripts')
    <script type="text/javascript">

    	$( document ).ready(function() {
			let time = $("#times").val();
			time++
			console.log('time', time)
			for( let i = 0; i < time; i++) {
				console.log(i, ' i time');
				 ClassicEditor.create( document.querySelector( `.editor${i}` ) )
			}
	});


function renderMore() {
let time = $("#times").val();
time++
	$.ajax( 
		{
			url: `/admin/package/add-more-itenary?time=${time}`,
			dataType: 'html',
			 success: function(result){
			    $("#div1").append(result);
			    $("#times").val( time );
			  }
			}
		)
}
</script>
@endpush