@extends('layout')

@section('content')
<h1>Edit Restaurant's Name or Address</h1>
<div class="col-sm-6">
        <form method="POST" action="/edit">
            @csrf
            <div class="mb-3">
                <input type="hidden" name="id" class="form-control" value="{{ $datas->id }}">
            </div>
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $datas->name }}">
            </div>
            <div class="mb-3">
                <label for="Address" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" value="{{ $datas->address }}">
            </div>
            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
        </form>
    </div>
@stop