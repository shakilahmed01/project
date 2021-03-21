@include('layouts.nevheader')
@extends('layouts.app')
@section('content')

<style type="text/css">

   body { background: White !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
   .bs-example{
       margin: 20px;
   }

   .jumbotron {
       background-image: url();
       background-size: cover;
     -webkit-background-size: 100% 100%;
       -moz-background-size: 100% 100%;
       -o-background-size: 100% 100%;
       background-size: 100% 100%;
   }

   body { width: 100%; margin: 0; padding: 0; overflow-x: hidden; background: #FD7F64; color: #2F4F4F;}
h1.heading1 { font-size: 36px; font-weight: 800; text-align: center; margin-top: 40px; text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);}
.jumbotron { margin-top: 50px; margin-bottom: 50px; box-shadow: 0px 0px 40px 0px rgba(0, 0, 0, 0.5);}
.jumbotron p { font-size: 16px; color: #373737; line-height: 1.6;}
.jumbotron h1 { color: #FFFAF0; font-weight: 800;}
.jumbotron .btn { background-color: #4682B4; border: none;}
.jumbotron .btn:hover, .jumbotron .btn:focus, .jumbotron .btn.active { background-color: #2F4F4F;}
.moving-wave { position: relative; display: inline-block; width: 100%; height: 10px; top: -5px;}
.moving-wave .wave { height: 0; width: 300%; position: relative; top: 0; animation: waves 30s ease-in-out infinite;}
.moving-wave .wave.waveup:before { content: ""; display: block; left: 0; bottom: 0; right: 0; background-repeat: repeat; height: 10px; background-size: 20px 20px; background-image: radial-gradient(circle at 10px -5px, #808080 13px, transparent 12px);}
.moving-wave .wave.wavedown:before { content: ""; display: block; left: 0; bottom: 0; right: 0; background-repeat: repeat; height: 10px; background-size: 20px 20px; background-image: radial-gradient(circle at 10px -5px, transparent 12px, #808080 13px);}

@keyframes waves {
	0% {
		-webkit-transform: translateX(0);
		-ms-transform: translateX(0);
		transform: translateX(0);
	}
	50% {
		-webkit-transform: translateX(-10%);
		-ms-transform: translateX(-10%);
		transform: translateX(-10%);
	}
	100% {
		-webkit-transform: translateX(0);
		-ms-transform: translateX(0);
		transform: translateX(0);
	}
}

.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e") !important;
}
.carousel-control-next-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e") !important;
}

</style>



<div class="container">
  <div class="row">

    <div class="jumbotron jumbotron-fluid" style="background-image: url('{{asset('image/amz5.jpg')}}')">
      <div class="container">

        <h1 class="display-1">Our Amazing Works</h1>
        <p class="lead">.....</p>
        <!DOCTYPE html>
      <html>
      <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
      .button {
        border-radius: 4px;
        background-color: #6495ED;
        border: none;
        color: #ffff;
        text-align: center;
        font-size: 15px;
        padding: 10px;
        width: 300px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }

      .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }

      .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }

      .button:hover span {
        padding-right: 25px;
      }

      .button:hover span:after {
        opacity: 1;
        right: 0;
      }

      </style>
      </head>
      <body>

      <h2></h2>

      <button class="button"><span>Web system </span></button>
      <button class="button"><span>Mobile App </span></button>
      <button class="button"><span>eCommerce </span></button>
      <button class="button"><span>Game Development </span></button>
      <button class="button"><span>Graphics & Animation </span></button>
      <button class="button"><span>AR/VR </span></button>
      <button class="button"><span>Social site Management </span></button>

      </body>
      </html>
      </div>
    </div>


    <!--Book Table-->
    <div class="col-lg-6 col-md- mx-auto">

      <section class="moving-wave">

<div class="wave waveup"></div>


      <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P1 IOS/IOS P1.jpeg')}}')">
          <div class="container">
            <h3 style="display-4: inline-block;">|  Desk |</h3>
        <div class="add-table">

<br>
<br>
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
   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P1IOS">
   view more
   </button>

   </hr>
<!-- Modal -->
    <div class="modal fade" id="P1IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>






   </ol>
   <div class="carousel-inner">
   <div class="carousel-item active">
   <img class="d-block w-100" src="{{asset('Products IOS/P1 IOS/IOS P1-2.jpeg')}}" alt="First slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P1 IOS/IOS P1-3.jpeg')}}" alt="Second slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P1 IOS/IOS P1-4.jpeg')}}" alt="Third slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P1 IOS/IOS P1-1.jpeg')}}" alt="Forth slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-1.jpeg')}}" alt="First slide">
   </div>
   <div class="carousel-item ">
   <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-2.jpeg')}}" alt="First slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-3.jpeg')}}" alt="Second slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-4.jpeg')}}" alt="Third slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-5.jpeg')}}" alt="Forth slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-6.jpeg')}}" alt="Forth slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-7.jpeg')}}" alt="Forth slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-8.jpeg')}}" alt="Forth slide">
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

    <!--Service Table-->

    <div class="col-lg-4 col-md-10 mx-auto">

      <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
          <div class="container">
            <h3 style="display-4: inline-block;">| Mobile photo Desk |</h3>
        <div class="add-table">

