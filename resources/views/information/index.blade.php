@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4 offset-md-4">
      @if($errors->any())
      <div class ="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div><br />
      @endif

<form action="{{ route('create') }}" method="post">
  @csrf

       <div class="form-group">
             <label for="name">Full Name</label>
             <input name="name" type="text" class="form-control"value="{{old('name')}}" id="name" aria-describedby="emailHelp">

       </div>

       <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control"value="{{old('name')}}"value="{{old('email')}}" id="email">
       </div>

       <div class="form-group">
           <label for="companyname">Company Name</label>
           <input name="companyname" type="text" class="form-control"value="{{old('companyname')}}" id="companyname" aria-describedby="emailHelp">

       </div>

      <div class="form-group">
           <label for="address">Address</label>
           <input name="address" type="text" class="form-control"value="{{old('address')}}" id="address" aria-describedby="emailHelp">

      </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
