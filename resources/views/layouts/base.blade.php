<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {!! Html::style('vendor/bootstrap/css/bootstrap.min.css')!!}
        

    </head>
    <body>
      <div class="container">
        <!-- Jumbotron Header -->
        <header class="jumbotron my-4">
          <h1 class="display-3">A Warm Welcome!</h1>
          <p class="lead">Admin ada di route /admin</p>
        </header>
        @yield('content')
      </div>

    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Pramita Firnanda</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    {!! Html::script('vendor/jquery/jquery.min.js')!!}
    {!! Html::script('vendor/bootstrap/js/bootstrap.bundle.min.js')!!}


    </body>
</html>
