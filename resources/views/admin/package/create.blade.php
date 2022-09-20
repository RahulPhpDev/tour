@extends('admin.layout.theme')
@section('content')


 <button>
                                <a href="{{route('admin.package.index')}}" class=" mb-10 hidden sm:inline-flex ml-5 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 ml-0 py-2.5 text-center items-right mr-3">

                                    Show List
                                </a>
                            </button>
                            <h3 class="text-xl leading-none font-bold text-gray-900 mb-10">Add </h3>

<div class="rounded border  mx-auto mt-4">
  <!-- Tabs -->
  <ul id="tabs" class="inline-flex pt-2 px-1 w-full border-b">
    <li class="bg-white px-4 text-gray-800 font-semibold py-2 rounded-t border-t border-r border-l -mb-px"><a id="default-tab" href="#first">Details</a></li>
    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#second">Cities/Hotel</a></li>
    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#third">Itenary</a></li>
    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#fourth">Excule/Include</a></li>
    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#gallery">Gallery</a></li>
  </ul>

 




                           
                             <!-- Tab Contents -->
                          <div id="tab-contents">
                            <div id="first" class="p-4">
                             @include('admin.package.form.basic')
                            </div>
                            <div id="second" class="hidden p-4">
                              Second tab
                            </div>
                            <div id="third" class="hidden p-4">
                              Third tab
                            </div>
                            <div id="fourth" class="hidden p-4">
                              Fourth tab
                            </div>
                             <div id="gallery" class="hidden p-4">
                             Gallery
                            </div>
                          </div>
                        </div>

<script type="text/javascript">
   
   let tabsContainer = document.querySelector("#tabs");

let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

console.log(tabTogglers);

tabTogglers.forEach(function(toggler) {
  toggler.addEventListener("click", function(e) {
    e.preventDefault();

    let tabName = this.getAttribute("href");

    let tabContents = document.querySelector("#tab-contents");

    for (let i = 0; i < tabContents.children.length; i++) {
      
      tabTogglers[i].parentElement.classList.remove("border-t", "border-r", "border-l", "-mb-px", "bg-white");  tabContents.children[i].classList.remove("hidden");
      if ("#" + tabContents.children[i].id === tabName) {
        continue;
      }
      tabContents.children[i].classList.add("hidden");
      
    }
    e.target.parentElement.classList.add("border-t", "border-r", "border-l", "-mb-px", "bg-white");
  });
});
</script>
                       
@endsection


