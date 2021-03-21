@include('layouts.nevheader')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Bootstrap 3 Thumbnails</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
        margin: 20px;
    }
</style>
</head>
<body>
<div class="bs-example">
   <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="thumbnail">
                    <img src="Products IOS/P1 IOS/IOS P1.jpeg" alt="Sample Image">
                    <div class="caption">
                        
                        <p>    <div class="col text-center">
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
                           </div></p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="thumbnail">
                    <img src="splessons.jpg" alt="Sample Image">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p> SPLessons stands for Simple Programming Lessons and was started with an intention to help developers all around the globe by presenting programming codes with different queries in different programming languages.</p>
                        <p><a href="#" class="btn btn-primary">Share</a> <a href="#" class="btn btn-default">Follow</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
