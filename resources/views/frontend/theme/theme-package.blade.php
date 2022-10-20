@foreach($category->package as $package)

<div class="row justify-content-center mb-3">
  <div class="col-md-12 col-xl-10">
    <div class="card shadow-0 border rounded-3">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
            <div class="bg-image hover-zoom ripple rounded ripple-surface">
              <img src="{{$package->src}}"
                class="w-100" />
              <a href="#!">
                <div class="hover-overlay">
                  <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-6">
            <h5>{{$package->title}}</h5>
            <!-- <div class="mt-1 mb-0 text-muted small">
              <span>100% cotton</span>
              <span class="text-primary"> • </span>
              <span>Light weight</span>
              <span class="text-primary"> • </span>
              <span>Best finish<br /></span>
            </div> -->
            
            <p class="text-truncate mb-4 mb-md-0">
            {!! Str::limit($package->description, 50, '...') !!}
            </p>
          </div>
          <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
            <div class="d-flex flex-row align-items-center mb-1">
                @if($package->price)
                <h4 class="mb-1 me-1"> &#x20B9; : {{$package->price ?: 'On Request'}}</h4>
              @endif
            </div>
           
            <div class="d-flex flex-column mt-4">
                <a class="text-white btn btn-primary btn-sm" href ="{{route('package.show', $package->slug)}}">
                 Details
            </a>
            <!-- Button trigger modal -->
              <button class="btn btn-outline-primary btn-sm mt-2" type="button" data-toggle="modal" data-target="#exampleModal">
                Enquiry
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endforeach