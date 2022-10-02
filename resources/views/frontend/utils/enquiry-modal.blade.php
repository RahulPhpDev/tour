
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enquiry Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
        @for ($i = 0; $i < 13; $i++)
        <option value ="{{$i}}">{{$i}}</option>
        @endfor
        <option value ="13">More Than 12</option>
      </select>
    </div>

    <div class="form-group  col-md-6">
      <label for="inputState">Number Of Child </label>  <span >*</span>
      <select name="child" required id="inputState" class="form-control">
        <option selected>Choose...</option>
        @for ($i = 0; $i < 13; $i++)
        <option value ="{{$i}}">{{$i}}</option>
        @endfor
        <option value ="13">More Than 12</option>
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
</div>

@push('styles')
<style>
  label > span {
    color: red;
  }
  </style>
@endpush

