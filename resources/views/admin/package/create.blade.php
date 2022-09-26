@extends('admin.layout.theme')
@section('content')
@php
   $completed_step = request()->query('completed_step') ?: 0 ;


@endphp

  <x-anchor href="{{route('admin.package.index')}}"> Show List </x-anchor>
  <h3 class="text-xl leading-none font-bold text-gray-900 mb-2 mt-1">Add </h3>

<div class="rounded border  mx-auto mt-4">
          <!-- Tabs -->
       @include('admin.package.tab')
                           
                             <!-- Tab Contents -->
                          <div id="tab-contents">
                            <div id="first" class="@if($completed_step != 0) hidden @endif p-4">
                                 @include('admin.package.form.overview')
                            </div>
                            <div id="second"
                             class="@if($completed_step != 1) hidden @endif p-4">
                             @include('admin.package.form.cities')
                            </div>
                            <div id="third" class="@if($completed_step != 2) hidden @endif p-4">
                               @include('admin.package.form.itenary')
                            </div>
                            <div id="fourth" class="@if($completed_step != 3) hidden @endif p-4">
                               @include('admin.package.form.include-exclude')
                            </div>
                             <div id="gallery" class="@if($completed_step != 4) hidden @endif p-4">
                               @include('admin.package.form.gallery')
                               
                            </div>
                          </div>
                        </div>

<script type="text/javascript">
   
let tabsContainer = document.querySelector("#tabs");

let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

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


