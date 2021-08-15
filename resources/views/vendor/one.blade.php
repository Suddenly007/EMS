@extends('layouts.king')

@section('title')
Dashboard | Event Management System 

@endsection

@section('content')
 <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> List of Events</h4>
                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

              </div>
              <style>
                .w-10px{
                  width: 10% !important;
                }
                
              </style>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="myTable" class="table">
                    <thead class=" text-primary">
                      <th>ID</th>
                      <th class="w-15px">Event Name</th>
                      <th class="w-7px">Event Date</th>
                      <th class="w-7px">Event Time</th>
                      <th class="w-8px">Event Venue</th>
                      <th class="w-18px">Event Description</th>
                      <th class="w-8px">Organizer Name</th>
                      
                      <th>
                        Action
                      </th>
                      
                     
                       </thead>
                    <tbody>
                      @foreach ($events as $row)
                      <tr>
                        <td>{{$row->id}} </td>
                        <td>{{$row->event_name}} </td>
                        <td>{{$row->event_date}} </td>
                        <td>{{$row->event_time}} </td>
                        <td>{{$row->event_location}} </td>
                        <td>
                          <div style="height: 80px; overflow: hidden;">
                          {{$row->event_description}}
                        </div> </td>
                        <td>{{$row->organizer_name}} </td>
                        
                        <td><a href="{{ url ('/event2-show/'.$row->id) }}" class="btn btn-success">Show</a></td>
                        
                        
                        
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
</div>

                      

@endsection

@section('scripts')
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
    } );
</script>


@endsection
