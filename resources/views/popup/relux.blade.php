@include('layouts.nevheader')
@extends('layouts.fixed')
@section('content')
    <div class="content">


      <style type="text/css">

         body { background: AliceBlue !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
         .bs-example{
             margin:;
         }
         body { width: 100%; margin: 0; padding: ; overflow-x: hidden; background: #FD7F64; color: #F8F8FF;}
         h1.heading1 { font-size: 36px; font-weight: 800; text-align: center; margin-top: 40px; text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);}

         .jumbotron p { font-size: 16px; color: #373737; line-height: 1.6;}
         .jumbotron h1 { color: #FFFAF0; font-weight: 800;}
         .jumbotron .btn { background-color: #191F35; border: none;}
         .jumbotron .btn:hover{

             text-decoration: none;
             background-color: #809FBF;
         }
         .jumbotron .btn:focus,
         .jumbotron .btn.active { background-color: #809FBF;}
         .jumbotron .bg-overlay {
                    background: rgba(0,0,0,0);
         }
         .jumbotron .bg-overlay {
             background: rgba(0,0,0,0.5);
         }
         .jumbotron:hover .bg-overlay {
             background: rgba(255, 99, 71, 0);
         }
         .jumbotron {
             background-image: url();
             background-size: cover;
           -webkit-background-size: 100% 100%;
             -moz-background-size: 100% 100%;
             -o-background-size: 100% 100%;
             background-size: 100% 100%;
             margin-top: 30px;
             margin-bottom: 30px;
             margin-right: 00px;
             margin-left: 00px;
             box-shadow: 0px 0px 40px 0px rgba(0, 0, 0, 0.5);

         }
         .animated {
            -webkit-transition: all 1s ease;
            -o-transition: all 1s ease;
            transition: all 1s ease;
         }






      .carousel-control-prev-icon {
          background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' width='auto' height='auto' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e") !important;
      }
      .carousel-control-next-icon {
          background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' width='auto' height='auto' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e") !important;
      }




      </style>



      <div class="jumbotron jumbotron-fluid" style="background-image: url('{{asset('image/workspic.jpeg')}}')">
        <div class="bg-overlay animated">
        <div class="container">

          <h1 class="display-1">Knights </h1>
          <br>
          <h1 class="display-1">Amazing Works</h1>

          <br>
          <br>


        <a href="https://techknightsolutions.com/t-portfolio/#web_system" type="button" class="btn btn-danger">Web system </a>
        <a href="#" type="button" class="btn btn-danger">Mobile App </a>
        <a href="#" type="button" class="btn btn-danger">eCommerce </a>
        <a href="#" type="button" class="btn btn-danger">Game Development </a>
        <br>
        <br>
        <a href="#" type="button" class="btn btn-danger">Graphics & Animation </a>
        <a href="#" type="button" class="btn btn-danger">AR/VR </a>
        <br>
        <br>
        <a href="#" type="button" class="btn btn-danger">Social site Management </a>
        <br>
        <br>



        </div>
      </div>
      </div>





      <div class="container">
        <div class="row">

          <!--Book Table-->
          <div class="col-xs-9 col-md-7">


            <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P1 IOS/IOS P1.jpeg')}}')">
                <div class="bg-overlay animated">
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


          <div class="col text-center">
          <!-- Button trigger modal -->
         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P1IOS">
         view more
         </button>


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


         </ol>
         <div class="carousel-inner">
         <div class="carousel-item active">
         <img class="img-fluid" src="{{asset('Products IOS/P1 IOS/IOS P1-1.jpeg')}}" width="300" height="600px" alt="First slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P1 IOS/IOS P1-2.jpeg')}}" width="300" height="600px" alt="Second slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P1 IOS/IOS P1-3.jpeg')}}" width="300" height="600px" alt="Third slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P1 IOS/IOS P1-4.jpeg')}}" width="300" height="600px" alt="Forth slide">
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

              </div>
            </div>
              </div>

          </div>


          <!--Service Table-->

          <div class="col-xs-3 col-md-5">

            <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
                <div class="bg-overlay animated">
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


             <div class="col text-center">
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile1">
             view more
             </button>

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
            <img class="img-fluid" src="{{asset('Products IOS/P2 IOS/IOS P2-1.jpeg')}}" alt="First slide">
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

              </div>
            </div>
          </div>
          </div>


          <!--Service Table-->

          <div class="col-xs-3 col-md-5">


            <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
                <div class="bg-overlay animated">
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


             <div class="col text-center">
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile2">
             view more
             </button>

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

              </div>
            </div>
          </div>
          </div>

          <!--Book Table-->
          <div class="col-xs-9 col-md-7">
            <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P2 IOS/IOS P2.jpeg')}}')">
                <div class="bg-overlay animated">
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


          <div class="col text-center">
          <!-- Button trigger modal -->
         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P2IOS">
         view more
         </button>


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
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>


            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">

              <img class="img-fluid" src="{{asset('Products IOS/P2 IOS/IOS P2-1.jpeg')}}" width="300" height="600px" alt="First slide">
              </div>
              <div class="carousel-item ">

              <img class="img-fluid" src="{{asset('Products IOS/P2 IOS/IOS P2-2.jpeg')}}" width="300" height="600px" alt="First slide">
              </div>
              <div class="carousel-item">

              <img class="img-fluid" src="{{asset('Products IOS/P2 IOS/IOS P2-3.jpeg')}}" width="300" height="600px" alt="Second slide">
              </div>
              <div class="carousel-item">

              <img class="img-fluid" src="{{asset('Products IOS/P2 IOS/IOS P2-4.jpeg')}}" width="300" height="600px" alt="Third slide">
              </div>
              <div class="carousel-item">

              <img class="img-fluid" src="{{asset('Products IOS/P2 IOS/IOS P2-5.jpeg')}}" width="300" height="600px" alt="Forth slide">
              </div>
              <div class="carousel-item">

              <img class="img-fluid" src="{{asset('Products IOS/P2 IOS/IOS P2-6.jpeg')}}" width="300" height="600px" alt="Forth slide">
              </div>
              <div class="carousel-item">

              <img class="img-fluid" src="{{asset('Products IOS/P2 IOS/IOS P2-7.jpeg')}}" width="300" height="600px" alt="Forth slide">
              </div>
              <div class="carousel-item">

              <img class="img-fluid" src="{{asset('Products IOS/P2 IOS/IOS P2-8.jpeg')}}" width="300" height="600px" alt="Forth slide">
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

              </div>
            </div>
          </div>
          </div>

          <!--Book Table-->
          <div class="col-xs-9 col-md-7">


            <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P3 IOS/IOS P3.jpeg')}}')">
                <div class="bg-overlay animated">
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


          <div class="col text-center">
          <!-- Button trigger modal -->
         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P3-IOS">
         view more
         </button>


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
           <img class="img-fluid" src="{{asset('Products IOS/P3 IOS/IOS P3-1.jpeg')}}" width="300" height="600px" alt="First slide">
           </div>
           <div class="carousel-item">
           <img class="img-fluid" src="{{asset('Products IOS/P3 IOS/IOS P3-2.jpeg')}}" width="300" height="600px" alt="Second slide">
           </div>
           <div class="carousel-item">
           <img class="img-fluid" src="{{asset('Products IOS/P3 IOS/IOS P3-3.jpeg')}}" width="300" height="600px" alt="Third slide">
           </div>
           <div class="carousel-item">
           <img class="img-fluid" src="{{asset('Products IOS/P3 IOS/IOS P3-4.jpeg')}}" width="300" height="600px" alt="Forth slide">
           </div>
           <div class="carousel-item">
           <img class="img-fluid" src="{{asset('Products IOS/P3 IOS/IOS P3-5.jpeg')}}" width="300" height="600px" alt="Forth slide">
           </div>
           <div class="carousel-item">
           <img class="img-fluid" src="{{asset('Products IOS/P3 IOS/IOS P3-6.jpeg')}}" width="300" height="600px" alt="Forth slide">
           </div>
           <div class="carousel-item">
           <img class="img-fluid" src="{{asset('Products IOS/P3 IOS/IOS P3-7.jpeg')}}" width="300" height="600px" alt="Forth slide">
           </div>
           <div class="carousel-item">
           <img class="img-fluid" src="{{asset('Products IOS/P3 IOS/IOS P3-8.jpeg')}}" width="300" height="600px" alt="Forth slide">
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

              </div>
            </div>
          </div>
          </div>

          <!--Service Table-->

          <div class="col-xs-3 col-md-5">
            <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
                <div class="bg-overlay animated">
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


             <div class="col text-center">
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile3">
             view more
             </button>

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

              </div>
            </div>
          </div>
          </div>


          <!--Service Table-->

          <div class="col-xs-3 col-md-5">

            <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
                <div class="bg-overlay animated">
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


             <div class="col text-center">
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile4">
             view more
             </button>

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

              </div>
            </div>
          </div>
          </div>

          <!--Book Table-->
          <div class="col-xs-9 col-md-7">
            <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P4 IOS/IOS P4.jpeg')}}')">
                <div class="bg-overlay animated">
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


          <div class="col text-center">
          <!-- Button trigger modal -->
         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P4-IOS">
         view more
         </button>


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
         <img class="img-fluid" src="{{asset('Products IOS/P4 IOS/IOS P4-1.jpeg')}}" width="300" height="600px" alt="First slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P4 IOS/IOS P4-2.jpeg')}}" width="300" height="600px" alt="Second slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P4 IOS/IOS P4-3.jpeg')}}" width="300" height="600px" alt="Third slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P4 IOS/IOS P4-4.jpeg')}}" width="300" height="600px" alt="Forth slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P4 IOS/IOS P4-5.jpeg')}}" width="300" height="600px" alt="Forth slide">
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

              </div>
            </div>
          </div>
          </div>


          <!--Book Table-->
          <div class="col-xs-9 col-md-7">


            <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P5 IOS/IOS P5.jpeg')}}')">
                <div class="bg-overlay animated">
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


          <div class="col text-center">
          <!-- Button trigger modal -->
         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P5-IOS">
         view more
         </button>


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
         <img class="img-fluid" src="{{asset('Products IOS/P5 IOS/IOS P5-1.jpeg')}}" width="300" height="600px" alt="First slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P5 IOS/IOS P5-2.jpeg')}}" width="300" height="600px" alt="Second slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P5 IOS/IOS P5-3.jpeg')}}" width="300" height="600px" alt="Third slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P5 IOS/IOS P5-4.jpeg')}}" width="300" height="600px" alt="Forth slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P5 IOS/IOS P5-5.jpeg')}}" width="300" height="600px" alt="Forth slide">
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

              </div>
            </div>
          </div>
          </div>

          <!--Service Table-->

          <div class="col-xs-3 col-md-5">
            <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
                <div class="bg-overlay animated">
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


             <div class="col text-center">
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile5">
             view more
             </button>

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

              </div>
            </div>
          </div>
          </div>


          <!--Service Table-->

          <div class="col-xs-3 col-md-5">


            <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
                <div class="bg-overlay animated">
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


             <div class="col text-center">
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile6">
             view more
             </button>

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

              </div>
            </div>
          </div>
          </div>

          <!--Book Table-->
          <div class="col-xs-9 col-md-7">
            <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P6 IOS/IOS P6.jpeg')}}')">
                <div class="bg-overlay animated">
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


          <div class="col text-center">
          <!-- Button trigger modal -->
         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P6-IOS">
         view more
         </button>


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
         <img class="img-fluid" src="{{asset('Products IOS/P6 IOS/IOS P6-1.jpeg')}}" width="300" height="600px" alt="First slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P6 IOS/IOS P6-2.jpeg')}}" width="300" height="600px" alt="Second slide">
         </div>
         <div class="carousel-item">
         <img class="image-fluid" src="{{asset('Products IOS/P6 IOS/IOS P6-3.jpeg')}}" width="300" height="600px" alt="Third slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P6 IOS/IOS P6-4.jpeg')}}" width="300" height="600px" alt="Forth slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P6 IOS/IOS P6-5.jpeg')}}" width="300" height="600px" alt="Forth slide">
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

              </div>
            </div>
          </div>
          </div>


          <!--Book Table-->
          <div class="col-xs-9 col-md-7">



            <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P7 IOS/IOS P7.jpeg')}}')">
                <div class="bg-overlay animated">
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


          <div class="col text-center">
          <!-- Button trigger modal -->
         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P7-IOS">
         view more
         </button>


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
         <img class="img-fluid" src="{{asset('Products IOS/P7 IOS/IOS P7-1.jpeg')}}" width="300" height="600px" alt="First slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P7 IOS/IOS P7-2.jpeg')}}" width="300" height="600px" alt="Second slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P7 IOS/IOS P7-3.jpeg')}}" width="300" height="600px" alt="Third slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P7 IOS/IOS P7-4.jpeg')}}" width="300" height="600px" alt="Forth slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P7 IOS/IOS P7-5.jpeg')}}" width="300" height="600px" alt="Forth slide">
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

              </div>
            </div>
          </div>
          </div>

          <!--Service Table-->

          <div class="col-xs-3 col-md-5">
            <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
                <div class="bg-overlay animated">
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


             <div class="col text-center">
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile7">
             view more
             </button>

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

              </div>
            </div>
          </div>
          </div>


          <!--Service Table-->

          <div class="col-xs-3 col-md-5">


            <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
                <div class="bg-overlay animated">
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


             <div class="col text-center">
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile8">
             view more
             </button>

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

              </div>
            </div>
          </div>
          </div>

          <!--Book Table-->
          <div class="col-xs-9 col-md-7">
            <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P8 IOS/IOS P8.jpeg')}}')">
                <div class="bg-overlay animated">
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


          <div class="col text-center">
          <!-- Button trigger modal -->
         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P8-IOS">
         view more
         </button>


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
         <img class="img-fluid" src="{{asset('Products IOS/P8 IOS/IOS P8-1.jpeg')}}" width="300" height="600px" alt="First slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P8 IOS/IOS P8-2.jpeg')}}" width="300" height="600px" alt="Second slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P8 IOS/IOS P8-3.jpeg')}}" width="300" height="600px" alt="Third slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P8 IOS/IOS P8-4.jpeg')}}" width="300" height="600px" alt="Forth slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P8 IOS/IOS P8-5.jpeg')}}" width="300" height="600px" alt="Forth slide">
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

              </div>
            </div>
          </div>
          </div>


          <!--Book Table-->
          <div class="col-xs-9 col-md-7">


            <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P9 IOS/IOS P9.jpeg')}}')">
                <div class="bg-overlay animated">
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


          <div class="col text-center">
          <!-- Button trigger modal -->
         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P9-IOS">
         view more
         </button>


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
         <img class="img-fluid" src="{{asset('Products IOS/P9 IOS/IOS P9-1.jpeg')}}" width="300" height="600px" alt="First slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P9 IOS/IOS P9-2.jpeg')}}" width="300" height="600px" alt="Second slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P9 IOS/IOS P9-3.jpeg')}}" width="300" height="600px" alt="Third slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P9 IOS/IOS P9-4.jpeg')}}" width="300" height="600px" alt="Forth slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P9 IOS/IOS P9-5.jpeg')}}" width="300" height="600px" alt="Forth slide">
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

              </div>
            </div>
          </div>
          </div>

          <!--Service Table-->

          <div class="col-xs-3 col-md-5">
            <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
                <div class="bg-overlay animated">
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


             <div class="col text-center">
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile9">
             view more
             </button>

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

              </div>
            </div>
          </div>
          </div>


          <!--Service Table-->

          <div class="col-xs-3 col-md-5">



            <div class="jumbotron rounded" style="background-image: url('{{asset('image/black 2.jpg')}}')" >
                <div class="bg-overlay animated">
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


             <div class="col text-center">
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile10">
             view more
             </button>

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

              </div>
            </div>
          </div>
          </div>

          <!--Book Table-->
          <div class="col-xs-9 col-md-7">
            <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P10 IOS/IOS P10.jpeg')}}')">
                <div class="bg-overlay animated">
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


          <div class="col text-center">
          <!-- Button trigger modal -->
         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P10-IOS">
         view more
         </button>


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
         <img class="img-fluid" src="{{asset('Products IOS/P10 IOS/IOS P10-1.jpeg')}}" width="300px" height="600px" alt="First slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P10 IOS/IOS P10-2.jpeg')}}" width="300px" height="600px" alt="Second slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P10 IOS/IOS P10-3.jpeg')}}" width="300px" height="600px" alt="Third slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P10 IOS/IOS P10-4.jpeg')}}" width="300px" height="600px" alt="Forth slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P10 IOS/IOS P10-5.jpeg')}}" width="300px" height="600px" alt="Forth slide">
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

              </div>
            </div>
          </div>
          </div>



          <!--Book Table-->
          <div class="col-xs-9 col-md-7">




            <div class="jumbotron rounded" style="background-image: url('{{asset('Products IOS/P11 IOS/IOS P11.jpeg')}}')">
                <div class="bg-overlay animated">
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


          <div class="col text-center">
          <!-- Button trigger modal -->
         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P11-IOS">
         view more
         </button>


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
         <img class="img-fluid" src="{{asset('Products IOS/P11 IOS/IOS P11-1.jpeg')}}"  alt="First slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P11 IOS/IOS P11-2.jpeg')}}"  alt="Second slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P11 IOS/IOS P11-3.jpeg')}}"  alt="Third slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P11 IOS/IOS P11-4.jpeg')}}"  alt="Forth slide">
         </div>
         <div class="carousel-item">
         <img class="img-fluid" src="{{asset('Products IOS/P11 IOS/IOS P11-5.jpeg')}}"  alt="Forth slide">
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

              </div>
            </div>
          </div>
          </div>

          <!--Service Table-->

          <div class="col-xs-3 col-md-5">
            <div class="jumbotron rounded" style="background-image: url('{{asset('image/andro1.jpeg')}}')" >
                <div class="bg-overlay animated">
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


             <div class="col text-center">
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mobile11">
             view more
             </button>

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
            <img class="img-fluid" src="{{asset('image/andro1-2.jpeg')}}" width="300" height="600px"  alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="img-fluid" src="{{asset('image/andro1-3.jpeg')}}" width="300" height="600px" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="img-fluid" src="{{asset('image/andro1-4.jpeg')}}" width="300" height="600px" alt="Third slide">
            </div>
            <div class="carousel-item">
            <img class="img-fluid" src="{{asset('image/andro1-5.jpeg')}}" width="300" height="600px" alt="Forth slide">
            </div>
            <div class="carousel-item">
            <img class="img-fluid" src="{{asset('image/andro1-6.jpeg')}}" width="300" height="600px" alt="Forth slide">
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

              </div>
            </div>
          </div>
          </div>







      </div>
      </div>
      </div>





</html>

@include('layouts.footer')
@endsection
