<?php
session_start();
include "db.php";
if (!isset($_SESSION['id']))
{
header("location:index.php");
}




?>
  <!DOCTYPE html>
  <html lang="en" class="no-js">
  <!-- Head -->

  <head>
    <title>GYM HUB</title>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Gym website, Bootstrap Theme, Freebies, UI Kit, MIT license">
    <meta name="description" content="Bootstrap 4 Template by WebThemez">
    <meta name="author" content="webthemez.com">
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!--icons for fotor libirary-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap Styles -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Vendor Styles -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick-carousel/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="assets/css/hovereffects.css">
    <!-- Theme Styles -->
    <link href="assets/css/scrolling-nav.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css"> </head>
  <!-- End Head -->

  <body>
    <!-- Header -->
    <header id="top">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top" id="mainNav">
        <div class="container"> <a class="navbar-brand js-scroll-trigger" href="index.php">GYM HUB </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="ti-menu text-primary"></span> </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="#top">Top</a> </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <section class="wt-section hero-large hero mt-md-5">
        <div class="hero-img bg-overlay" data-overlay="0" style="background-image: url(images/background.jpeg);"></div>
        <div class="container">
          <div class="row align-items-center text-white">
            <div class=" col-md-6">
              <!-- heading -->
              <h1 class="text-uppercase mb-3 display-3 font-weight-bolder" data-aos="fade-right">
              Gym Hub
            </h1>
              <div>
                <form action="search.php" method="get" id="form1">
                  <select name="loc" id="loc">
                    <option selected="selected"> choose your location </option>
                    <?php
$sql = "select * from gyms group by region ";
$query = mysqli_query($db, $sql);
while ($result = mysqli_fetch_array($query))
{

    echo "<option value=" . $result["region"] . ">" . $result["region"] . "</option>";
}

?>
                  </select>
                  <input type="submit" name="submit" value="SEARCH" class="btn btn-primary"> </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>
    <!-- End Header -->
    <main role="main">
      <section class="wt-section bg-light" id="services">
        <br>
        <div class="container">
          <div class="row justify-content-center">
            <?php
if (isset(($_GET['submit'])))

