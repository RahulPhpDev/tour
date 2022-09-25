  @php
   $completed_step = request()->query('completed_step') ?: 0 ;
   // dd( $completed_step );
  @endphp
   <ul id="tabs" class="inline-flex pt-2 px-1 w-full border-b">
            <li class="px-4 text-gray-800 font-semibold py-2 rounded-t bg-white 
               @if($completed_step == 0)
                  border-t border-r border-l -mb-px
                @endif  
             ">
               <a id = "@if($completed_step == 0) default-tab @endif" href="#first">Details</a>
            </li>

            <li class="px-4 text-gray-800 font-semibold py-2 rounded-t 
                @if($completed_step == 1)
                     border-t border-r border-l -mb-px
                   @endif 
               ">
               <a id = "@if($completed_step == 1) default-tab @endif" href="#second">Cities/Hotel</a>
            </li>


            <li class="px-4 text-gray-800 font-semibold py-2 rounded-t 
             @if($completed_step == 2)
                  border-t border-r border-l -mb-px
                @endif 
            ">
               <a id = "@if($completed_step == 2) default-tab @endif" href="#third">Itenary</a>
            </li>

            <li class="px-4 text-gray-800 font-semibold py-2 rounded-t
               @if($completed_step == 3)
                  border-t border-r border-l -mb-px
                @endif 
            ">
               <a id = "@if($completed_step == 3) default-tab @endif" href="#fourth">Excule/Include</a></li>
            <li class="px-4 text-gray-800 font-semibold py-2 rounded-t
               @if($completed_step == 4)
                  border-t border-r border-l -mb-px
                @endif 
            ">
               <a id = "@if($completed_step == 4) default-tab @endif" href="#gallery">Gallery</a></li>
          </ul>
