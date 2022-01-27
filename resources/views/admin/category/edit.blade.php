@extends('layouts.admin.admin')
@section('conten')

<div class="container">
    <div class="col-12">

        <div class="card card-primary">
            <div class="card-header bg-info">
                <h3 class="card-title">Categoies</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{url('/admin/category/Update/'.$category->category_id)}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="name" class="form-control" name="name" id="name"  value="{{$category->name}}">
                        <div class="row mt-3">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                    </div>

                        </div>
                    <div class="card-footer">
                        <button type="submit" class="btn bg-info">Submit</button>
                    </div>
            </form>
        </div>
</div>

@endsection
