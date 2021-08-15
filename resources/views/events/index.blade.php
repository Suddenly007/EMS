@extends('layouts.master')

@section('title')
Dashboard | Event Management System 

@endsection

@section('content')
 <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Events</h4>
                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

              </div>
              <style>
                .w-4px{
                  width: 10% !important;
                }
                
              </style>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="myTable" class="table">
                    <thead class=" text-primary">
                      <th>ID</th>
                      <th class="w-3px">Event Name</th>
                      <th class="w-9px">Event Date</th>
                      <th class="w-9px">Event Time</th>
                      <th class="w-8px">Event Venue</th>
                      <th class="w-18px">Event Description</th>
                      <th class="w-8px">Organizer Name</th>
                      
                      <th class="w-5px" >
                        Action
                      </th>
                      <th class="w-5px">
                        Edit
                      </th>
                      <th class="w-5px">
                        Delete
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
                        
                        <td><a href="{{ url ('/event-show/'.$row->id) }}" class="btn btn-primary">Show</a></td>

                        <td><a href="{{ url ('/event-edit/'.$row->id) }}" class="btn btn-secondary">Edit</a></td>
                        
                        <td>
                          <form action="{{ url ('/event-delete/'.$row->id) }}" method="POST">
                            @csrf
                         @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>


                        </td>
                        
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