<br>
<br>
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
       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile1">
       view more
       </button>
      </hr>
      <!-- Modal -->
      <div class="modal fade" id="mobile1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>


      </ol>
      <div class="carousel-inner">
      <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-1.jpeg')}}" alt="First slide">
      </div>
      <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-2.jpeg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-3.jpeg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-4.jpeg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-5.jpeg')}}" alt="Forth slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-6.jpeg')}}" alt="Forth slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-7.jpeg')}}" alt="Forth slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-8.jpeg')}}" alt="Forth slide">
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
      <div class="wave wavedown"></div>

</section>
    </div>


    <!--Service Table-->

    <div class="col-lg-4 col-md-10 mx-auto">

      <section class="moving-wave">

<div class="wave waveup"></div>
      <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
          <div class="container">
            <h3 style="display-4: inline-block;">| Mobile photo Desk |</h3>
        <div class="add-table">

<br>
<br>
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
       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile2">
       view more
       </button>
      </hr>
      <!-- Modal -->
      <div class="modal fade" id="mobile2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <img class="d-block w-100" src="{{asset('image/1st-2.jpeg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-3.jpeg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-4.jpeg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-5.jpeg')}}" alt="Forth slide">
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

    <!--Book Table-->
    <div class="col-lg-6 col-md-10 mx-auto">
      <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P2 IOS/IOS P2.jpeg')}}')">
          <div class="container">
            <h3 style="display-4: inline-block;">|  Desk |</h3>
        <div class="add-table">

<br>
<br>
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
   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P2-IOS">
   view more
   </button>

   </hr>
<!-- Modal -->
    <div class="modal fade" id="P2-IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>


      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">

        <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-1.jpeg')}}" alt="First slide">
        </div>
        <div class="carousel-item ">

        <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-2.jpeg')}}" alt="First slide">
        </div>
        <div class="carousel-item">

        <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-3.jpeg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">

        <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-4.jpeg')}}" alt="Third slide">
        </div>
        <div class="carousel-item">

        <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-5.jpeg')}}" alt="Forth slide">
        </div>
        <div class="carousel-item">

        <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-6.jpeg')}}" alt="Forth slide">
        </div>
        <div class="carousel-item">

        <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-7.jpeg')}}" alt="Forth slide">
        </div>
        <div class="carousel-item">

        <img class="d-block w-100" src="{{asset('Products IOS/P2 IOS/IOS P2-8.jpeg')}}" alt="Forth slide">
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

      <div class="wave wavedown"></div>

