@extends('layouts.master')

@section('title')
Edit-Registered | Event Management System 

@endsection

@section('content')
<div class="container">
	<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              	<h3>Edit Role for Registered User</h3>
               <div class="card-body">
               		<div class="row">
               			<div class="col-md-6">
               				<form action="{{ url ('/role-register-update/'.$users->id) }}"
               				 method="POST">
               					 @csrf
               			<div class="form-group">
               			 <label>Name</label>
					    <input type="text" class="form-control" value="{{$users->name}}" name="username">

					    <div class="form-group">
               			 <label>Give Role</label>
					   <select name="userType" class="form-control">
					   	<option value="admin">Admin</option>
					   	<option value="vendor">Vendor</option>
					   	<option value="">None</option>
					   </select>
					    <button type="submit" class="btn btn-success">Update</button>
					 	<a href="{{ route ('role-register') }}" class="btn btn-danger">Cancel</a>

               		</form>
               			</div>
               		</div>
               </div>
              </div>
          </div>
      </div>
  </div>

	</div>

@endsection

@section('scripts')

@endsection