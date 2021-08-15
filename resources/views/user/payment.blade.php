@extends('layouts.master')

@section('title')
Dashboard | Event Management System 

@endsection

@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
 <div class="container mt-4 mb-4">
        <div class="row">
          <div class="col-md-6 offset-md-3 text-center">
              <h3>Payment Form</h3>

     <form action="{{ url('charge') }}" method="post" id="payment-form">
    @csrf

         <div class="form-group">
            <label>Full Name</label>
        <input type="text" name="name" value="{{ Auth::user()->name}}" class="form-control" placeholder="Enter Your Name" /> </div>

        <div class="form-group">
            <label>Amount</label>
        <input type="text" name="amount" class="form-control" placeholder="Enter Amount" />  </div>

        <div class="form-group">
        <label>Event Name</label>
        <input type="text"  name="event_name" placeholder="Enter Event Name" class="form-control">
        </div>

        <div class="form-group">
            <label>Email</label>
        <input type="email" name="email" value="{{ Auth::user()->email}}" class="form-control" placeholder="Enter Email" /> </div>



        <label for="card-element">
        Credit or debit card
        </label>
        <div id="card-element">
        <!-- A Stripe Element will be inserted here. -->
        </div>
      
        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>
        <div class="form-group">
    <button class="btn btn-primary" class="form-control">Submit Payment</button> </div>
    {{ csrf_field() }}
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
