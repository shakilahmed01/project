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

<form action="{{ route('flight_create') }}" method="post">
  @csrf

       <div class="form-group">
             <label for="name">Flight From</label>
             <input name="flightfrom" type="text" class="form-control"value="{{old('flightfrom')}}" id="flightfrom" aria-describedby="emailHelp">

       </div>

       <div class="form-group">
            <label for="to">To</label>
            <input name="to" type="text" class="form-control"value="{{old('to')}}" id="to">
       </div>

       <div class="form-group">
           <label for="departing">Departing</label>
           <input name="departing" type="date" class="form-control"value="{{old('departing')}}" id="departing" aria-describedby="emailHelp">

       </div>

      <div class="form-group">
           <label for="returning">Returning</label>
           <input name="returning" type="date" class="form-control"value="{{old('returning')}}" id="returning" aria-describedby="emailHelp">

      </div>

      <div class="form-group">
           <label for="adult">Adult</label>
           <input name="adult" type="text" class="form-control"value="{{old('adult')}}" id="adult" aria-describedby="emailHelp">

      </div>

      <div class="form-group">
           <label for="child">Child</label>
           <input name="child" type="text" class="form-control"value="{{old('child')}}" id="child" aria-describedby="emailHelp">

      </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
