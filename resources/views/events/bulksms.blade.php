@extends('layouts.master')

@section('title')
Send Sms | Event Management System 

@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
 <div class="container mt-4 mb-4">
        <div class="row">
          <div class="col-md-6 offset-md-3">
              <h3>Send Messages</h3>

         <form action='{{ route('bulksend')  }}' method='get'>
              @csrf
                      @if($errors->any())
              <ul>
             @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
             @endforeach
        @endif

        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

      



    <div class="form-group">
    <label for="numbers">Phone numbers (seperate with a comma [,])</label>
                <input  type="text" class="form-control" name="numbers"
                    placeholder="eg +255756060856" value="">
                    </div>
 

   	  <div class="form-group">
                        <label for="event-name">Message</label>
                        <textarea name='message' class="form-control" rows="2" placeholder="Enter message" value=""></textarea >
                            </div>
     
       
    
                       
                        

         
          
  

  <div class="col-12">
    <button type="submit" value="Send" class="btn btn-primary">Submit</button>
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
