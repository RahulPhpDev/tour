@extends('frontend.layout.app')

@section('content')
<!-- https://www.visittnt.com/golden-triangle-tours/4-nights-5-days-delhi-agra-jaipur.html -->
   
    <div class="container">
        <div class="row  m-5">
                <div class="col-xs-12 col-sm-5 col-md-5">
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

                <div class="col-xs-12 col-sm-7 col-md-7 border">
                    <div class= "">
                            <h2> {{$packages->title}} </h2>
                             <i class= "text-success fa fa-calendar"></i>
                            <span  class ="text-primary"> {{ $packages->duration}} </span>
                    </div>
                    <div class="mt-4">
                        <p class="text-primary"> Destination </p>
                        <span> Delhi - Agra - Mumbai </span>
                    </div>

                    <div class = "mt-4">
                        <p> {!!  $packages->description !!} </p>
                    </div>
                    <div class = "mt-4">
                        @if ($packages->facility_list)
                        <p class="facility-section">
                            @foreach($packages->facility_list->toArray() as $facility)
                                <i class="text-success ml-4 fa fa-{{$facility['icon']}}"> </i>
                                <i class="text-success  ml-4 fa fa-{{$facility['icon']}}"> </i>
                            @endforeach
                        </p>
                        @endif
                        <p class= "customize-plan"> This Tour can be customize according to your comfort and requirement </p>
                    </div>
               </div>
                </div>
        </div>

        <div class="row  m-5">
            <div class = "col-sm-8 col-md-8 col-xs-12">
                    @foreach($packages->itinerary as $itinerary )
                        <div class= "blockquote itinerary">
                            <h4> {{$itinerary->title}} </h4>
                            <div class="itinerary-details">
                                {!!  $itinerary->description !!}
                            </div>
                        </div>
                    @endforeach
<!-- incusive -->
                <div class = " mt-5 include-exclude">
                    <div class = "row  mt-3">
                        <div class="col-sm-6 col-md-6 col-xs-6">
                            <h5> Its On Us &#128522 </h5>
                            {!! $packages->include !!}
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-6">
                            <h5> Can't Afford &#128524 </h5>
                            {!! $packages->exclude !!}
                        </div>
                    </div>

                    <!----============== table============= -->
                    <div class="hotel-city">
                            <h5> We Can Arrange Hotel on Demands</h5>
                            
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>City</th>
                            <th>Budget</th>
                            <th>2 Star</th>
                            <th>3 Star</th>
                            <th>4 Star</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($packages->hotel_city as $hotel)
                                <tr>
                                    <td> {{$hotel['city']}} </td>
                                    <td> {{ $hotel['budget'] }} </td>
                                    <td> {{ $hotel['two_star'] }} </td>
                                    <td> {{ $hotel['three_star'] }} </td>
                                    <td> {{ $hotel['four_star'] }} </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    </div>
                </div>
            </div>

            <div class = "col-sm-4 col-md-4 col-xs-12">
                            @include('frontend.package.inquiry')
            </div>           
        </div>
</div>
       <style>
            .facility-section {
                display: flex;
            }
            .customize-plan {
                color: #0c52d2;
                font-weight: 500;
                font-style: italic;
                font-size: 12px;
                position: relative;
            }
            .customize-plan::before {
                width: 50%;
                /* border-style: dotted;
                border-width:1px; */

                height: 2px;
                position: absolute;
                content: '';
                bottom: 1.5rem;
                left: 10;
                background-image: linear-gradient(to bottom right, red, yellow);
            }
            .customize-plan::after {
                width: 60%;
                height: 2px;
                bottom: -5px;
                left: 15px;
                position: absolute;
                content: '';
                /* border-style: dotted;
                border-width:1px; */
                background-image: linear-gradient(to bottom right, red, yellow);
            }
.itinerary-details {
    font-size: 14px;
    margin-top:1rem;
}

.include-exclude {
    border-top: 0.5px dashed gray;
}
.hotel-city {
    margin-top:2.5rem;
}
           
        </style>
</html>
@endsection


