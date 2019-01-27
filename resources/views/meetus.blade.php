<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Εργαστήριο Γραφικών, Πολυμέσων & Γεωγραφικών Συστημάτων</title>
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
</style>

<body>

  <!-- Start your project here-->
  <div class="se-pre-con"></div>
  <!--Main Navigation-->
  <header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color fixed-top">

      <div class="container">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">Navbar</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/first#intro">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/first#best-features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/first#examples">Examples</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/first#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/first#contact">Contact</a>
                </li>
            </ul>
            <!-- Links -->

            <!-- Dropdown -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> -->

          </ul>
          <!-- Links -->

          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
        </div>
        <!-- Collapsible content -->

      </div>

    </nav>
    <!--/.Navbar-->

    <!--Mask-->
    <div id="intro" class="view">

        <div class="mask rgba-black-strong">

            <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                <div class="row d-flex justify-content-center text-center">

                    <div class="col-md-10">

                        <!-- Heading -->
                        <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">The Team</h2>

                        <!-- Divider -->
                        <hr class="hr-light">

                        <!-- Description -->
                        <h4 class="white-text my-4">Εργαστήριο Γραφικών, Πολυμέσων & Γεωγραφικών Συστημάτων</h4>
                        <button type="button" class="btn btn-outline-white collapsible text-center">Read more<i class="fa fa-book ml-2"></i></button>
                       <div class="content">
                         <div class="article-content"><p>Το <strong>Εργαστήριο Γραφικών, Πολυμέσων και Γεωγραφικών Συστημάτων</strong> του Τμήματος Μηχανικών Ηλεκτρονικών Υπολογιστών και Πληροφορικής (ΤΜΗΥΠ) του Πανεπιστημίου Πατρών ιδρύθηκε το 1994. Το εκπαιδευτικό και ερευνητικό έργο του εργαστηρίου εντάσσεται στα πλαίσια του τομέα Λογικού των Υπολογιστών του Τμήματος.
                            <br>Οι βασικές δραστηριότητες του αφορούν:</p>
                         <ul>
                         <li>Tην <strong>υποστήριξη της προπτυχιακής και της μεταπτυχιακής εκπαίδευσης</strong> του Τμήματος Μηχανικών Ηλεκτρονικών Υπολογιστών και Πληροφορικής του Πανεπιστημίου Πατρών.</li>
                         <li>Tη διεξαγωγή <strong>θεωρητικής έρευνας</strong> με στόχο την προαγωγή της επιστήμης στις περιοχές που δραστηριοποιούνται τα μέλη του.</li>
                         <li>Tην <strong>ανάπτυξη εφαρμογών και εργαλείων</strong> Γραφικών, Πολυμέσων, Γεωγραφικών Συστημάτων και Τεχνολογιών Διαδικτύου στα πλαίσια της υλοποίησης εθνικών και κοινοτικών ερευνητικών προγραμμάτων και εκπόνησης διπλωματικών εργασιών.</li>
                         </ul>
       </div>
                       </div>
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
          <section id="examples" >

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->

              <div class="col-lg-4 col-md-4 mb-4">
                <div class="view overlay z-depth-1-half">
                  <img src="https://mmlab.ceid.upatras.gr/images/stories/people/PHOTO%20Thanasis%20Tsakalidis.jpg" class="img-fluid">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>
                <div class="col-lg-12 col-md-12 mb-12">
                <h4 class="my-4 font-weight-bold">Athanasios Tsakalidis</h4>
                <p class="grey-text">Athanasios K. Tsakalidis is a computer-scientist, professor of the University of Patras. He is a graduate in Mathematics from the University of Thessaloniki and a post-graduate in Informatics from the University of Saarland, Germany. He worked as a researcher at the University of Saarland. He has been student and collaborator of Prof. Kurt Mehlhorn, Director of the Max-Planck Institute of Informatics in Germany for twelve years. He joined the faculty of the Department of Computer Engineering and Informatics at the University of Patras and served his department as Chairman for 12 years. During the period 1993–2005 he was a member of the Board of Directors of the Research Academic Computer Technology Institute (RACTI), in 1997–2007, Coordinator of Research and Development of RACTI. He is one of the contributors to the “Handbook of Theoretical Computer Science” (Elsevier and MIT-Press, 1990, 48 co-authors from 12 countries). Between these contributors there are six Turing Award recipients. He has published many scientific articles, having a special contribution to the solution of elementary problems in the area of data structures.  Scientific interests: Health Informatics, Data Structures, Computational Geometry, Information Retrieval, Computer Graphics, Data Bases, and Bio-Informatics.</p>
                <p>
                    <i class="fa fa-address-card mr-3"></i>Dieuthintis mmLab
                </p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> georgios.domalis@gmail.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> (+30) 698 34 82 792 </p>
                <p>
                    <i class="fa fa-print mr-3"></i> (+30 2610) 960322</p>
                  <p><button class="button text-center">Contact</button></p>
              </div>
              <!--Grid column-->






              <!--Grid column-->
              <div class="col-lg-4 col-md-12 mb-4 ">

                <div class="view overlay z-depth-1-half">
                  <img src="https://www.w3schools.com/w3images/team1.jpg" class="img-fluid">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <h4 class="my-4 font-weight-bold">Georgios Domalis</h4>
                <p>
                    <i class="fa fa-address-card mr-3"></i>Didaktorikos Foititis & upefthinos mmLab
                </p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> georgios.domalis@gmail.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> (+30) 698 34 82 792 </p>
                <p>
                    <i class="fa fa-print mr-3"></i> (+30 2610) 960322</p>
                  <p><button class="button text-center">Contact</button></p>

              </div>
              <!--Grid column-->
              <!--Grid column-->
              <div class="col-lg-4 col-md-12 mb-4 ">

                <div class="view overlay z-depth-1-half">
                  <img src="https://www.w3schools.com/w3images/team1.jpg" class="img-fluid">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <h4 class="my-4 font-weight-bold">Georgios Domalis</h4>
                <p>
                    <i class="fa fa-address-card mr-3"></i>Didaktorikos Foititis & upefthinos mmLab
                </p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> georgios.domalis@gmail.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> (+30) 698 34 82 792 </p>
                <p>
                    <i class="fa fa-print mr-3"></i> (+30 2610) 960322</p>
                  <p><button class="button text-center">Contact</button></p>

              </div>
              <!--Grid column-->


              <!--Grid column-->
              <div class="col-lg-4 col-md-12 mb-4 ">

                <div class="view overlay z-depth-1-half">
                  <img src="https://www.w3schools.com/w3images/team1.jpg" class="img-fluid">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <h4 class="my-4 font-weight-bold">Georgios Domalis</h4>
                <p>
                    <i class="fa fa-address-card mr-3"></i>Didaktorikos Foititis & upefthinos mmLab
                </p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> georgios.domalis@gmail.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> (+30) 698 34 82 792 </p>
                <p>
                    <i class="fa fa-print mr-3"></i> (+30 2610) 960322</p>
                  <p><button class="button text-center">Contact</button></p>

              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-lg-4 col-md-12 mb-4 ">

                <div class="view overlay z-depth-1-half">
                  <img src="https://www.w3schools.com/w3images/team1.jpg" class="img-fluid">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <h4 class="my-4 font-weight-bold">Georgios Domalis</h4>
                <p>
                    <i class="fa fa-address-card mr-3"></i>Didaktorikos Foititis & upefthinos mmLab
                </p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> georgios.domalis@gmail.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> (+30) 698 34 82 792 </p>
                <p>
                    <i class="fa fa-print mr-3"></i> (+30 2610) 960322</p>
                  <p><button class="button text-center">Contact</button></p>

              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-lg-4 col-md-12 mb-4 ">

                <div class="view overlay z-depth-1-half">
                  <img src="https://www.w3schools.com/w3images/team1.jpg" class="img-fluid">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <h4 class="my-4 font-weight-bold">Georgios Domalis</h4>
                <p>
                    <i class="fa fa-address-card mr-3"></i>Didaktorikos Foititis & upefthinos mmLab
                </p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> georgios.domalis@gmail.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> (+30) 698 34 82 792 </p>
                <p>
                    <i class="fa fa-print mr-3"></i> (+30 2610) 960322</p>
                  <p><button class="button text-center">Contact</button></p>

              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-lg-4 col-md-12 mb-4 ">

                <div class="view overlay z-depth-1-half">
                  <img src="https://www.w3schools.com/w3images/team1.jpg" class="img-fluid">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <h4 class="my-4 font-weight-bold">Georgios Domalis</h4>
                <p>
                    <i class="fa fa-address-card mr-3"></i>Didaktorikos Foititis & upefthinos mmLab
                </p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> georgios.domalis@gmail.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> (+30) 698 34 82 792 </p>
                <p>
                    <i class="fa fa-print mr-3"></i> (+30 2610) 960322</p>
                  <p><button class="button text-center">Contact</button></p>

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

            <!--First column
            <div class="col-md-1 col-lg-1 col-xl-1 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>MM Lab</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p></p>
                    <img src="https://mmlab.ceid.upatras.gr/images/stories/siteimages/logo1.png">
            </div>-->
            <!--/.First column-->
            <!--Fourth column-->
            <div class="col-md-3 col-lg-3 col-xl-3">
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
            </div>
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
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
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
    <!-- SCRIPTS -->
    <!-- JQuery -->
<script type="text/javascript" src="{{ asset('js/mdbjs/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/mdbjs/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/mdbjs/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/mdbjs/mdb.min.js') }}"></script>

    </body>

    </html>