</section>
    </div>

    <!--Book Table-->
    <div class="col-lg-6 col-md-10 mx-auto">

            <section class="moving-wave">

      <div class="wave waveup"></div>
      <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P3 IOS/IOS P3.jpeg')}}')">
          <div class="container">
            <h3 style="display-4: inline-block;">|  Desk |</h3>
        <div class="add-table">

<br>
<br>
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
   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P3-IOS">
   view more
   </button>

   </hr>
<!-- Modal -->
    <div class="modal fade" id="P3-IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>


   </ol>
   <div class="carousel-inner">
     <div class="carousel-item active">
     <img class="d-block w-100" src="{{asset('Products IOS/P3 IOS/IOS P3-1.jpeg')}}" alt="First slide">
     </div>
     <div class="carousel-item">
     <img class="d-block w-100" src="{{asset('Products IOS/P3 IOS/IOS P3-2.jpeg')}}" alt="Second slide">
     </div>
     <div class="carousel-item">
     <img class="d-block w-100" src="{{asset('Products IOS/P3 IOS/IOS P3-3.jpeg')}}" alt="Third slide">
     </div>
     <div class="carousel-item">
     <img class="d-block w-100" src="{{asset('Products IOS/P3 IOS/IOS P3-4.jpeg')}}" alt="Forth slide">
     </div>
     <div class="carousel-item">
     <img class="d-block w-100" src="{{asset('Products IOS/P3 IOS/IOS P3-5.jpeg')}}" alt="Forth slide">
     </div>
     <div class="carousel-item">
     <img class="d-block w-100" src="{{asset('Products IOS/P3 IOS/IOS P3-6.jpeg')}}" alt="Forth slide">
     </div>
     <div class="carousel-item">
     <img class="d-block w-100" src="{{asset('Products IOS/P3 IOS/IOS P3-7.jpeg')}}" alt="Forth slide">
     </div>
     <div class="carousel-item">
     <img class="d-block w-100" src="{{asset('Products IOS/P3 IOS/IOS P3-8.jpeg')}}" alt="Forth slide">
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

    <!--Service Table-->

    <div class="col-lg-4 col-md-10 mx-auto">
      <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
          <div class="container">
            <h3 style="display-4: inline-block;">| Mobile photo Desk |</h3>
        <div class="add-table">

<br>
<br>
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
       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile3">
       view more
       </button>
      </hr>
      <!-- Modal -->
      <div class="modal fade" id="mobile3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <img class="d-block w-100" src="{{asset('image/1st-2.jpeg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-3.jpeg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-4.jpeg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-5.jpeg')}}" alt="Forth slide">
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
      <div class="wave wavedown"></div>

</section>
    </div>


    <!--Service Table-->

    <div class="col-lg-4 col-md-10 mx-auto">

      <section class="moving-wave">

<div class="wave waveup"></div>

      <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
          <div class="container">
            <h3 style="display-4: inline-block;">| Mobile photo Desk |</h3>
        <div class="add-table">

<br>
<br>
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
       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile4">
       view more
       </button>
      </hr>
      <!-- Modal -->
      <div class="modal fade" id="mobile4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <img class="d-block w-100" src="{{asset('image/1st-2.jpeg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-3.jpeg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-4.jpeg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-5.jpeg')}}" alt="Forth slide">
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

    <!--Book Table-->
    <div class="col-lg-6 col-md-10 mx-auto">
      <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P4 IOS/IOS P4.jpeg')}}')">
          <div class="container">
            <h3 style="display-4: inline-block;">|  Desk |</h3>
        <div class="add-table">

<br>
<br>
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
   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P4-IOS">
   view more
   </button>

   </hr>
<!-- Modal -->
    <div class="modal fade" id="P4-IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>



   </ol>
   <div class="carousel-inner">
   <div class="carousel-item active">
   <img class="d-block w-100" src="{{asset('Products IOS/P4 IOS/IOS P4-1.jpeg')}}" alt="First slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P4 IOS/IOS P4-2.jpeg')}}" alt="Second slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P4 IOS/IOS P4-3.jpeg')}}" alt="Third slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P4 IOS/IOS P4-4.jpeg')}}" alt="Forth slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P4 IOS/IOS P4-5.jpeg')}}" alt="Forth slide">
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

      <div class="wave wavedown"></div>

