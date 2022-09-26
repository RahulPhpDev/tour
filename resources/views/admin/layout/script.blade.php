
<script src="{{ URL::asset('/js/jquery-3.6.1.js')}}"></script>
<script src="{{ URL::asset('/js/ckeditor.js')}}"></script>

<script src ="{{ URL::asset("assets/js/tailwind-min.js") }}"/></script>

<script src= "{{ URL::asset("/js/select2.min.js") }}"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('.select-2').select2();
});
$( document ).ready(function() {
    ClassicEditor
            .create( document.querySelector( '.editor' ) )
            .catch( error => {
                console.error( error );
            } );
});
</script>
