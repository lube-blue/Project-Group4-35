@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2><strong>My Profile</strong></h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5><p><strong>Name : </strong>{{Auth()->user()->name}}</p></h5>
                    <h5><p><strong>Email : </strong>{{Auth()->user()->email}}</p></h5>
                    <h5><p><strong>Phone : </strong>{{Auth()->user()->phone}}</p></h5>
                    <h5><p><strong>Address : </strong>{{Auth()->user()->address}}</p></h5>
                    <p>
                        @if (Auth::user()->checkIsAdmin())
                        <a href="{{route('index')}}" class="btn btn-primary">Product Management</a>
                        @endif
                        <a href="" class="btn btn-success">Home</a>
                    </p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
