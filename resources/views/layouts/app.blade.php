<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Kompia</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;

            }
            .content {
              margin-top: 40px;
            }

            /* .full-height {
                height: 100vh;
            } */

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .row {
              height: 200px;
            }
            footer{
              color: white;
            }
            footer a{
              color: #bfffff;
            }
            footer a:hover{
              color: white;
            }

            .footer-bottom{
              background: #3d6277;
              padding: 2em;
            }
            .footer-top{
              background: #2d4958;
            }
            .footer-middle{
               background: #3d6277;
              padding-top: 2em;
              color: white;
            }
            /**Sub Navigation**/
            .subnavigation-container{
              background: #3d6277;
            }
            .subnavigation .nav-link{
              color: white;
              font-weight: bold;
            }
            .subnavigation-container{
              text-align: center;
            }
            .subnavigation-container .navbar{
              display: inline-block;
              margin-bottom: -6px; /* Inline-block margin offffset HACK -Gilron */
            }
            .col-subnav a{
              padding: 1rem 1rem;
              color: white;
              font-weight: bold;
            }
            .col-subnav .active{
              border-top:5px solid orange;
             background: white;
              color: black;
            }

        </style>
    </head>
    <body>

      @include('inc.navbar')


<!--
      <div class="container-fluid">
        <h2>Nested Columns</h2>
        <p>Add columns inside other columns:</p>
      </div>

      <div class="container-fluid">
            <div class="row needspace-bottom">
                <div class="col-8 bg-warning">
                    .col-8
                    <div class="row">
                        <div class="col-6 bg-light">.col-6</div>
                        <div class="col-6 bg-secondary">.col-6</div>
                    </div>
                </div>
                <div class="col-4 bg-success">.col-4</div>
            </div>
            <div class="row needspace-bottom">
            <div class="col-8 bg-warning">
                .col-8
                <div class="row">
                <div class="col-6 bg-light">.col-6</div>
                <div class="col-6 bg-secondary">.col-6</div>
                </div>
            </div>
            <div class="col-4 bg-success">.col-4</div>
            </div>
            <div class="row needspace-bottom">
                <div class="col-8 bg-warning">
                    .col-8
                    <div class="row">
                        <div class="col-6 bg-light">.col-6</div>
                        <div class="col-6 bg-secondary">.col-6</div>
                    </div>
                </div>
                <div class="col-4 bg-success">.col-4</div>
            </div>
        </div>


-->




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





    <footer class="mainfooter" role="contentinfo">

      <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <!--Column1-->
            <div class="footer-pad">
              <h4>Address</h4>
              <address>
    								<ul class="list-unstyled">
    									<li>
                        City Hall<br>
    										212  Street<br>
    										Lawoma<br>
    										735<br>
    									</li>
    									<li>
    										Phone: 0
    									</li>
    								</ul>
    							</address>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!--Column1-->
            <div class="footer-pad">
              <h4>Popular Services</h4>
              <ul class="list-unstyled">
                <li><a href="#"></a></li>
                <li><a href="#">Payment Center</a></li>
                <li><a href="#">Contact Directory</a></li>
                <li><a href="#">Forms</a></li>
                <li><a href="#">News and Updates</a></li>
                <li><a href="#">FAQs</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!--Column1-->
            <div class="footer-pad">
              <h4>Website Information</h4>
              <ul class="list-unstyled">
                <li><a href="#">Website Tutorial</a></li>
                <li><a href="#">Accessibility</a></li>
                <li><a href="#">Disclaimer</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Webmaster</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!--Column1-->
            <div class="footer-pad">
              <h4>Popular Departments</h4>
              <ul class="list-unstyled">
                <li><a href="#">Parks and Recreation</a></li>
                <li><a href="#">Public Works</a></li>
                <li><a href="#">Police Department</a></li>
                <li><a href="#">Fire</a></li>
                <li><a href="#">Mayor and City Council</a></li>
                <li>
                  <a href="#"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div >
            <div class="col-xs-12">
              <!--Footer Bottom-->
              <p class="text-xs-center">&copy; Copyright 2016 - City of USA.  All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
















    <!-- Footer -->
</html>
