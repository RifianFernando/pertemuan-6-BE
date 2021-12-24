<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Shoppil | {{ $title }} </title>
  </head>
  <body>
      @include('partial.navbar')
      <div class="container mt-4">
        @yield('container')
    </div>
  </body>
</html>
