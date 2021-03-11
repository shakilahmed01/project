@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-10">

      <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Company</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

@foreach($lists as $list)
<tr>
  <th scope="row">{{$list->id}}</th>
  <td>{{$list->name}}</td>
  <td>{{$list->email}}</td>
  <td>{{$list->companyname}}</td>
  <td>{{$list->address}}</td>
  <td>
            <a href="#" class="btn btn-primary"> Edit </a>
            <a href="#" class="btn btn-danger"> Delete</a>
  </td>

</tr>


@endforeach



  </tbody>
</table>
    </div>
  </div>
</div>

@endsection
