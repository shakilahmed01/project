@extends('layouts.app')
@section('content')
<div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        @if($errors->any())
        <div class="alert alert-danger">
          <ul>
          @foreach($errors->all() as $error)
          <li> {{$error}} </li>
          @endforeach
        </ul>


</div><br />
@endif

<form>

<div class="form-group">

  <level for="name">Employee Name</level>

  <input name="employeename" type="text" class="form-control" value="{{old('name')}}" id="name" aria-describedby="emailHelp">

</div>





</form>

@endsection