</section>

    </div>


    <!--Book Table-->
    <div class="col-lg-6 col-md-10 mx-auto">

      <section class="moving-wave">

<div class="wave waveup"></div>

      <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P5 IOS/IOS P5.jpeg')}}')">
          <div class="container">
            <h3 style="display-4: inline-block;">|  Desk |</h3>
        <div class="add-table">

<br>
<br>
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
   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P5-IOS">
   view more
   </button>

   </hr>
<!-- Modal -->
    <div class="modal fade" id="P5-IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>



   </ol>
   <div class="carousel-inner">
   <div class="carousel-item active">
   <img class="d-block w-100" src="{{asset('Products IOS/P5 IOS/IOS P5-1.jpeg')}}" alt="First slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P5 IOS/IOS P5-2.jpeg')}}" alt="Second slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P5 IOS/IOS P5-3.jpeg')}}" alt="Third slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P5 IOS/IOS P5-4.jpeg')}}" alt="Forth slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P5 IOS/IOS P5-5.jpeg')}}" alt="Forth slide">
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

    <!--Service Table-->

    <div class="col-lg-4 col-md-10 mx-auto">
      <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
          <div class="container">
            <h3 style="display-4: inline-block;">| Mobile photo Desk |</h3>
        <div class="add-table">

<br>
<br>
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
       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile5">
       view more
       </button>
      </hr>
      <!-- Modal -->
      <div class="modal fade" id="mobile5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <img class="d-block w-100" src="{{asset('image/1st-2.jpeg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-3.jpeg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-4.jpeg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-5.jpeg')}}" alt="Forth slide">
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

      <div class="wave wavedown"></div>

</section>

    </div>


    <!--Service Table-->

    <div class="col-lg-4 col-md-10 mx-auto">

      <section class="moving-wave">

<div class="wave waveup"></div>

      <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
          <div class="container">
            <h3 style="display-4: inline-block;">| Mobile photo Desk |</h3>
        <div class="add-table">

<br>
<br>
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
       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile6">
       view more
       </button>
      </hr>
      <!-- Modal -->
      <div class="modal fade" id="mobile6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <img class="d-block w-100" src="{{asset('image/1st-2.jpeg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-3.jpeg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-4.jpeg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-5.jpeg')}}" alt="Forth slide">
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

    <!--Book Table-->
    <div class="col-lg-6 col-md-10 mx-auto">
      <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P6 IOS/IOS P6.jpeg')}}')">
          <div class="container">
            <h3 style="display-4: inline-block;">|  Desk |</h3>
        <div class="add-table">

<br>
<br>
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
   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P6-IOS">
   view more
   </button>

   </hr>
<!-- Modal -->
    <div class="modal fade" id="P6-IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>



   </ol>
   <div class="carousel-inner">
   <div class="carousel-item active">
   <img class="d-block w-100" src="{{asset('Products IOS/P6 IOS/IOS P6-1.jpeg')}}" alt="First slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P6 IOS/IOS P6-2.jpeg')}}" alt="Second slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P6 IOS/IOS P6-3.jpeg')}}" alt="Third slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P6 IOS/IOS P6-4.jpeg')}}" alt="Forth slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P6 IOS/IOS P6-5.jpeg')}}" alt="Forth slide">
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


            <div class="wave wavedown"></div>

      </section>

    </div>


    <!--Book Table-->
    <div class="col-lg-6 col-md-10 mx-auto">

      <section class="moving-wave">

<div class="wave waveup"></div>

      <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P7 IOS/IOS P7.jpeg')}}')">
          <div class="container">
            <h3 style="display-4: inline-block;">|  Desk |</h3>
        <div class="add-table">

<br>
<br>
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
   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P7-IOS">
   view more
   </button>

   </hr>
