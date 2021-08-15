@extends('layouts.king')

@section('title')
Dashboard | Event Management System 

@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
 <div class="container mt-4 mb-4">
        <div class="row">
          <div class="col-md-6 offset-md-3">
              <h3>Invitation Form</h3>

      <form action="{{ route('invitation.post')  }}" method="post" enctype="multipart/form-data">

      @csrf
 

    <div class="form-group">
      <label>Full Name</label>
      <input type="text" id="user_name" name="user_name" class="form-control" value="{{ Auth::user()->name}}">
  </div>

    <div class="form-row">
                            <div class="form-group col-md-6">
                            <label>Pickup Location</label>
                            <input type="text" name="pickup" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Drop-off Location</label>
                            <input type="text" name="drop_off"  class="form-control">
                        </div>
                        
      </div>
      <div class="form-group">
                            <label>Event Name</label>
                            <input type="text"  name="event_name" class="form-control">
                        </div>
       
                            <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="number"  class="form-control">
                        </div>
                       
                        <div  class="form-group">
                            <label>Drink Preference</label>
                            <select name="drink"  class="form-control placeholder">
                              <option value="">Choose The Drink</option>
                            
                            <option value="1">Alcoholic drink</option>
                            <option value="2">Non-alcoholic drink</option>
                            
                          </select>
                        </div>
                         <div class="form-group">
                            <label>Food Preference</label>
                            <select name="food"   class="form-control placeholder">
                            <option value="">Choose The Diet</option>
                            <option value="1">Vegetarian diet</option>
                            <option value="2">Diabetic diet</option>
                            <option value="3">None</option>
                          </select>
                           
           </div>

         
       
  

  <div class="col-12">
    <button type="submit" class="btn btn-secondary">Submit</button>
    <a href="{{ route ('one-index') }}" class="btn btn-danger">Cancel</a>
  </div>
</form>
      </div>
  </div>
</div>
</div>
</div>
</div>


                      

@endsection

@section('scripts')

@endsection
