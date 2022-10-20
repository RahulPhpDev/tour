@extends('frontend.layout.app')

@section('title') {{ str_replace('-', ' ', ucfirst($slug)) }} @endsection

@section('content')
<section style="background-color: #eee;">
  <div class="container py-5">
 @foreach($categories as $category)
    @include('frontend.theme.theme-package')
  @endforeach
  </div>
</section>
@endsection