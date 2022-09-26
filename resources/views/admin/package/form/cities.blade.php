<div class="block w-full overflow-x-auto">
	@php
	$thClass = "px-4 ml-10 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap";
	$hotelCity = $package->hotel_city ?: [['city' => '', 'budget' => 'On Request', 'two_star' => 'On Request', 'three_star' => 'On Request', 'four_star' => 'On Request']];
	// dd($hotelCity);
	@endphp
        <form enctype="multipart/form-data" class="mt-2 lg:w-2/3 space-y-6" method = "post" action="{{route('admin.package.store', $queryParamInString )}}">
            @csrf
            <input type = "text" name = "ongoing_step" value = "2" />

   			<table class="items-center w-full bg-transparent border-collapse">
   				<thead> 
   					<th class="{{$thClass}}"> City </th>
   					<th class="{{$thClass}}"> Budget </th>
   					<th class="{{$thClass}}"> 2 Star </th>
   					<th class="{{$thClass}}"> 3 Star </th>
   					<th class="{{$thClass}}"> 4 Star </th>
   				</thead>

   				<tbody id="cities-tbody">
   					@foreach ($hotelCity as $hotel)
   					<tr class = "border" id = "czContainer">
   						<td> 
   							<x-input id="title" 
	                        placeholder="Title"
	                        name="city[]"
	                        value="{{ $hotel['city'] }}"
	                        required
	               		 />
   						</td>

   						<td> 
   							<x-input id="title" 
	                        placeholder="Title"
	                        name="budget[]"
	                        value="On Request"
	                        value="{{ $hotel['budget'] }}"
	                        required
	               		 />
   						</td>
   						<td> 
   							<x-input id="title" 
	                        placeholder="Two Star"
	                        name="two_star[]"
	                        value="On Request"
	                        value="{{ $hotel['two_star'] }}"
	                        required
	               		 />
   						</td>
   						<td> 
   							<x-input id="title" 
	                        placeholder="Three Star"
	                        name="three_star[]"
	                        value="On Request"
	                        value="{{ $hotel['three_star'] }}"
	                        required
	               		 />
   						</td>
   						<td> 
   							<x-input id="title" 
	                        placeholder="Four Star"
	                        name="four_star[]"
	                        value="On Request"
	                        value="{{ $hotel['four_star'] }}"
	                        required
	               		 />
   						</td>
   					
   					</tr>
   					@endforeach
   				</tbody>
   			</table>
   			<div class="flex justify-end">
   			<button type="button" 
		           				onClick="renderMoreSection()"
				                @class([
				                  "bg-red-400  text-white p-1 rounded-lg text-sm"
			                    ])
			            > + Add </button>
			        </div>

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

    	$( document ).ready(function() {
			
		});

		  function renderMoreSection() {
			console.log('test');
			$.ajax( 
		{
			url: `/admin/package/add-more-cities-hotel`,
			dataType: 'html',
			 success: function(result){
			    $("#cities-tbody").append(result);
			  }
			}
		)
		}


</script>
@endpush