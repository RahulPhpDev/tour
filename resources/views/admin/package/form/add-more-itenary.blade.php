@php
$time = request()->query('time');
@endphp
<div>
                <x-label for="title" :value="__('Title')" />
                <x-input id="title" 
                        placeholder="Title"
                        name="title[{{$time }}]" 
                        required
                />
            </div>
            <div>
                <x-label for="name" :value="__('Description')" />
                <textarea id="editor3" class="editor2" style ="width:100% !important" name="description[{{$time }}]"></textarea>

            </div>


    <script type="text/javascript">

        // $( document ).ready(function() {
        //     ClassicEditor
        //             .create( document.querySelector( '#editor3' ) )
        //             .catch( error => {
        //                 console.error( error );
        //             } );

        //     });
        </script>