@extends('layout')

@section('content')
<h1>Add Restaurants</h1>
    <div class="col-sm-6">
        <form method="POST" action="/add">
                 @if(Session::get('success')) 
                <div class="alert alert-success">
                {{Session::get('success')}}
                </div>
                @endif

                 @if(Session::get('fail'))
                <div class="alert alert-danger">
                {{Session::get('fail')}}
                </div>
                @endif
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Restaurant Name">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter Restaurant Address">
            </div>
            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
        </form>
    </div>

@stop