{

    $loc = $_GET['loc'];
    $sql = "select * from gyms where region = '$loc' order by RATE desc  ";
    $query = mysqli_query($db, $sql);
    while ($result = mysqli_fetch_array($query))
    {
        //echo $result["LOC"]."<br>";
        //echo $result["NAME"]."<br>";
        //echo $result["RATE"]."<br>";
        //echo $result["LINK"]."<br>";
        $img = $result["image link"];
        $id = $result["id"];
        //echo $result["region"]."<br>";
        //echo "<br><br><br>";
        //echo"<img src='$img'> ";
        //echo"<a href='gym.php?id=$id'>checkthegymoutput </a>";
        echo " <div class='col-md-4'>
            <div class='card mb-md-0 mb-3 border-1 rounded-md overflow-hidden b-hover' data-aos='fade-up'  data-aos-easing='linear' data-aos-delay='300'>
                   <a href='third%20page/index.php?id=" . $id . "'><img class='card-img-top' src='" . $img . "' alt='card image'></a>
                <div class='card-body py-4'>
                    <strong href='#' class='mb-2 d-block'>" . $result['NAME'] . "</strong>
                    <h5 class='mb-4 text-primary'>RATE: ".$result["RATE"] . "</h5>
                    <div class='mb-4'>
                        <p>" . $result['LOC'] . "</p>
                    </div>
                </div> 
            </div>
        </div> 
     ";

    }
} ?>
              <!-- <div class="col-md-4">
            <div class="card mb-md-0 mb-3 border-1 rounded-md overflow-hidden b-hover" data-aos="fade-up"  data-aos-easing="linear" data-aos-delay="300">
                <a href="#"><img class="card-img-top" src="assets/img/services/1.jpg" alt="card image"></a>
                <div class="card-body py-4">
                    <strong href="#" class="mb-2 d-block">Aerobic</strong>
                    <h5 class="mb-4 text-primary">World class coaching</h5>
                    <div class="mb-4">
                        <p>we can help you to find the best areobic class for you and most importantly the neasrest</p>
                    </div>
                </div> 
            </div>
        </div> 
        <div class="col-md-4">
            <div class="card mb-md-0 mb-3 border-1 rounded-md overflow-hidden b-hover" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="500">
                <a href="#"><img class="card-img-top" src="assets/img/services/2.jpg" alt="card image"></a>
                <div class="card-body py-4">
                    <strong class="mb-2 d-block">Body Building</strong>
                    <h5 class="mb-4 text-primary">Top rated gyms in town</h5>
                    <div class="mb-4">
                        <p>we can help you to find the best gym for your body building either being a professional or an amature</p>
                    </div>
                </div> 
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-md-0 mb-3 border-1 rounded-md overflow-hidden b-hover" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="800">
                <a href="#"><img class="card-img-top" src="assets/img/services/3.jpg" alt="card image"></a>
                <div class="card-body py-4">
                    <strong href="#" class="mb-2 d-block">Yoga</strong>
                    <h5 class="mb-4 text-primary">S-class yoga tutors</h5>
                    <div class="mb-4">
                        <p>despite being a few but we cover all the places in town that provides one of the best yoga teachers</p>
                    </div>
                </div> 
            </div>
        </div> 
    </div>
    <br>
    <div class="row justify-content-center">
      <div class="col-md-4">
          <div class="card mb-md-0 mb-3 border-1 rounded-md overflow-hidden b-hover" data-aos="fade-up"  data-aos-easing="linear" data-aos-delay="300">
              <a href="#"><img class="card-img-top" src="assets/img/services/1.jpg" alt="card image"></a>
              <div class="card-body py-4">
                  <strong href="#" class="mb-2 d-block">Aerobic</strong>
                  <h5 class="mb-4 text-primary">World class coaching</h5>
                  <div class="mb-4">
                      <p>we can help you to find the best areobic class for you and most importantly the neasrest</p>
                  </div>
              </div> 
          </div>
      </div>
      <div class="col-md-4">
          <div class="card mb-md-0 mb-3 border-1 rounded-md overflow-hidden b-hover" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="500">
              <a href="#"><img class="card-img-top" src="assets/img/services/2.jpg" alt="card image"></a>
              <div class="card-body py-4">
                  <strong class="mb-2 d-block">Body Building</strong>
                  <h5 class="mb-4 text-primary">Top rated gyms in town</h5>
                  <div class="mb-4">
                      <p>we can help you to find the best gym for your body building either being a professional or an amature</p>
                  </div>
              </div> 
          </div>
      </div>
      <div class="col-md-4">
          <div class="card mb-md-0 mb-3 border-1 rounded-md overflow-hidden b-hover" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="800">
              <a href="#"><img class="card-img-top" src="assets/img/services/3.jpg" alt="card image"></a>
              <div class="card-body py-4">
                  <strong href="#" class="mb-2 d-block">Yoga</strong>
                  <h5 class="mb-4 text-primary">S-class yoga tutors</h5>
                  <div class="mb-4">
                      <p>despite being a few but we cover all the places in town that provides one of the best yoga teachers</p>
                  </div>
              </div> 
          </div>
      </div> --></div>
        </div>
      </section>
      <!-- End Clients Section -->
    </main>
    <!-- Footer -->
    <!-- <footer class="bg-dark py-5">
      <div class="container">
        <div class="row">
            <div>
              <p style="color: antiquewhite;">for contact please visit our Social Media Pages .</p>
              <a href="https://www.facebook.com/shawky.walid57/" class="fa fa-facebook">F</a>
              <a href="https://twitter.com/ShawkiWalid99" class="fa fa-twitter">T</a>
            </div> 
        </div>
      </div>
    </footer> -->
    <!-- End Footer -->
    <!-- JS Script Files -->
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/vendors/jquery.migrate.min.js"></script>
    <script src="assets/vendors/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/jquery-easing/jquery.easing.min.js"></script>
    <!-- Components Vendor  -->
    <script src="assets/vendors/slick-carousel/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/counters/waypoint.min.js"></script>
    <script src="assets/vendors/counters/counterup.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <!--Plugin Initialize-->
    <script src="assets/js/global.js"></script>
    <!-- Theme Components and Settings -->
    <script src="assets/vendors/carousel.js"></script>
    <script src="assets/vendors/counters.js"></script>
    <script src="js/extention/choices.js"></script>
    <!-- END JAVASCRIPTS -->
  </body>
  <!-- End Body -->

  </html>