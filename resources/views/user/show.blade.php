@extends('layouts.master')

@section('title')
Dashboard | Event Management System 

@endsection

@section('content')
 <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Detail Of The Event Attendee</h4>
                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="myTable" class="table">
                    <thead class=" text-primary">
                      <th>ID</th>
                      <th>Full Name</th>
                      
                      <th>Pickup Location</th>
                      <th>Drop-off Location</th>
                      <th>Event Name</th>
                      <th>Number</th>
                      <th>Food</th>
                      <th>Drink</th>
                      
                       </thead>
                    <tbody>
                      @foreach ($invitations as $row)
                      <tr>
                        <td>{{$row->id}} </td>
                        <td>{{$row->user_name}} </td>
                      
                        <td>{{$row->pickup}} </td>
                        <td>{{$row->drop_off}} </td>
                        <td>{{$row->event_name}} </td>
                        <td>{{$row->number}} </td>
                        <td>{{$row->food}} </td>
                        <td>{{$row->drink}} </td>
                        
                        
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
