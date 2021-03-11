@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-10">

      <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Code</th>
      <th scope="col">Brand</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

@foreach($lists as $list)
<tr>
  <th scope="row">{{$list->id}}</th>
  <td>{{$list->productname}}</td>
  <td>{{$list->productcode}}</td>
  <td>{{$list->brand}}</td>
  <td>{{$list->price}}</td>
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
