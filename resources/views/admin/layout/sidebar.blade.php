<aside id="sidebar" class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75" aria-label="Sidebar">
    <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
        <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 bg-gray-200 divide-y space-y-1">
                <ul class="space-y-2 pb-2">

                    <li>
                        <a href="/dashboard" class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group">
                            <span class="ml-3 font-bold">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.destination.index')}}" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                            <i class="fa fa-search"></i>
                            <span class="ml-3 flex-1 whitespace-nowrap">Destination</span>
                        </a>

                    </li>

                   
                   <x-sidebar-link
                    icon="fa-film"
                     url="{{route('admin.category.index')}}"
                     value="Category" />


                    <li>
                        <a  href="{{route('admin.package.index')}}" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                        <i class="fa fa-car"> </i> <span class="ml-3 flex-1 whitespace-nowrap "> Package  </span>
                        </a>
                    </li>


                    <li>
                        <button data-collapse-toggle = "dropdown-setting"> Setting </button>
                                   <x-sidebar-link icon="fa-gift" url="{{route('admin.facility.index')}}" value="Facility" />

                                   <x-sidebar-link icon="fa-users" url="{{route('admin.group.index')}}" value="Group" />
                        </ul>
                       
                    </li>
                </ul>

            </div>
        </div>
    </div>
</aside>
