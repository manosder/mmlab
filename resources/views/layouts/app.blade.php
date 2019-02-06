<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Kompia</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


    </head>
    <body>


      <div class="flex-center position-ref full-height">
          @if (Route::has('login'))
              <div class="top-right links">
                  @auth
                      <a href="{{ url('/home') }}">Home</a>
                  @else
                      <a href="{{ route('login') }}">Login</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}">Register</a>
                      @endif
                  @endauth
              </div>
          @endif
        </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>





    </body>


    <!-- Footer -->

    <!-- Footer -->
</html>
