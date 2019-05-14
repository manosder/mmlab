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

</style>

<body>

  <!-- Start your project here-->
  <div class="se-pre-con"></div>
  <!--Main Navigation-->
  <header>

    @include('inc.navbar')

    <!--Mask-->
    <div id="intro" class="view">

        <div class="mask rgba-black-strong">

            <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                <div class="row d-flex justify-content-center text-center">

                    <div class="col-md-10">

                        <!-- Heading -->
                        <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">mmLab</h2>

                        <!-- Divider -->
                        <hr class="hr-light">

                        <!-- Description -->
                        <h4 class="white-text my-4">Εργαστήριο Γραφικών, Πολυμέσων & Γεωγραφικών Συστημάτων</h4>
                        <button type="button" class="btn btn-outline-white collapsible text-center">Read more<i class="fa fa-book ml-2"></i></button>
                       <div class="content">
                         <div class="article-content"><p>Το <strong>Εργαστήριο Γραφικών, Πολυμέσων και Γεωγραφικών Συστημάτων</strong>
                           του Τμήματος Μηχανικών Ηλεκτρονικών Υπολογιστών και Πληροφορικής (ΤΜΗΥΠ) του Πανεπιστημίου Πατρών ιδρύθηκε το 1994. Το εκπαιδευτικό και ερευνητικό έργο
                           του εργαστηρίου εντάσσεται στα πλαίσια του τομέα Λογικού των Υπολογιστών του Τμήματος.
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


 <hr class="my-5">
        <!--Section: Best Features******************************************************************-->
                <section id="best-features" class="text-center">

                  <!-- Heading -->
                  <h2 class="mb-5">Best Features</h2>

                  <!--Grid row-->
                  <div class="row d-flex justify-content-center mb-4">

                      <!--Grid column-->
                      <div class="col-md-12">

                          <!-- Description -->




                      </div>
                      <!--Grid column-->

                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">

                      <!--Grid column-->
                      <div class="col-md-4 mb-1">
                          <i class="fa fa-rocket fa-4x orange-text"></i>
                          <h4 class="my-2 font-weight-bold">Ερευνητικά & Αναπτυξιακά Έργα</h4>
                          <p class="grey-text">Το ερευνητικό προσωπικό του εργαστηρίου έχει συμμετάσχει στην υλοποίηση ενός πολύ μεγάλου αριθμού ερευνητικών και αναπτυξιακών έργων που έχουν χρηματοδοτηθεί από εθνικούς και κοινοτικούς πόρους..</p>
                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-4 mb-1">
                          <i class="fa fa-book fa-4x red-text"></i>
                          <h4 class="my-4 font-weight-bold">Εκπαίδευση</h4>
                          <p class="grey-text">Το προσωπικό του Εργαστηρίου υποστηρίζει μία σειρά μαθημάτων του Προγράμματος Σπουδών του ΤΜΗΥΠ και του Μεταπτυχιακού Προγράμματος "Επιστήμη και Τεχνολογία των Υπολογιστών" του ΤΜΗΥΠ</p>
                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-4 mb-1">
                          <i class="fa fa-search  fa-4x indigo-text"></i>
                          <h4 class="my-4 font-weight-bold">Έρευνα</h4>
                          <p class="grey-text">Οι Ερευνητικές δραστηριότητες του Εργαστηρίου καλύπτουν ένα ευρύ φάσμα θεματικών περιοχών.</p>
                      </div>
                      <!--Grid column-->

                  </div>
                  <!--Grid row-->

                </section>
        <!--Section: Best Features******************************************************************-->


          <hr class="my-5">

        <!--Section: News******************************************************************-->
                <section id="LatestNews" class="text-center">

                  <!-- Heading -->
                  <h2 class="mb-5">Latest News</h2>

                  <!--Grid row-->
                  <div class="row d-flex justify-content-center mb-4">

                      <!--Grid column-->
                      <div class="col-md-12">

                          <!-- Description -->




                      </div>
                      <!--Grid column-->

                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">
                    <?php $count = 0; ?>
              		@foreach($posts as $post)
                  <?php if($count == 4) break; ?>


              			<div class="col-md-3">

                        <!-- Card image -->
                        <div class="view overlay">
                          <img class="card-img-top" src="{{ Voyager::image( $post->image ) }}" alt="Card image cap">
                          <a href="/post/{{ $post->slug }}">
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                          <!-- Title -->
                          <h4 class="card-title">{{ $post->title }}</h4>
                          <!-- Text -->
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <!-- Button -->
                          <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>

                        </div>
              			</div>
                    <?php $count++; ?>
              		@endforeach
              		</div>
                  <!--Grid row-->

                </section>
        <!--Section: News******************************************************************-->

          <hr class="my-5">


