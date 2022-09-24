  @props(['url', 'value', 'icon'])
 <li>
    <a  href="{{$url}}" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
      <i class="fa {{$icon}}"> </i> <span class="ml-3 flex-1 whitespace-nowrap"> {{ $value }}</span>
   </a>
</li>