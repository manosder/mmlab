<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Εργαστήριο Γραφικών, Πολυμέσων & Γεωγραφικών Συστημάτων</title>
    <link rel="shortcut icon" href="../../logo1.png" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <!-- Styles -->
  <link href="{{ asset('css/mdbcss/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
  <link href="{{ asset('css/mdbcss/mdb.min.css') }}" rel="stylesheet" type="text/css" >
  <link href="{{ asset('css/mdbcss/style.css') }}" rel="stylesheet" type="text/css" >
</head>
<style>
.collapsible {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .collapsible:hover {
  background-color: #ccc;
}

/* Style the collapsible content. Note: hidden by default */
.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: transparent;
  color: white;
  text-align: left;
}
@media only screen and (max-width: 700px) {
  .article-content {
    font-size: 9px;
  }
  h4 {
    font-size: 14px;
  }

}
.research{
  height: 40%;
}
</style>

<body>

  <!-- Start your project here-->
  <div class="se-pre-con"></div>
  <!--Main Navigation-->
  <header class="research">

    @include('inc.navbar')

    <!--Mask-->
    <div id="intro" class="view">

        <div class="mask rgba-black-strong">

            <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                <div class="row d-flex justify-content-center text-center">

                    <div class="col-md-10">

                        <!-- Heading -->
                        <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">Έργα</h2>




                    </div>

                </div>

            </div>

        </div>

    </div>
    <!--/.Mask-->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="mt-5">
      <div class="container">


        <!--Section: Examples**********************************************************************-->
                  <section id="examples" class="text-center">

            <hr class="my-5">

                    <!--Grid row-->
                    <div class="row">

                      <!--Grid column-->
                      <div class="landing-col col-lg-12 col-md-12 mb-12">

                        <div class="view overlay z-depth-1-half">
                          <img src="https://mdbootstrap.com/img/Photos/Others/images/51.jpg" class="img-fluid">
                          <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>

                        <h4 class="my-4 font-weight-bold">Έργα</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
                          aperiam minima
                          assumenda deleniti hic.</p>

                      </div>
                      <!--Grid column-->





                    </div>
                    <!--Grid row-->

                  </section>
        <!--Section: Examples**********************************************************************-->

                  <hr class="my-5">


      </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer unique-color-dark">

      <!-- Social buttons -->
      <div class="primary-color">
          <div class="container">
              <!--Grid row-->
              <div class="row py-4 d-flex align-items-center">

                  <!--Grid column-->
                  <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                      <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6 col-lg-7 text-center text-md-right">
                      <!--Facebook-->
                      <a class="fb-ic ml-0">
                          <i class="fa fa-facebook white-text mr-4"> </i>
                      </a>
                      <!--Twitter-->
                      <a class="tw-ic">
                          <i class="fa fa-twitter white-text mr-4"> </i>
                      </a>
                      <!--Google +-->
                      <a class="gplus-ic">
                          <i class="fa fa-google-plus white-text mr-4"> </i>
                      </a>
                      <!--Linkedin-->
                      <a class="li-ic">
                          <i class="fa fa-linkedin white-text mr-4"> </i>
                      </a>
                      <!--Instagram-->
                      <a class="ins-ic">
                          <i class="fa fa-instagram white-text mr-lg-4"> </i>
                      </a>
                  </div>
                  <!--Grid column-->

              </div>
              <!--Grid row-->
          </div>
      </div>
      <!-- Social buttons -->

      <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-1 col-lg-1 col-xl-1 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>MM Lab</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p></p>
                    <img src="https://mmlab.ceid.upatras.gr/images/stories/siteimages/logo1.png">
            </div>
            <!--/.First column-->
            <!--Fourth column
            <div class="col-md-2 col-lg-2 col-xl-2">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Contact</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fa fa-home mr-3"></i>(Προκατ Β' Κτιρίου)<br> Δομίνικου Θεοτοκόπουλου Πανεπιστήμιο Πατρών,26504, Ρίο
                </p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> info@example.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> (+30 2610) 996960 </p>
                <p>
                    <i class="fa fa-print mr-3"></i> (+30 2610) 960322</p>
            </div>-->
            <!--/.Fourth column-->
            <!--Second column-->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Research</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="http://www.acm.org/">ACM - Association for Computing Machinery</a>
                </p>
                <p>
                    <a href="http://www.computer.org/">IEEE Computer Society</a>
                </p>
                <p>
                    <a href="http://www.eatcs.org/">European Association for Theoretical Computer Science</a>
                </p>
                <p>
                    <a href="http://ieee-upatras.gr/">IEEE Student Branch - University of Patras</a>
                </p>
            </div>
            <!--/.Second column-->

            <!--Second column-->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Useful Links</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="http://www.sepe.gr/">ΣΕΠΕ - Σύνδεσμος Επιχειρήσεων Πληροφορικής & Επικοινωνιών Ελλάδας</a>
                </p>
                <p>
                    <a href="http://www.epy.gr/">ΕΠΥ - Ελληνική Εταιρία Επιστημόνων Η/Υ και Πληροφορικής (ΕΠΥ)</a>
                </p>
                <p>
                    <a href="http://www.ernact.eu/">European Digital Network</a>
                </p>

            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Ενδοπανεπιστημιακοί Σύνδεσμοι</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="http://www.ceid.upatras.gr/">Τμήμα Μηχανικών Η/Υ & Πληροφορικής</a>
                </p>
                <p>
                    <a href="http://www.lboro.ac.uk/">Loughborough University</a>
                </p>
                <p>
                    <a href="http://www.upatras.gr/">Πανεπιστήμιο Πατρών</a>
                </p>
                <p>
                    <a href="http://www.cti.gr/">ΙΤΥΕ ΔΙΟΦΑΝΤΟΣ</a>
                </p>
            </div>
            <!--/.Third column-->



        </div>
    </div>
    <!--/.Footer Links-->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://www.facebook.com/profile.php?id=100011250337620"> MD</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->

  <!-- My Project ends here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <!-- JQuery -->
-
  <!--Google Maps-->
  <script src="https://maps.google.com/maps/api/js"></script>

  <!-- Google Maps settings -->
  <script>
    // Regular map
    function regular_map() {
      var var_location = new google.maps.LatLng(38.283659, 21.788985);

      var var_mapoptions = {
        center: var_location,
        zoom: 17
      };

      var var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);

      var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title: "Προκατ Β' Κτιρίου"
      });
    }

    // Initialize maps
    google.maps.event.addDomListener(window, 'load', regular_map);
  </script>

  <script type="text/javascript" src="{{ asset('js/mdbjs/jquery-3.3.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/mdbjs/popper.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/mdbjs/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/mdbjs/mdb.min.js') }}"></script>


  <!-- Carousel options -->
  <script>
    $('.carousel').carousel({
      interval: 3000,
    })
  </script>
  <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

</body>
<script> var botmanWidget = {
        title: 'MMLab Chat Server',
        mainColor: '#456765',
        bubbleBackground: '#ff76f4',
        aboutText: '',
        bubbleAvatarUrl: '',
        }; </script>


        <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</html>
