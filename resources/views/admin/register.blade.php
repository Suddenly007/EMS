@extends('layouts.master')

@section('title')
Registered Users | Event Management System 

@endsection

@section('content')
 <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Users</h4>
                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>
                        Edit
                      </th>
                      <th>
                        Delete
                      </th>
                       </thead>
                    <tbody>
                      @foreach ($users as $row)
                      <tr>
                        <td>{{$row->id}} </td>
                        <td>{{$row->name}} </td>
                        <td>{{$row->email}} </td>
                        <td>{{$row->userType}} </td>
                        <td><a href="{{ url ('/role-edit/'.$row->id) }}" class="btn btn-success">Edit</a></td>
                        <td>
                          <form action="{{ url ('/role-delete/'.$row->id) }}" method="POST">
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

@endsection
