<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Techknight') }}</title>
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
    <div id="app">
      <!DOCTYPE html>
      <html>
      <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
      body {margin:0;}

      .navbar {
        overflow: hidden;
        background-color: #333;
        position: fixed;
        top: 0;
        width: 100%;
      }

      .navbar a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
      }

      .navbar a:hover {
        background: #ddd;
        color: black;
      }

      .main {
        padding: 16px;
        margin-top: 30px;
        height: 1500px; /* Used in this example to enable scrolling */
      }
      </style>
      </head>
      <body>

      <div class="navbar">
        <a href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
      </div>

      <div class="main">
        <h1>Fixed Top Menu</h1>
        <h2>Scroll this page to see the effect</h2>
        <h2>The navigation bar will stay at the top of the page while scrolling</h2>

        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
      </div>

      </body>
      </html>
        <main class="py-4">

            @yield('Content')

        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>