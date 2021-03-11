@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">

    <!--Book Table-->
    <div class="col-lg-6 col-md-10 mx-auto">
      <div class="jumbotron jumbotron-fluid" style="background-image: url('{{asset('P2IOS/main.jpeg')}}')">

          <div class="container">
            <h3 style="display-4: inline-block;"></h3>
        <div class="add-Image">
          <h3 class="display-4"> </h3>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <hr>
               <div class="col text-center">
                 <!-- Button trigger modal -->
                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P2IOS">
                 view more
                 </button>
          </hr>
          <!-- Modal -->
          <div class="modal fade" id="P2IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
          <div class="modal-content">

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>

          </ol>
          <div class="carousel-inner">
          <div class="carousel-item active">
          <img class="d-block w-100" src="{{asset('P2IOS/WhatsApp Image 2021-03-08 at 2.32.15 PM (1).jpeg')}}" alt="0">
          </div>
          <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('P2IOS/WhatsApp Image 2021-03-08 at 2.32.15 PM.jpeg')}}" alt="1">
          </div>
          <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('P2IOS/WhatsApp Image 2021-03-08 at 2.32.16 PM (1).jpeg')}}" alt="2">
          </div>
          <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('P2IOS/WhatsApp Image 2021-03-08 at 2.32.16 PM.jpeg')}}" alt="3">
          </div>
          <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('P2IOS/WhatsApp Image 2021-03-08 at 2.32.17 PM (1).jpeg')}}" alt="4">
          </div>
          <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('P2IOS/WhatsApp Image 2021-03-08 at 2.32.17 PM (2).jpeg')}}" alt="5">
          </div>
          <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('P2IOS/WhatsApp Image 2021-03-08 at 2.32.17 PM.jpeg')}}" alt="6">
          </div>
          <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('P2IOS/WhatsApp Image 2021-03-08 at 2.32.18 PM.jpeg')}}" alt="7">
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
     </div>

</div>
<hr>
        </div>
        </div>


      </div>


</div>
</div>





@endsection
