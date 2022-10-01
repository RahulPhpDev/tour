

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-6 mb-5">
                <a href="/" class="navbar-brand">
                 <img src = "{{trans('app_content.logo_url') }}" width="229px" height = "67px"/>
                </a>
                <p style = "font-size:14px"> {!!trans('app_content.about_us') !!}</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                @if($app_social->twitter) 
                    <a class="btn btn-outline-primary btn-square mr-2" target="_blank" href="//{{$app_social->twitter}}"><i class="fab fa-twitter"></i></a>
                @endif    

                @if($app_social->facebook)   
                    <a class="btn btn-outline-primary btn-square mr-2" target="_blank" href="//{{$app_social->facebook}}"><i class="fab fa-facebook-f"></i></a>
                @endif    
                
                @if($app_social->linkedin)
                    <a class="btn btn-outline-primary btn-square mr-2" target="_blank" href="//{{$app_social->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                @endif    
                
                @if($app_social->instagram)
                    <a class="btn btn-outline-primary btn-square" target="_blank" href="//{{$app_social->instagram}}"><i class="fab fa-instagram"></i></a>
                @endif    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="{{route('home.about')}}"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="{{route('home.terms')}}"><i class="fa fa-angle-right mr-2"></i>Term and Condition</a>
                   
                </div>
            </div>
      
            <div class="col-lg-4 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Reg Office: {{$app_social->address}}</p>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Branch Office:{{$app_social->branch_address}}</p>
                <p><a href="tel:{{$app_social->mobile}}"><i class="fa fa-phone-alt mr-2"></i>+91  {{$app_social->mobile}}</p></a>
                <p><i class="fa fa-envelope mr-2"></i> {{$app_social->email}}</p>
                
                
            </div>
        </div>
    </div>

    <!-- Footer End -->

    
    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a> -->