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
<form action="{{ route('dup_create') }}" method="post">
  @csrf

       <div class="form-group">
             <label for="productname">Product Name</label>
             <input name=productname type="text" class="form-control"value="{{old('name')}}" id="productname" aria-describedby="emailHelp">

       </div>

       <div class="form-group">
            <label for="productcode">Product Code</label>
            <input name="productcode" type="numeric" class="form-control"value="{{old('productcode')}}"value="{{old('productcode')}}" id="productcode">
       </div>

       <div class="form-group">
           <label for="brand">Brand</label>
           <input name="brand" type="text" class="form-control"value="{{old('brand')}}" id="brand" aria-describedby="emailHelp">

       </div>

      <div class="form-group">
           <label for="Price">Price</label>
           <input name="price" type="numaric" class="form-control"value="{{old('price')}}" id="price" aria-describedby="emailHelp">

      </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