<!--Section: Gallery**********************************************************************-->
<section id="gallery">

    <!-- Heading -->
    <h2 class="mb-5 font-weight-bold text-center">Gallery heading</h2>

    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Carousel Wrapper-->
          <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-1z" data-slide-to="1"></li>
              <li data-target="#carousel-example-1z" data-slide-to="2"></li>
              <li data-target="#carousel-example-1z" data-slide-to="3"></li>
              <li data-target="#carousel-example-1z" data-slide-to="4"></li>
              <li data-target="#carousel-example-1z" data-slide-to="5"></li>

            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
              <!--First slide-->
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://mmlab.ceid.upatras.gr/images/stories/highslide/slide1.jpg" alt="First slide">
              </div>
              <!--/First slide-->

              <!--Second slide-->
              <div class="carousel-item">
                <img class="d-block w-100" src="https://mmlab.ceid.upatras.gr/images/stories/highslide/slide2.jpg" alt="Second slide">
              </div>
              <!--/Second slide-->

              <!--Third slide-->
              <div class="carousel-item">
                <img class="d-block w-100" src="https://mmlab.ceid.upatras.gr/images/stories/highslide/slide3.jpg" alt="Third slide">
              </div>
              <!--/Third slide-->

              <!--Fourth slide-->
              <div class="carousel-item">
                <img class="d-block w-100" src="https://mmlab.ceid.upatras.gr/images/stories/highslide/slide4.jpg" alt="Fourth slide">
              </div>
              <!--Fourth slide-->

              <!--Fifth slide-->
              <div class="carousel-item">
                <img class="d-block w-100" src="https://mmlab.ceid.upatras.gr/images/stories/highslide/slide5.jpg" alt="Fifth slide">
              </div>
              <!--/Fifth slide-->

              <!--6i slide-->
              <div class="carousel-item">
                <img class="d-block w-100" src="https://mmlab.ceid.upatras.gr/images/stories/highslide/slide6.jpg" alt="Sixth slide">
              </div>
              <!--/6i slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
          </div>
          <!--/.Carousel Wrapper-->

        </div>
        <!--Grid column-->
        <div class="col-md-6">

            <!--Excerpt-->
            <a href="" class="teal-text">
                <h6 class="pb-1"><i class="fa fa-heart"></i><strong> Some Art </strong></h6>
            </a>
            <h4 class="mb-3"><strong>This is title of the news</strong></h4>
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis
                debitis aut rerum.</p>

            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis
                debitis aut rerum.</p>
            <p>by <a><strong>Athanasios Tsakalidis</strong></a>, 26/08/2016</p>
            <a class="btn btn-primary btn-md">Read more</a>

        </div>
        <!--Grid column-->


    </div>
    <!--Grid row-->

</section>
<!--Section: Gallery**********************************************************************-->

<hr class="my-5">

<!--Section: Contact**********************************************************************-->
<section id="contact">

    <!-- Heading -->
    <h2 class="mb-5 font-weight-bold text-center">Contact us</h2>

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-lg-5 col-md-12">
        <!-- Form contact -->
        <form class="p-5 grey-text">
          <div class="md-form form-sm"> <i class="fa fa-user prefix"></i>
            <input type="text" id="form3" class="form-control form-control-sm">
            <label for="form3">Your name</label>
          </div>
          <div class="md-form form-sm"> <i class="fa fa-envelope prefix"></i>
            <input type="text" id="form2" class="form-control form-control-sm">
            <label for="form2">Your email</label>
          </div>
          <div class="md-form form-sm"> <i class="fa fa-tag prefix"></i>
            <input type="text" id="form32" class="form-control form-control-sm">
            <label for="form34">Subject</label>
          </div>
          <div class="md-form form-sm"> <i class="fa fa-pencil prefix"></i>
            <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="4"></textarea>
            <label for="form8">Your message</label>
          </div>
          <div class="text-center mt-4">
            <button class="btn btn-primary">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
          </div>
        </form>
        <!-- Form contact -->
      </div>
      <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7 col-md-12">

      <!--Grid row-->
      <div class="row text-center">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-3">

            <p><i class="fa fa-map fa-1x mr-2 grey-text"></i>Πανεπιστήμιο Πατρών, Ρίο , 26504</p>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-3">

            <p><i class="fa fa-building fa-1x mr-2 grey-text"></i>Mon - Fri, 8:00-22:00</p>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-3">

            <p><i class="fa fa-phone fa-1x mr-2 grey-text"></i>(+30 2610) 996960</p>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Google map-->
      <div id="map-container" class="z-depth-1-half map-container mb-5" style="height: 400px"></div>

    </div>
    <!--Grid column-->

    </div>
    <!--Grid row-->

</section>
<!--Section: Contact**********************************************************************-->

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
<script type="text/javascript" src="{{ asset('js/mdbjs/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/mdbjs/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/mdbjs/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/mdbjs/mdb.min.js') }}"></script>
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
