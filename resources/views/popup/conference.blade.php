@extends('layouts.app')
@section('content')

<div class="content">
    <div class="title m-b-md">
      <div class="col-md-4 offset-md-4">
      ​<picture>
<source srcset="{{asset('image/1s1-1st.jpeg')}}" type="image/svg+xml">
<img src="{{asset('image/1s1-1st.jpeg')}}" class="img-fluid img-thumbnail" alt="...">
</picture>


<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addConference">
view more
</button>

    </div>

            </div>

          </div>

          <!-- Modal -->
          <div class="modal fade" id="addConference" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
          <div class="modal-content">

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
          <div class="carousel-item active">
          <img class="d-block w-100" src="{{asset('image/1st.jpeg')}}" alt="First slide">
          </div>
          <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('image/2nd.jpeg')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('image/3rd.jpeg')}}" alt="Third slide">
          </div>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
          </a>
          </div>
          </div>
          </div>
        </div>





@endsection
