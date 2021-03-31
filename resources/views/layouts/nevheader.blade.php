
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title > Tech Knight Solution </title>
    <link rel="icon" type="image/ico" href="images/favi.ico"/>

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


<div class="header" id="myHeader">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

      <div class="container-fluid">
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

        <a href="#"><img id="logo" src="image/logo.png"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" >

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

            <style>
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

              <li class="nav-item" >
                     <a class="button" href="http://techknightsolutions.com/product-solutions/">
                          <span>Home</span>
                     </a>
               </li>

            <li class="nav-item" >
              <div class="dropdown">
              <a  class="button"  href="http://techknightsolutions.com/product-solutions/">
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
              <a  class="button" href="http://techknightsolutions.com/service-consulting/">
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
              <a  class="button" href="http://techknightsolutions.com/agent-eknight/">
                <span>Agent eKnight</span>

              </a>

            </li>
            <li class="nav-item">
              <div class="dropdown">
              <a  class="button" href="http://techknightsolutions.com/contact/">
                <span>Contact eKnight</span>

              </a>

            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="{{Route('relux')}}">Portfolio</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>

          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>

    </nav>



  </body>
    <div class="collapse" id="navbarToggleExternalContent">

    <div class="bg-dark p-4">
      <h5 class="text-white h4">Tech Knight Solution</h5>
      <span class="text-muted"></span>
    </div>

    <div class="container">

      <style>
      h1 {text-align: center;}

      div {text-align: center;}
     </style>
      <h1><a href="#">Home</a></h1>
      <h1><a href="#">Product & Solution</a></h1>
      <h1><a href="#">Service Consulting</a></h1>
      <h1><a href="#">Agent eKnight</a></h1>
      <h1><a href="#">Contact Knight</a></h1>
      


    </div>

  </div>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

  </nav>
</div>







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
