@extends('layouts.admin.admin')
@section('conten')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container">
    <div class="col-12">

        <div class="card card-primary">
            <div class="card-header bg-info">
                <h3 class="card-title">Edit Products</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{url('/admin/product/update/'.$editproduct->id_product)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="name" class="form-control" name="name" id="name" value="{{$editproduct->name}}">
                        <div class="row mt-3">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="description" class="form-control" name="description" id="description" value="{{$editproduct->description}}">
                        <div class="row mt-3">
                            @error('description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="price" class="form-control" name="price" id="price" value="{{$editproduct->price}}">
                        <div class="row mt-3">
                            @error('price')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label for="category">Category</label>
                        <input type="category" class="form-control" name="category" id="category" value="{{$editproduct->category_id}}">
                        <div class="row mt-3">
                            @error('category')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category">
                        <option selected="selected" value="{{$editproduct->category_id}}">{{$editproduct->category->name}}</option>
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
                    <!-- แสดงผลรูปภาพ -->
                    <div class="mt-4">
                    <img id="showImage" src="{{asset('admin/images/'.$editproduct->image)}}" width="150px" >
                    </div>


                    <div class="row mt-3">
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                </div>
                    <div class="card-footer">
                        <button type="submit" class="btn bg-info">Update</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
 @endsection
