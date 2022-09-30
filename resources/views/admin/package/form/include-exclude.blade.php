	

<form enctype="multipart/form-data" class="mt-2 lg:w-2/3 space-y-6" method = "post" action="{{route('admin.package.store', $queryParamInString )}}">
	@csrf
            <input type = "hidden" name = "ongoing_step" value = "4" />

            <div>
                <x-label for="name" :value="__('Include')" />
                <textarea id="editor3" class="editor-include" name="include">{{$package->include}}</textarea>

            </div>

               <div class="mt-6">
                <x-label for="name" :value="__('Exclude')" />
                <textarea id="editor3" class="editor-exclude" name="exclude">{{$package->exclude}}</textarea>

            </div>
              <button type="submit" 
                @class([
                  "text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center",
                     'hidden'   => $request->query('page')
                    ])
            >Save</button>
</form>

@push('scripts')
    
    <script type="text/javascript">

        $( document ).ready(function() {
            ClassicEditor.create( document.querySelector( '.editor-include' ) );
            ClassicEditor.create( document.querySelector( '.editor-exclude' ) );

            });
        </script>

@endpush