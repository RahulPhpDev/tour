
    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
                <h1>What Say Our Traveler</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="{{ URL::asset('assets/frontend/img/male.jpg') }}" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">
                        {{trans('app_content.deni.comment')}}
                        </p>
                        <h5 class="text-truncate">{{trans('app_content.deni.name')}}</h5>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="{{ URL::asset('assets/frontend/img/male.jpg') }}" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">
                        {{trans('app_content.rahul.comment')}}
                        </p>
                        <h5 class="text-truncate">
                        {{trans('app_content.rahul.name')}}
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->