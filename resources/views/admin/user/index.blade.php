@extends('layouts.admin.admin')
@section('conten')

 <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead class="bg-info">
                  <tr>
                    <th>User_id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($user as $users)
                  <tr>
                  <td>{{$users->id}}</td>
                  <td>{{$users->name}}</td>
                   <td>{{$users->email}}</td>
                  <td>{{$users->address}}</td>
                  <td>{{$users->phone}}</td>
                    <td>
                        <a href="{{url('/admin/user/edit/'. $users->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{url('/admin/user/delete/'. $users->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->



 @endsection
