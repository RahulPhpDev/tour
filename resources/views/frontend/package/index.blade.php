@extends('frontend.layout.app')

@section('content')
    
   
    <div class="container">
<div class="row">
    
        <div class="col-xs-12 col-sm-6 col-md-6">

            <section class="img-section" id = "img-section">
            <div id="package-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($packages->image as $img)
                <div style = "width: 543px; height: 380.68px; overflow: hidden; visibility: visible;" @class([
                                    'carousel-item',
                                    'active' => $loop->index == 0
                                ]) 
                                
                    >
                    <img class="w-50" src="{{$img->src}}" alt="Image">
                    
                </div>
                @endforeach
              
            </div>
          
        </div>
            </section>
        </div>
</div>

<div class="row">
        <div class="col-md-3">
           
        </div>
    </div>
</div>
       
</html>
@endsection


