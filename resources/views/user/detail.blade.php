@extends('layouts.master')

@section('title')
Dashboard | Event Management System 

@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Detail Of The Payment</h4>
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
                      <th>Name</th>
                      <th>Payment ID</th>
                      <th>Event Name</th>
                      <th>Email</th>
                      
                      <th>Amount</th>
                      
                      <th>Payment Status</th>
                      
                      
                       </thead>
                    <tbody>
                      @foreach ($payments as $row)
                      <tr>
                        <td>{{$row->id}} </td>
                        <td>{{$row->payer_name}} </td>
                        <td>{{$row->payment_id}} </td>
                        <td>{{$row->event_name}} </td>
                        <td>{{$row->payer_email}} </td>
                        <td>{{$row->amount}} </td>
                        
                        <td>{{$row->payment_status}} </td>
                        
                        
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

