@extends('layout')

@section('content')
<h1>Resto List Page</h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($datas as $item)
    <tr>
      <th scope="row">{{ $item->id }}</th>
      <td>{{ $item->name }}</td>
      <td>{{ $item->address }}</td>
      <td>
        <a href="/delete/{{ $item->id }}"><i class="fa fa-trash"></i></a>
        <a href="/edit/{{ $item->id }}"><i class="fa fa-edit"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody> 
</table>
@stop

