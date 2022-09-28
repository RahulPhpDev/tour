@extends('frontend.layout.app')

@section('content')
<!-- https://www.visittnt.com/golden-triangle-tours/4-nights-5-days-delhi-agra-jaipur.html -->
<div class="pg-parent"> 
   <div class="bg-white header-package">
    <div class="container package-container">
        <div class="row package-row">
                <div class=" col-lg-5">
                    <section class="img-section" id = "img-section">
                    <div id="package-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($packages->image as $img)
                        <div style = "width: 543px; height: 380.68px; overflow: hidden; visibility: visible;" @class([
                                            'carousel-item',
                                            'active' => $loop->index == 0
                                        ]) 
                            >
                            <img  class="img" style = "width:543px;height: 380.68px" src="{{$img->src}}" alt="Image">
                        </div>
                        @endforeach
                    </div>
                        </div>
                </section>
                </div>

                <div class="col-lg-7">
                    <div class= "">
                            <h2 class="font-fangsong package-title"> {{$packages->title}} </h2>
                             <i class= "text-success fa fa-calendar-alt"></i>
                            <span  class ="text-primary"> {{ $packages->duration}} </span>
                    </div>
                    <div class="mt-4">
                        <p class="text-primary"> Destination </p>
                        <span class="destination-place"> Delhi - Agra - Mumbai </span>
                    </div>

                    <div class = "mt-4">
                        <div class ="package-description"> {!!  $packages->description !!} </div>
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

        <div class="row  package-itinerary m-5">
            <div class = "col-lg-7">
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
                        <div class="col-lg-6 include">
                            <h5> Its On Us &#128522 </h5>
                            {!! $packages->include !!}
                        </div>
                        <div class="col-lg-6 exclude">
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

            <div class = "col-lg-5">
                            @include('frontend.package.inquiry')
            </div>           
        </div>
</div>
                        </div>
                        </div>
       <style>
        .pg-parent {
            background-color: #1A1A3D;
            position: relative;
        }
        .header-package {
            /* background-image: url("/assets/img/bg-section-destination.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            mix-blend-mode: multiply;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            color:white; */
                /* height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    position: absolute; */
        }
        .include ul {
            list-style: none;
        }
        .exclude ul {
            list-style: none;
        }
        .include ul li {
            position: relative;
            margin-bottom:8px;
        } 
        .exclude ul li {
            position: relative;
            margin-bottom:8px;
        }
        .exclude ul li:before {
            position: absolute;
            content: "";
            width: 10px;
            height: 12px;
            top: 6px;
            left: -18px;
            background-image: url("/assets/img/not-incluse-list.png");
        }
        .include ul li:before {
            position: absolute;
            content: "";
            width: 13px;
            height: 13px;
            top: 6px;
            left: -1.2rem;
            background-image: url("/assets/img/cheack_list.png")
        }
        .package-itinerary::after {
            position: absolute;
            border-bottom:1px dotted blue;
            content: '';
            width: 92%;
            height: 2px;
            left:4%;
            /* bottom:1px; */
        }
        .package-itinerary > div{
            padding-top:3rem;
            /* margin-top:12rem; */
        }
        .package-title {
            margin-bottom: 2rem;
        }
        .package-title::after {
            position: absolute;
            height: 3px;
            width: 60%;
            content: '';
            top: 2.7rem;
            left: 1rem;
            background-image: linear-gradient(to right, #7700ff , #07ff00);
        }
        .package-container {
            /* background-color: rgba(0, 0, 0, 0.6); */
            padding-top: 3rem !important;
        }
        .destination-place {
            font-family: 'Circular-Loom';
            font-size: 1.2rem;
            letter-spacing: 0.2;
            font-weight: 500;
        }
        .font-fangsong {
            font-family: fangsong;
        }
            .facility-section {
                display: flex;
            }
            .package-description {
                text-align: justify;
                line-height: 1.8;
            }
            .customize-plan {
                color: #0c52d2;
                font-weight: 500;
                font-style: italic;
                font-size: 12px;
                position: relative;
                margin-top:2rem;
            }
            .customize-plan::before {
                width: 50%;
                /* border-style: dotted;
                border-width:1px; */

                height: 2px;
                position: absolute;
                content: '';
                bottom: 1.5rem;
                left: 0;
                background-image: linear-gradient(to bottom right, red, yellow);
            }
            .customize-plan::after {
                width: 60%;
                height: 2px;
                bottom: -5px;
                left: 15px;
                position: absolute;
                content: '';
                top:22;
                /* border-style: dotted;
                border-width:1px; */
                background-image: linear-gradient(to bottom right, red, yellow);
            }
.itinerary-details {
    line-height: 1.8;
    text-align: justify;
    padding-inline: 2.5rem;
    font-family: 'Circular-Loom';
    font-size: 15px;
    margin-top:1rem;
    margin-top: 1rem;
    letter-spacing: 0.4;
}

.include-exclude {
    border-top: 0.5px dashed gray;
}
.hotel-city {
    margin-top:2.5rem;
}
@media (max-width: 800px) {
    .package-row {
        margin:2rem;
    }
    
 }
           
        </style>

@endsection


