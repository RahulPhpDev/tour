 @props(['data', 'slot'])

     
      
         <td
          {{ $attributes->merge(['class' => 'border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4']) }}
          >
               @isset ($data)
                 {{$data}}
                @endisset

                
              @isset($slot)
                {{$slot}}
              @endisset  

            </td>
    
	