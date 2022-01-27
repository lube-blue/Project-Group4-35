@extends('layouts.admin.admin')
@section('conten')

<div class="container">
    <div class="col-12">

        <div class="card card-primary">
            <div class="card-header bg-info">
                <h3 class="card-title">Edit User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{url('/admin/user/update/'.$users->id)}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name"  value="{{$users->name}}">
                        <div class="row mt-3">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email"  value="{{$users->email}}">
                        <div class="row mt-3">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address"  value="{{$users->address}}">
                        <div class="row mt-3">
                        @error('address')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone"  value="{{$users->phone}}">
                        <div class="row mt-3">
                        @error('phone')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                    </div>

                        </div>
                    <div class="card-footer">
                        <button type="submit" class="btn bg-info">Update</button>
                    </div>
            </form>
        </div>
</div>

@endsection
