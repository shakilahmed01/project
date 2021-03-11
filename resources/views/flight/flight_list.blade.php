@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-10">

      <table class="table">
  <thead>
    <tr>
      <th scope="col">Flight From</th>
      <th scope="col">To </th>
      <th scope="col">Departing</th>
      <th scope="col">Returning</th>
      <th scope="col">Adult</th>
      <th scope="col">Child</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

@foreach($lists as $list)
<tr>
  <th scope="row">{{$list->id}}</th>
  <td>{{$list->flightfrom}}</td>
  <td>{{$list->to}}</td>
  <td>{{$list->departing}}</td>
  <td>{{$list->returning}}</td>
  <td>{{$list->adult}}</td>
  <td>{{$list->child}}</td>


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
