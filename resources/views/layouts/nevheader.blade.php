
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title > Tech Knight Solution </title>
     <link rel="shortcut icon" type="image/gif" href="{{ URL::to('image/favicon.gif') }}"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<body>

  <style>
  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }

  .top-container {
    background-color: #F0FFFF;
    padding: 30px;
    text-align: center;
  }

  .header {
    padding: 10px 16px;
    background: #F0FFFF;
    color: #f1f1f1;
  }

  .content {
    padding: 16px;
  }

  .sticky {
    position: fixed;
    top: 0;
    width: 100%;
  }

  .sticky + .content {
    padding-top: 102px;
  }

  </style>



  <style>
  .shakil{
    background-color:rgb(32,32,32);
    color:rgb(32,32,32);
  }
  </style>


  <div class="shakil">
      <span  > <p class="fs-6">................ </p>
      <p class="fs-6">.............. </p> </span>
  </div>





<div class="header" id="myHeader">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

<style>
        #logo {
  display: inline-block;
  margin: 15px; /* margin: 20px was off */
  float: left;
  height: 60px;
  width: auto; /* correct proportions to specified height */
  border-radius: 0%; /* makes it a circle */
}
</style>
       <div class="navbar-nav me-auto col-xs-5 col-sm-6 col-lg-4">
        <a href="#"><img id="logo" src="image/logo.png"></a>
      </div>

      <style>
      .button1 {
        border-radius: 4px;
        background-color: #809FBF;
        border: none;
        color: #000000;
        text-align: center;
        font-size: 15px;
        padding: 10px;
        width: 300px;
        font-weight: bold;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }

      .button1 span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }

      .button1 span:after {

        content: '\00bb';
        color: #ffff;
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }

      .button1:hover span {
        color: #ffff;
        padding-right: 25px;
      }

      .button1:hover span:after {

        opacity: 1;
        right: 0;

      }

      </style>

      <style>
      .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
      }

      .dropdown {
        position: relative;
        display: inline-block;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }

      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }

      .dropdown-content a:hover {background-color: #f1f1f1}

      .dropdown:hover .dropdown-content {
        display: block;
      }

      .dropdown:hover .dropbtn {
        background-color: #3e8e41;
      }
      </style>

          <div class="navbar-nav me-auto col-xs-7 col-sm-6 col-lg-8" >

              <li class="nav-item" >
                     <a class="button1" href="http://techknightsolutions.com/product-solutions/">
                          <span>Home</span>
                     </a>
               </li>

            <li class="nav-item" >
              <div class="dropdown">
              <a  class="button1"  href="http://techknightsolutions.com/product-solutions/">
                   <span >Product & solutions</span>
                   <div class="dropdown-content">
                     <a href="http://techknightsolutions.com/web-development/">Web Development</a>
                     <a href="http://techknightsolutions.com/app-development/">App Development</a>
                     <a href="http://techknightsolutions.com/graphics-animations/">Graphics & Animations</a>
                     <a href="http://techknightsolutions.com/ecommerce-development/">eCommerce</a>
                     <a href="http://techknightsolutions.com/software-development/">Software Development</a>
                     <a href="http://techknightsolutions.com/ar-vr/">AR/VR</a>

                   </div>
              </a>
              </div>
            </li>
            <li class="nav-item">
              <div class="dropdown">
              <a  class="button1" href="http://techknightsolutions.com/service-consulting/">
                <span>Service & Consulting</span>
                <div class="dropdown-content">
                  <a href="http://techknightsolutions.com/seo/">SEO</a>
                  <a href="http://techknightsolutions.com/game-development/">Game Development</a>
                  <a href="http://techknightsolutions.com/social-site-maintenance/">Social Site Maintainance</a>
                  <a href="http://techknightsolutions.com/digital-marketing-service/">Digital Marketing</a>

                </div>

              </a>
              </div>
            </li>
            <li class="nav-item">
              <div class="dropdown">
              <a  class="button1" href="http://techknightsolutions.com/agent-eknight/">
                <span>Agent eKnight</span>

              </a>

            </li>
            <li class="nav-item">
              <div class="dropdown">
              <a  class="button1" href="http://techknightsolutions.com/contact/">
                <span>Contact eKnight</span>

              </a>

            </li>

            <li class="nav-item">
              <!DOCTYPE html>
              <html>
              <head>
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <style>
              body {
                font-family: "Lato", sans-serif;
              }
              .void{
                font-weight: bold;
              }

              .sidepanel  {
                width: 0;
                position: fixed;
                z-index: 1;
                height: 1350px;
                top: 0;
                left: 0;
                background-color: #ffff;
                overflow-x: hidden;
                transition: 0.5s;
                padding-top: 60px;
              }

              .sidepanel a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                font-weight: bold;
                color: #818181;
                display: block;
                transition: 0.3s;
              }

              .sidepanel a:hover {
                color: #809FBF;
              }

              .sidepanel .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
              }

              .openbtn {
                font-size: 20px;
                cursor: pointer;
                background-color:
                color: black;
                padding: 10px 15px;
                border: none;
              }

              .openbtn:hover {
                background-color:
              }
              </style>
              </head>
              <body>

              <div id="mySidepanel" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="#"><img id="logo" src="image/logo.png"></a>
                <br>
                <div class="void">
                <br>
                <a href="#"></a>
                <br>
                <a href="#">Home</a>
                <br>
                <a href="#">Product & Solution</a>
                <br>
                <a href="#">Service Consulting</a>
                <br>
                <a href="#">Agent eKnight</a>
                <br>
                <a href="#">Contact Knight</a>

              </div>

              </div>

              <button class="openbtn" onclick="openNav()"> ☰ </button>

              <script>
              function openNav() {
                document.getElementById("mySidepanel").style.width = "1350px";
              }

              function closeNav() {
                document.getElementById("mySidepanel").style.width = "0";
              }
              </script>

              </body>
              </html>

            </li>

          </div>

        </div>
      </div>

    </nav>



      <style>
      h1 {text-align: center;}

      div {text-align: center;}
     </style>




  </body>









<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
