@extends('layouts.master')

@section('title')
Dashboard | Event Management System 

@endsection

@section('content')
<div class="container-fluid ">
    <div class="card mb-5">
    <div class="card-header py-3 border-bottom-primary">
      <h6 class="m-0 font-weight-bold text-primary ">Edit Event</h6>
      </div>
      
  <div class="card-body">
  <form action="{{ url ('/event-update/'.$events->id) }}"
                       method="POST">
                         @csrf
        <div class="form-row">
        <div class="form-group col-md-3">
          <label for="event-name">Event Name</label>
          <input type="text" id="event-name" name="event_name" class="form-control" value="{{$events->event_name}}">
            </div>
        <div class="form-group col-md-3">
          <label for="date">Event Date</label>
          <input type="date" name="event_date" class="form-control" id="date" value="{{$events->event_date}}">
            </div>
        <div class="form-group col-md-3">
          <label for="event-time">Event Time</label>
          <input type="time" name="event_time" class="form-control" id="event-time"
            value="{{$events->event_time}}">
            </div>
            <div class="form-group col-md-3">
          <label for="event-location">Event Location</label>
          <input type="text" class="form-control" name="event_location" id="event-location"
            placeholder="Enter event location/venue" value="{{$events->event_location}}">
            </div>
          </div>
            <div class="form-row">
       <div class="form-group col-md-3">
          <label for="org-name">Organizer Name</label>
          <input type="text" name="organizer_name" class="form-control" id="org-name"
            placeholder="Enter organizer name"  value="{{ Auth::user()->name}}">
            </div>
    
        <div class="form-group col-md-3">
          <label for="org-email">Organizer Email</label>
          <input type="text" name="organizer_email" class="form-control" id="org-email"
            placeholder="Enter organizer email" value="{{ Auth::user()->email}}">
        </div>
        <div class="form-group col-md-3">
          <label for="org-phone">Organizer Phone</label>
          <input type="text" name="organizer_phone" class="form-control" id="org-phone"
            placeholder="Enter organizer phone" value="{{$events->organizer_phone}}">
        </div> 
    <div class="form-group col-md-3">
      <label for="upload-image" class="control-label">Upload Image</label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" name="image_path" id="upload-image" class="custom-file-input">
          <label class="custom-file-label" for="upload-image">max size 5MB</label>
        </div>
      </div>
      </div>
      </div>
    <div class="form-group">
      <label for="event-description">Event Description</label>
      <textarea id="event-description" rows="5" name="event_description"
        class="form-control" >{{$events->event_description}}</textarea>
    </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</div>
</div>

                      

@endsection

@section('scripts')

@endsection
