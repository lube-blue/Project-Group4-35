@extends('layouts.admin.admin')
@section('conten')

<div class="container">
    <div class="col-12">

        <div class="card card-primary">
            <div class="card-header bg-info">
                <h3 class="card-title">Products</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('product.c')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="name" class="form-control" name="name" id="name" placeholder="Enter Product Name">
                        <div class="row mt-3">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="description" class="form-control" name="description" id="description" placeholder="Enter Description">
                        <div class="row mt-3">
                            @error('description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="price" class="form-control" name="price" id="price" placeholder="Enter Price">
                        <div class="row mt-3">
                            @error('price')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label for="category">Category</label>
                        <input type="category" class="form-control" name="category" id="category" placeholder="Enter Category">
                        <div class="row mt-3">
                            @error('category')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div> -->


                      <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category">
                            @foreach ($categories as $category)
                            <option value="{{$category->category_id}}">{{$category->name}}</option>
                            @endforeach

                        </select>
                      </div>


                    <div class="form-group">
                    <label for="category">Image</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image" id="image">
                      <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                    <div class="row mt-3">
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                </div>
                    <div class="card-footer">
                        <button type="submit" class="btn bg-info">Submit</button>
                    </div>
            </form>
        </div>
    </div>
</div>

 @endsection
