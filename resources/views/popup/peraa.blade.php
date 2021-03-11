@extends('layouts.app')
@section('content')
@include('layouts.nevheader')
<div class="container">
  <div class="row">

    <!--Book Table-->
    <div class="col-lg-6 col-md-10 mx-auto">
      <div class="jumbotron jumbotron-fluid" style="background-image: url('{{asset('image/1s1-1st.jpeg')}}')">

          <div class="container">
            <h3 style="display-4: inline-block;"></h3>
        <div class="add-table">
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

        <div class="jumbotron jumbotron-fluid" style="background-image: url('{{asset('P2IOS/main.jpeg')}}')">

            <div class="container">
              <h3 style="display-4: inline-block;"></h3>
          <div class="add-table">
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


      <!--Book Table-->
      <div class="col-lg-6 col-md-10 mx-auto">
        <div class="jumbotron jumbotron-fluid" style="background-image: url('{{asset('P3IOS/main.jpeg')}}')">

            <div class="container">
              <h3 style="display-4: inline-block;"></h3>
          <div class="add-table">
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
                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P3IOS">
                   view more
                   </button>
            </hr>
            <!-- Modal -->
            <div class="modal fade" id="P3IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <img class="d-block w-100" src="{{asset('P3IOS/WhatsApp Image 2021-03-08 at 2.33.01 PM.jpeg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('P3IOS/WhatsApp Image 2021-03-08 at 2.33.02 PM (1).jpeg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('P3IOS/WhatsApp Image 2021-03-08 at 2.33.02 PM.jpeg')}}" alt="Third slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('P3IOS/WhatsApp Image 2021-03-08 at 2.33.03 PM (1).jpeg')}}" alt="Third slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('P3IOS/WhatsApp Image 2021-03-08 at 2.33.03 PM.jpeg')}}" alt="Third slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('P3IOS/WhatsApp Image 2021-03-08 at 2.33.04 PM (1).jpeg')}}" alt="Third slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('P3IOS/WhatsApp Image 2021-03-08 at 2.33.04 PM.jpeg')}}" alt="Third slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('P3IOS/WhatsApp Image 2021-03-08 at 2.33.05 PM.jpeg')}}" alt="Third slide">
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

          <div class="jumbotron jumbotron-fluid" style="background-image: url('{{asset('P4IOS/main.jpeg')}}')">

              <div class="container">
                <h3 style="display-4: inline-block;"></h3>
            <div class="add-table">
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
                     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P4IOS">
                     view more
                     </button>
              </hr>
              <!-- Modal -->
              <div class="modal fade" id="P4IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <img class="d-block w-100" src="{{asset('P4IOS/WhatsApp Image 2021-03-08 at 2.58.02 PM (1).jpeg')}}" alt="First slide">
              </div>
              <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('P4IOS/WhatsApp Image 2021-03-08 at 2.58.02 PM (2).jpeg')}}" alt="Second slide">
              </div>
              <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('P4IOS/WhatsApp Image 2021-03-08 at 2.58.02 PM (3).jpeg')}}" alt="Third slide">
              </div>
              <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('P4IOS/WhatsApp Image 2021-03-08 at 2.58.02 PM (4).jpeg')}}" alt="Third slide">
              </div>
              <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('P4IOS\WhatsApp Image 2021-03-08 at 2.58.02 PM.jpeg')}}" alt="Third slide">
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
          <div class="jumbotron jumbotron-fluid" style="background-image: url('{{asset('P5IOS/main.jpeg')}}')">

              <div class="container">
                <h3 style="display-4: inline-block;"></h3>
            <div class="add-table">
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
                     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P5IOS">
                     view more
                     </button>
              </hr>
              <!-- Modal -->
              <div class="modal fade" id="P5IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <img class="d-block w-100" src="{{asset('P5IOS/WhatsApp Image 2021-03-08 at 3.05.57 PM (1).jpeg')}}" alt="First slide">
              </div>
              <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('P5IOS/WhatsApp Image 2021-03-08 at 3.05.57 PM (2).jpeg')}}" alt="Second slide">
              </div>
              <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('P5IOS/WhatsApp Image 2021-03-08 at 3.05.57 PM (3).jpeg')}}" alt="Third slide">
              </div>
              <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('P5IOS/WhatsApp Image 2021-03-08 at 3.05.57 PM (4).jpeg')}}" alt="Third slide">
              </div>
              <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('P5IOS/WhatsApp Image 2021-03-08 at 3.05.57 PM (5).jpeg')}}" alt="Third slide">
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

          <div class="jumbotron jumbotron-fluid" style="background-image: url('{{asset('P6IOS/main.jpeg')}}')">

              <div class="container">
                <h3 style="display-4: inline-block;"></h3>
            <div class="add-table">
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
                     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P6IOS">
                     view more
                     </button>
              </hr>
              <!-- Modal -->
              <div class="modal fade" id="P6IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <img class="d-block w-100" src="{{asset('P6IOS/WhatsApp Image 2021-03-08 at 3.10.55 PM (1).jpeg')}}" alt="First slide">
              </div>
              <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('P6IOS/WhatsApp Image 2021-03-08 at 3.10.55 PM (2).jpeg')}}" alt="Second slide">
              </div>
              <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('P6IOS/WhatsApp Image 2021-03-08 at 3.10.55 PM (3).jpeg')}}" alt="Third slide">
              </div>
              <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('P6IOS/WhatsApp Image 2021-03-08 at 3.10.55 PM (3).jpeg')}}" alt="Third slide">
              </div>
              <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('P6IOS/WhatsApp Image 2021-03-08 at 3.10.55 PM (5).jpeg')}}" alt="Third slide">
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
            <div class="jumbotron jumbotron-fluid" style="background-image: url('{{asset('P7IOS/main.jpeg')}}')">

                <div class="container">
                  <h3 style="display-4: inline-block;"></h3>
              <div class="add-table">
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
                       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P7IOS">
                       view more
                       </button>
                </hr>
                <!-- Modal -->
                <div class="modal fade" id="P7IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <img class="d-block w-100" src="{{asset('P7IOS\WhatsApp Image 2021-03-08 at 3.17.03 PM (1).jpeg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('P7IOS\WhatsApp Image 2021-03-08 at 3.17.03 PM (2).jpeg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('P7IOS\WhatsApp Image 2021-03-08 at 3.17.03 PM (3).jpeg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('P7IOS\WhatsApp Image 2021-03-08 at 3.17.03 PM (4).jpeg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('P7IOS\WhatsApp Image 2021-03-08 at 3.17.03 PM (5).jpeg')}}" alt="Third slide">
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

            <div class="jumbotron jumbotron-fluid" style="background-image: url('{{asset('P8IOS/main.jpeg')}}')">

                <div class="container">
                  <h3 style="display-4: inline-block;"></h3>
              <div class="add-table">
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
                       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P8IOS">
                       view more
                       </button>
                </hr>
                <!-- Modal -->
                <div class="modal fade" id="P8IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <img class="d-block w-100" src="{{asset('P8IOS/WhatsApp Image 2021-03-08 at 3.21.15 PM (1).jpeg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('P8IOS/WhatsApp Image 2021-03-08 at 3.21.15 PM (2).jpeg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('P8IOS/WhatsApp Image 2021-03-08 at 3.21.15 PM (3).jpeg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('P8IOS/WhatsApp Image 2021-03-08 at 3.21.15 PM (4).jpeg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('P8IOS\WhatsApp Image 2021-03-08 at 3.21.15 PM (5).jpeg')}}" alt="Third slide">
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
              <div class="jumbotron jumbotron-fluid" style="background-image: url('{{asset('P9IOS/main.jpeg')}}')">

                  <div class="container">
                    <h3 style="display-4: inline-block;"></h3>
                <div class="add-table">
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
                         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P9IOS">
                         view more
                         </button>
                  </hr>
                  <!-- Modal -->
                  <div class="modal fade" id="P9IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <img class="d-block w-100" src="{{asset('P9IOS/WhatsApp Image 2021-03-08 at 3.25.22 PM (1).jpeg')}}" alt="First slide">
                  </div>
                  <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('P9IOS/WhatsApp Image 2021-03-08 at 3.25.22 PM (2).jpeg')}}" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('P9IOS/WhatsApp Image 2021-03-08 at 3.25.22 PM (3).jpeg')}}" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('P9IOS/WhatsApp Image 2021-03-08 at 3.25.22 PM (4).jpeg')}}" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('P9IOS\WhatsApp Image 2021-03-08 at 3.25.22 PM (5).jpeg')}}" alt="Second slide">
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

              <div class="jumbotron jumbotron-fluid" style="background-image: url('{{asset('P10IOS/main.jpeg')}}')">

                  <div class="container">
                    <h3 style="display-4: inline-block;"></h3>
                <div class="add-table">
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
                         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P10IOS">
                         view more
                         </button>
                  </hr>
                  <!-- Modal -->
                  <div class="modal fade" id="P10IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <img class="d-block w-100" src="{{asset('P3IOS/WhatsApp Image 2021-03-08 at 2.33.05 PM.jpeg')}}" alt="7">
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
                <div class="jumbotron jumbotron-fluid" style="background-image: url('{{asset('P11IOS/main.jpeg')}}')">

                    <div class="container">
                      <h3 style="display-4: inline-block;"></h3>
                  <div class="add-table">
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
                           <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#P11IOS">
                           view more
                           </button>
                    </hr>
                    <!-- Modal -->
                    <div class="modal fade" id="P11IOS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>

                    </ol>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('P11IOS/WhatsApp Image 2021-03-08 at 3.34.48 PM (1).jpeg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('P11IOS/WhatsApp Image 2021-03-08 at 3.34.48 PM (2).jpeg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('P11IOS/WhatsApp Image 2021-03-08 at 3.34.48 PM (3).jpeg')}}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('P11IOS/WhatsApp Image 2021-03-08 at 3.34.48 PM (4).jpeg')}}" alt="Third slide">
                    </div
                    <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('P11IOS\WhatsApp Image 2021-03-08 at 3.34.48 PM (5).jpeg')}}" alt="Third slide">
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


@include('layouts.footer')
@endsection