<!-- Modal -->
    <div class="modal fade" id="P7-IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>



   </ol>
   <div class="carousel-inner">
   <div class="carousel-item active">
   <img class="d-block w-100" src="{{asset('Products IOS/P7 IOS/IOS P7-1.jpeg')}}" alt="First slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P7 IOS/IOS P7-2.jpeg')}}" alt="Second slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P7 IOS/IOS P7-3.jpeg')}}" alt="Third slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P7 IOS/IOS P7-4.jpeg')}}" alt="Forth slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P7 IOS/IOS P7-5.jpeg')}}" alt="Forth slide">
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

    <!--Service Table-->

    <div class="col-lg-4 col-md-10 mx-auto">
      <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
          <div class="container">
            <h3 style="display-4: inline-block;">| Mobile photo Desk |</h3>
        <div class="add-table">

<br>
<br>
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
       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile7">
       view more
       </button>
      </hr>
      <!-- Modal -->
      <div class="modal fade" id="mobile7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <img class="d-block w-100" src="{{asset('image/1st-2.jpeg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-3.jpeg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-4.jpeg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-5.jpeg')}}" alt="Forth slide">
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

      <div class="wave wavedown"></div>

</section>

    </div>


    <!--Service Table-->

    <div class="col-lg-4 col-md-10 mx-auto">

      <section class="moving-wave">

<div class="wave waveup"></div>

      <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
          <div class="container">
            <h3 style="display-4: inline-block;">| Mobile photo Desk |</h3>
        <div class="add-table">

<br>
<br>
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
       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile8">
       view more
       </button>
      </hr>
      <!-- Modal -->
      <div class="modal fade" id="mobile8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <img class="d-block w-100" src="{{asset('image/1st-2.jpeg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-3.jpeg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-4.jpeg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-5.jpeg')}}" alt="Forth slide">
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

    <!--Book Table-->
    <div class="col-lg-6 col-md-10 mx-auto">
      <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P8 IOS/IOS P8.jpeg')}}')">
          <div class="container">
            <h3 style="display-4: inline-block;">|  Desk |</h3>
        <div class="add-table">

<br>
<br>
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
   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P8-IOS">
   view more
   </button>

   </hr>
<!-- Modal -->
    <div class="modal fade" id="P8-IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>



   </ol>
   <div class="carousel-inner">
   <div class="carousel-item active">
   <img class="d-block w-100" src="{{asset('Products IOS/P8 IOS/IOS P8-1.jpeg')}}" alt="First slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P8 IOS/IOS P8-2.jpeg')}}" alt="Second slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P8 IOS/IOS P8-3.jpeg')}}" alt="Third slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P8 IOS/IOS P8-4.jpeg')}}" alt="Forth slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P8 IOS/IOS P8-5.jpeg')}}" alt="Forth slide">
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

      <div class="wave wavedown"></div>

</section>

    </div>


    <!--Book Table-->
    <div class="col-lg-6 col-md-10 mx-auto">

      <section class="moving-wave">

<div class="wave waveup"></div>

      <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P9 IOS/IOS P9.jpeg')}}')">
          <div class="container">
            <h3 style="display-4: inline-block;">|  Desk |</h3>
        <div class="add-table">

<br>
<br>
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
   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P9-IOS">
   view more
   </button>

   </hr>
<!-- Modal -->
    <div class="modal fade" id="P9-IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>



   </ol>
   <div class="carousel-inner">
   <div class="carousel-item active">
   <img class="d-block w-100" src="{{asset('Products IOS/P9 IOS/IOS P9-1.jpeg')}}" alt="First slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P9 IOS/IOS P9-2.jpeg')}}" alt="Second slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P9 IOS/IOS P9-3.jpeg')}}" alt="Third slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P9 IOS/IOS P9-4.jpeg')}}" alt="Forth slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P9 IOS/IOS P9-5.jpeg')}}" alt="Forth slide">
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

    <!--Service Table-->

    <div class="col-lg-4 col-md-10 mx-auto">
      <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
          <div class="container">
            <h3 style="display-4: inline-block;">| Mobile photo Desk |</h3>
        <div class="add-table">

