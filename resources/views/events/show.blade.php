@extends('layouts.master')

@section('title')
Show-Registered Event | Event Management System 

@endsection

@section('content')
<div class="container-fluid ">
    <div class="row">
<div class="col-lg-8 col-md-12 col-sm-12">
<div class="jumbotron bg-white p-0">
<div class="img-container masthead">
    <img  width= "800" height="450" src="{{URL::to($events->image_path)}}">
</div>
<div class="row m-3">
<div class="col-md-12 ">
    <h4 class="text-dark font-weight-bold mb-4 underline-align-left">Event Description</h4>
        <p class="text-capitalize" style="white-space: pre-wrap; font-weight: bold; color:rgb(2, 2, 2)" >{{$events->event_description}}</p>
</div>
</div>


</div><!-- .jumbotron-->

</div><!-- .col-lg-8-->
<div class="col-lg-4 col-md-12 col-sm-12">
<div class="jumbotron bg-white p-0">
<div class="event-detail-title border-bottom p-4 d-flex justify-content-between">
<h4 class="title font-weight-bold text-dark text-capitalize"><span class="font-weight">{{$events->event_name}}
    </span></h4>

</div>
<div class="event-details pl-4 pr-4">
    <div class="detail-box border-bottom pt-4 pb-4">
        <div class="row">
            <div class="col-md-2 d-flex align-items-center">
                <i class="fas fa-map-marker fa-2x text-primary"></i>
             </div>
            <div class="col-md-10 justify-content-left">
                <span class="d-inline-block text-dark font-weight-bold">Event Location/Venue</span>
                <span class="d-block" style="font-weight:bold; color:rgb(187, 199, 27);font-size:1.5em; white-space: pre-wrap;" >{{$events->event_location}} </span>
            </div>
        </div>
    </div>
<div class="event-details pl-4 pr-4">
<div class="detail-box border-bottom pt-4 pb-4">
    <div class="row">
        <div class="col-md-2 d-flex align-items-center">
            <i class="fas fa-calendar-alt fa-2x text-primary"></i>
        </div>
        <div class="col-md-10 justify-content-left">
            <span class="d-inline-block text-dark font-weight-bold">Event Date</span>
            <span class="d-block">{{$events->event_date}} </span>
        </div>
    </div>
</div>
<div class="detail-box border-bottom pt-4 pb-4">
    <div class="row">
        <div class="col-md-2 d-flex align-items-center">
            <i class="fas fa-clock fa-2x text-primary"></i>
        </div>
        <div class="col-md-10 justify-content-left">
            <span class="d-inline-block text-dark font-weight-bold">Event Time</span>
            <span class="d-block">{{$events->event_time}} </span>
        </div>
    </div>
</div>
<div class="detail-box border-bottom pt-4 pb-4">
    <div class="row">
        <div class="col-md-2 d-flex align-items-center">
            <i class="fas fa-user fa-2x text-primary"></i>
        </div>
        <div class="col-md-10 justify-content-left">
            <span class="d-inline-block text-dark font-weight-bold">  Organizer Name</span>
            <span class="d-block">{{$events->user->name}} </span>
        </div>
    </div>
</div>
<div class="detail-box border-bottom pt-4 pb-4">
    <div class="row">
        <div class="col-md-2 d-flex align-items-center">
            <i class="fas fa-phone fa-2x text-primary"></i>
        </div>
        <div class="col-md-10 justify-content-left">
            <span class="d-inline-block text-dark font-weight-bold">Organizer Phone</span>
            <span class="d-block">{{$events->organizer_phone}}</span>
        </div>
    </div>
</div>
<div class="detail-box border-bottom pt-4 pb-4">
    <div class="row">
        <div class="col-md-2 d-flex align-items-center">
            <i class="fas fa-envelope fa-2x text-primary"></i>
        </div>
        <div class="col-md-10 justify-content-left">
            <span class="d-inline-block text-dark font-weight-bold">Organizer Email</span>
            <span class="d-block">{{$events->user->email}}</span>
        </div>
    </div>
</div>


</div>

</div><!-- .jumbotron-->

</div><!-- .row-->
</div>
<!-- /.container-fluid -->
</div>
<div class="col-md-6 offset-md-3 text-center">
         <a href="{{ route ('bulksms') }}" class="btn btn-success">Continue</a>
            <a href="{{ route ('event.index') }}" class="btn btn-danger">Cancel</a>
          </div>

@endsection

@section('scripts')

@endsection
