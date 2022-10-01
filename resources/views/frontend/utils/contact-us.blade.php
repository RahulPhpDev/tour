@extends('frontend.layout.app')

@section('content')

<div class="container package-container mt-5">
        <div class="row package-row">
            <div class = "col-md-6 col-lg-6 col-xs-12 contact-us-section">
                   <h5 class="mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                    <p class="pr-5"><b>Registered Office:</b> <i class="fa fa-map-marker-alt mr-2"></i>{{$app_social->address}}</p>
                    <p class="pr-5"><b>Brach Office: </b> <i class="fa fa-map-marker-alt mr-2"></i>{{$app_social->branch_address}}</p>
                    <p><i class="fa fa-envelope mr-2"></i> {{$app_social->email}}</p>
                    <p><a href="tel:{{$app_social->mobile}}"><i class="fa fa-phone-alt mr-2"></i>+91   {{$app_social->mobile}} </a> </p>  
            </div>

            <div class = "col-md-6 col-lg-6 col-xs-12 form-contact">
<form method = "post" action = "{{route('enquiry.store')}}">
            @method('put')
                @csrf
  <div class="form-row">

  <div class="form-group col-md-6">
      <label for="inputPassword4">Name <span >*</span></label>
      <input name= "name" required type="text" class="form-control" id="inputPassword4" placeholder="name">
    </div>


    <div class="form-group col-md-6">
      <label for="inputEmail4">Email <span>*</span></label>
      <input name="email" type="email" required class="form-control" id="inputEmail4" placeholder="Email">
    </div>
 
  </div>
  <div class="form-group">
    <label for="inputAddress">Phone Number <span>*</span></label>
    <input name="mobile" type="number" required class="form-control" id="inputAddress" placeholder="Enter your mobile number">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Expecting Journey Date</label>
    <input name="date" type="date" class="form-control" id="inputAddress2"/>
</div>

  <div class="form-row">
    <div class="form-group  col-md-6">
      <label for="inputState">Number Of Adult</label>  <span >*</span>
      <select name="adult" required id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>

    <div class="form-group  col-md-6">
      <label for="inputState">Number Of Child </label>  <span >*</span>
      <select name="child" required id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
</div>

<div class="form-group  col-md-12">      
    <label for="comment">Your Enquiry  <span >*</span> </label>
    <div>
    <textarea required name="enquiry" class="form-control" style="min-width: 100%;"></textarea>
    </div>


</div>
  <button type="submit" class="btn btn-primary">Enquiry</button>
</form>

</div>
</div>
</div>

@push('styles')
    <style>
            .form-contact {
                background: #4f4c4c;
                color: white;
                padding: 20px;
                border-radius: 12px
            }
            .contact-us-section > p {
                    line-height: 3rem;
            }
        </style>
@endpush
@endsection