<br>
<br>
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
       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile9">
       view more
       </button>
      </hr>
      <!-- Modal -->
      <div class="modal fade" id="mobile9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <img class="d-block w-100" src="{{asset('image/1st-2.jpeg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-3.jpeg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-4.jpeg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-5.jpeg')}}" alt="Forth slide">
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

      <div class="wave wavedown"></div>

</section>

    </div>


    <!--Service Table-->

    <div class="col-lg-4 col-md-10 mx-auto">

      <section class="moving-wave">

<div class="wave waveup"></div>

      <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
          <div class="container">
            <h3 style="display-4: inline-block;">| Mobile photo Desk |</h3>
        <div class="add-table">

<br>
<br>
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
       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile10">
       view more
       </button>
      </hr>
      <!-- Modal -->
      <div class="modal fade" id="mobile10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <img class="d-block w-100" src="{{asset('image/1st-2.jpeg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-3.jpeg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-4.jpeg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-5.jpeg')}}" alt="Forth slide">
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

    <!--Book Table-->
    <div class="col-lg-6 col-md-10 mx-auto">
      <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P10 IOS/IOS P10.jpeg')}}')">
          <div class="container">
            <h3 style="display-4: inline-block;">|  Desk |</h3>
        <div class="add-table">

<br>
<br>
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
   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P10-IOS">
   view more
   </button>

   </hr>
<!-- Modal -->
    <div class="modal fade" id="P10-IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>



   </ol>
   <div class="carousel-inner">
   <div class="carousel-item active">
   <img class="d-block w-100" src="{{asset('Products IOS/P10 IOS/IOS P10-1.jpeg')}}" alt="First slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P10 IOS/IOS P10-2.jpeg')}}" alt="Second slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P10 IOS/IOS P10-3.jpeg')}}" alt="Third slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P10 IOS/IOS P10-4.jpeg')}}" alt="Forth slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P10 IOS/IOS P10-5.jpeg')}}" alt="Forth slide">
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

      <div class="wave wavedown"></div>

</section>

    </div>



    <!--Book Table-->
    <div class="col-lg-6 col-md-10 mx-auto">


            <section class="moving-wave">

      <div class="wave waveup"></div>

      <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P11 IOS/IOS P11.jpeg')}}')">
          <div class="container">
            <h3 style="display-4: inline-block;">|  Desk |</h3>
        <div class="add-table">

<br>
<br>
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
   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P11-IOS">
   view more
   </button>

   </hr>
<!-- Modal -->
    <div class="modal fade" id="P11-IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
   <img class="d-block w-100" src="{{asset('Products IOS/P11 IOS/IOS P11-1.jpeg')}}" alt="First slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P11 IOS/IOS P11-2.jpeg')}}" alt="Second slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P11 IOS/IOS P11-3.jpeg')}}" alt="Third slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P11 IOS/IOS P11-4.jpeg')}}" alt="Forth slide">
   </div>
   <div class="carousel-item">
   <img class="d-block w-100" src="{{asset('Products IOS/P11 IOS/IOS P11-5.jpeg')}}" alt="Forth slide">
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

    <!--Service Table-->

    <div class="col-lg-4 col-md-10 mx-auto">
      <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
          <div class="container">
            <h3 style="display-4: inline-block;">| Mobile photo Desk |</h3>
        <div class="add-table">

<br>
<br>
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
       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile11">
       view more
       </button>
      </hr>
      <!-- Modal -->
      <div class="modal fade" id="mobile11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <img class="d-block w-100" src="{{asset('image/1st-2.jpeg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-3.jpeg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-4.jpeg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image/1st-5.jpeg')}}" alt="Forth slide">
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

      <div class="wave wavedown"></div>

</section>

    </div>







</div>
</div>



@include('layouts.footer')
@endsection
