@extends('frontend.layout.app')
@section('title') About Us @endsection

@section('content')
<div class="pg-parent" style = "padding: 2rem;"> 
    <div>
   <p class="about-us-title"> {!! trans('app_content.about_us') !!} </p>
</div>


</div>

<style>

        .about-us-title {
            padding-inline: 4rem;
            line-height:2.2;
        }
</style>


@endsection
