@php

$merged = $packages->image->pluck('src');
$packagesImage = array_merge($merged->toArray(), [$packages->src] );

@endphp
@extends('frontend.layout.app')
@section('title') {{ str_replace('-', ' ', ucfirst($slug)) }} @endsection
@section('content')
<!-- https://www.visittnt.com/golden-triangle-tours/4-nights-5-days-delhi-agra-jaipur.html -->
<div class="pg-parent"> 
   <div class=" header-package">
    <div class="container package-container">
        <div class="row package-row">
                <div class=" col-lg-5">
                    <section class="img-section" id = "img-section">
                    <div id="package-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($packagesImage as $img)
                        <div style = "width: 543px; height: 380.68px; max-width:100%;overflow: hidden; visibility: visible;" @class([
                                            'carousel-item',
                                            'active' => $loop->index == 0
                                        ]) 
                            >
                            <img  class="img" style = "width:543px;height: 380.68px" src="{{$img}}" alt="Image">
                        </div>
                        @endforeach
                    </div>
                        </div>
                </section>
                </div>

                <div class="col-lg-7">
                    <div class= "">
                            <h2 class="font-fangsong package-title"> {{$packages->title}} </h2>
                            <div class="flex">
                            <i class= "text-success fa fa-calendar-alt"></i>
                            <span  class ="text-primary"> {{ $packages->duration}} </span>
                            <span class="inline h5 ml-5 package-price"> &#x20B9; : {{$packages->price ?: ' On Request'}}</span>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <p class="text-primary"> Destination </p>
                        <span class="destination-place"> {{ $packages->destination}} </span>
                    </div>

                    <div class = "mt-4">
                        <div class ="package-description"> {!!  $packages->description !!} </div>
                    </div>
                    <div class = "mt-4">
                        @if ($packages->facility_list)
                        <p class="facility-section">
                            @foreach($packages->facility_list->toArray() as $facility)
                                <i class="facility-icon ml-4 fa fa-{{$facility['icon']}}"> </i>
                            @endforeach
                        </p>
                        @endif
                        <p class= "customize-plan"> This Tour can be customize according to your comfort and requirement </p>
                    </div>
               </div>
                </div>
        </div>

        <div class="row ml-3 margin-desktop">
            <div class = "col-lg-7 ">
           
            <h4 class="mb-3 itinerary-title uppercase"> itinerary </h4>
                    @foreach($packages->itinerary as $itinerary )
                        <div class= "blockquote itinerary">
                           <i class="fa fa-clock clock-icon"> </i> <h5 class="pl-2"> {{$itinerary->title}} </h5>
                            <div class="itinerary-details">
                                {!!  $itinerary->description !!}
                            </div>
                        </div>
                    @endforeach
<!-- incusive -->
                <div class = " mt-5 include-exclude">
                    <p class="heading_tour-include_exclude mt-3"> Included/Excluded </p>
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
                            <h5 style = "color:green"> We  Arrange Hotel on Demands</h5>
                            
                    <table class="table table-striped table-responsive">
                        <thead>
                        <tr>
                            <th>City</th>
                            <th>2 Star</th>
                            <th>3 Star</th>
                            <th>4 Star</th>
                            <th>5 Star</th>
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
    
    @push('styles')
       <style>
       
        .itinerary-title 
        {
            font-variant: all-small-caps;
            letter-spacing: 1px;
            font-size: 2.3rem;
            color: green;
            font-weight: 700 !important;
        }
        .clock-icon {
            position: absolute;
             left: -17px;
             top:8px;
             color: blue;
             font-size:15px;
            }
        .itinerary {
            position: relative;
        }
        .itinerary::before{
            content: '';
            background: #cecece;
            position: absolute;
            width: 1.5px;
            top: 16;
            bottom: 0;
            margin-top:5px;
            height: 100%;
            left: -12px;
        }
        .heading_tour-include_exclude{
            font-size: 1.8rem;
            margin-bottom: 2rem;
            font-weight: 600;
            font-family: system-ui;
            color: green;
        }
        .pg-parent {
            background-color: #1A1A3D;
            position: relative;
        }
        .header-package {
            background-color: #fff9e7 !important;
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
        /* .package-title::after {
            position: absolute;
            height: 3px;
            width: 60%;
            content: '';
            top: 2.7rem;
            left: 1rem;
            background-image: linear-gradient(to right, #7700ff , #07ff00);
        } */
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
                font-style: italic;
                font-size: 12px;
                position: relative;
                margin-top:2rem;
                font-family: cursive;
                font-weight: 600;
                color: #2a0000;
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
.facility-icon {
    color: #01bd22;
}
.package-row {
        margin:0.2rem;
    }
    @media only screen and (max-width: 600px) {
        .carousel-item {
            max-width: 100% !important;
            height: 228px !important;
        }
        .carousel-item > img {
                max-width: 100% !important;
            height: 212px!important;
        }
        .package-price {
                margin-top: 14px;
                display: block;
                margin-left: 0 !important;
            }
    }
@media (min-width: 1200px) {
    .package-row {
        margin:2rem;
    }
    .margin-desktop {
            margin: 3rem;
        }
    
        .itinerary-details {
            padding-inline:1.5rem;
        }
 }
           
        </style>
@endpush
@endsection


