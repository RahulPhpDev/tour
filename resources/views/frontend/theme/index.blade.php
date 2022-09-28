@extends('frontend.layout.app')

@section('content')
<section style="background-color: #eee;">
  <div class="container py-5">
 @foreach($categories as $category)
    @include('frontend.theme.theme-package')
  @endforeach
  </div>
</section>
@endsection