@extends('layouts.admin.admin')
@section('conten')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container">
    <div class="col-12">
        @if (session('success'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'บันทึกข้อมูลเรียบร้อย',
                showConfirmButton: false,
                timer: 5500
            })
        </script>
        @endif

        @if (session('update'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'แก้ไขข้อมูลเรียบร้อย',
                showConfirmButton: false,
                timer: 5500
            })
        </script>
        @endif

        @if (session('del'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'ลบข้อมูลเรียบร้อย',
                showConfirmButton: false,
                timer: 5500
            })
        </script>
        @endif

        @if (session('category'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'ต้องมีประเภทสินค้าอย่างน้อย 1 รายการ',
                showConfirmButton: false,
                timer: 5500
            })
        </script>
        @endif

        @if (session('error'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'ไม่สามารถลบประเภทสินค้าได้เนื่องจากมีสินค้าอยู่',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
        @endif




        <div class="card card-primary">
            <div class="card-header bg-info">
                <h3 class="card-title">Categoies</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('create')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="name" class="form-control" name="name" id="name" placeholder="Enter Category Name">
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

            @if ($category->count()>0)
            <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Categories</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead class="bg-info">
                                <tr>
                                    <th>Category_id</th>
                                    <th>Name</th>
                                    <th>Product Count</th>
                                    <th>User</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $categories)
                                <tr>
                                    <td>{{$categories->category_id}}</td>
                                    <td>{{$categories->name}}</td>
                                    <td>{{$categories->product->count()}}</td>
                                    <td>{{$categories->user->name}}</td>
                                    <td>{{$categories->created_at}}</td>
                                    <td>
                                        <a href="{{url('/admin/category/Edit/'.$categories->category_id)}}" class="btn btn-success">Edit</a>
                                        <a href="{{url('/admin/category/Delete/'.$categories->category_id)}}" class="btn btn-danger">Delete</a>
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

            @else
                <div class="alert alert-danger">
                    <p>ไม่มีข้อมูลประเภทสินค้า</p>
                </div>

            @endif


    </div>


    @endsection
