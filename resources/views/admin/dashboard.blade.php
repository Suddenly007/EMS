@extends('layouts.master')

@section('title')
Dashboard | Event Management System 

@endsection

@section('content')
 <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                
                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              </div>
              <div class="card-body">
                <div class = "jumbotron text-center">
        <h1>Event Management System</h1>
        <p>This is application for online events management </p>
        
   </div>
      </div>
  </div>
</div>
</div>

                      

@endsection

@section('scripts')

@endsection
