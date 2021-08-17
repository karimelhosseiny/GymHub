<?php
include "db.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
  <!-- Head -->
  <head>
    <title>GYM HUB</title>

    <!-- Meta -->
    <meta charset="utf-8"/>
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
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  </head>
  <!-- End Head -->

  <body>
    <!-- Header -->
    <header id="top">
      <!-- Navbar --> 
	  <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top" id="mainNav">
		<div class="container">
		  <a class="navbar-brand js-scroll-trigger" href="#page-top">GYM HUB </a>  
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="ti-menu text-primary"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
        <?php
if (!isset($_SESSION['id']))
{
  echo "<li class='nav-item'>
        <a class='nav-link js-scroll-trigger' href='./sign up/index.php'>Sign-Up</a>
        </li>";
  echo "<li class='nav-item'>
        <a class='nav-link js-scroll-trigger' href='./sign in/index.php'>Sign-In</a>
        </li>";

}
else{
  $name=$_SESSION['name'];
  echo "<li class='nav-item'>
        <a class='nav-link js-scroll-trigger' href='./logout.php'>Log Out</a>
        </li>";

   echo "<li class='nav-item'>
         <a class='nav-link js-scroll-trigger' href=''disabled='disabled' style='color:white; ' >WELCOME ".ucwords($name)."</a>
        
        </li>";
}
          ?>
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#top">Home</a>
			  </li>
        <?php
             if (isset($_SESSION['id']))
          {
            echo "<li class='nav-item'>
        <a class='nav-link js-scroll-trigger' href='search.php'>Search</a>
        </li>";
          }
          ?>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#services">Services</a>
			  </li>
			   <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#about">About</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#team">Team</a>
			  </li>
			</ul>
		  </div>
		</div>
	  </nav>
      <!-- End Navbar --> 
		<section class="wt-section hero-large hero mt-md-5">
			<div class="hero-img bg-overlay" data-overlay="0" style="background-image: url(assets/img/intro/img5.jpg);"></div>
			<div class="container">
				<div class="row align-items-center text-white">
					<div class=" col-md-6">
						<!-- heading -->
						<h1 class="text-uppercase mb-3 display-3 font-weight-bolder" data-aos="fade-right">
							Gym Hub
            </h1>
            <div>
                  
                  
             

            </div>
					</div>
				</div>
			</div>
		</section>

    </header>
    <!-- End Header -->
<br>
<br>
<br>
    <main role="main">

<section class="wt-section bg-light" id="services">
    <div class="container"> 
		<div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
          <div class="col-md-8 text-center w-md-50 mx-auto mb-0 ">
           
            <h2 class="mb-md-2">Our Services</h2>
            <p class="lead text-muted">Our Job is to give the head start when you decide to change your life , we help you find the best, closest and most perfect option for you.</p>
          </div>
		</div>
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
            </div> 
        </div>
    </div>
</section>

  <section class="wt-section pb-0" id="about">
    <div class="container">
        <div class="row justify-content-between align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="200">
		  <div class="col-md-5">
                <img src="assets/img/about/1.jpg" width="90%" class="rounded-md" alt="">
            </div>
            <div class="col-md-7"> 
                <h2 class="mb-4 ">About Us</h2>
                <p class="text-muted">Our vision is so simple yet so important , a lot of people decide to go to the gym but they never know where and even some of us go to any gym and then they regret it , thats why we thought of this idea to help you choose the gym while sitting in your chair .</p>
            </div>
          
        </div>
    </div>
</section> 

  <section class="wt-section">
    <div class="container">
        <div class="row justify-content-between align-items-center" data-aos="fade-left" data-aos-easing="linear" data-aos-delay="400">
            <div class="col-md-7"> 
                <h2 class="mb-4">Professional Team</h2>
                <p class="text-muted">our team have covered most if not all of the gyms in town , we searched for all the gyms we could find and asked peopleabout the best while haveing a big database for all the gyms , all of that so you can be sure when you choose your place for the training</p>
            </div>
          
		  <div class="col-md-5">
               <img src="assets/img/about/2.jpg" width="90%" class="rounded-md" alt="">
            </div>
        </div>
    </div>
</section> 
<section class="bg-light wt-section" id="team">
        <div class="container"> 
		<div class="row justify-content-md-center text-center mb-lg-5 mb-4 pb-lg-5">
            <div class="col-md-12">
                <h2 class="h1">Our Team</h2>
                <p>The heors behind this glory</p>
            </div>
        </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-5"> 
              <figure data-aos="fade-up" data-aos-easing="linear" data-aos-delay="100">
                <img class="w-100 rounded-top" src="assets/img/team/img1.jpg" alt="Image Description"> 
                <div class="wt-box-shadow-sm bg-white text-center rounded p-4">
                  <div class="mb-3">
                    <h5 class="mb-1">Shawki Walid</h5>
                    <small class="d-block font-style-normal text-uppercase text-primary wt-letter-spacing-xs">Web Developer</small>
                  </div>
                </div> 
              </figure> 
            </div>

            <div class="col-lg-3 col-sm-6 mb-5"> 
              <figure data-aos="fade-up" data-aos-easing="linear" data-aos-delay="200">
                <img class="w-100 rounded-top" src="assets/img/team/img2.jfif" alt="Image Description"> 
                <div class="wt-box-shadow-sm bg-white text-center rounded p-4">
                  <div class="mb-3">
                    <h5 class="mb-1">Mahmoud Reda</h5>
                    <small class="d-block font-style-normal text-uppercase text-primary wt-letter-spacing-xs">Web Developer</small>
                  </div>
                </div> 
              </figure> 
            </div>

            <div class="col-lg-3 col-sm-6 mb-5"> 
              <figure data-aos="fade-up" data-aos-easing="linear" data-aos-delay="300">
                <img class="w-100 rounded-top" src="assets/img/team/img3.jfif" alt="Image Description">
 
                <div class="wt-box-shadow-sm bg-white text-center rounded p-4">
                  <div class="mb-3">
                    <h5 class="mb-1">Arsanios Karim</h5>
                    <small class="d-block font-style-normal text-uppercase text-primary wt-letter-spacing-xs">Web Developer</small>
                  </div>
                </div> 
              </figure> 
            </div>

            <div class="col-lg-3 col-sm-6 mb-5"> 
              <figure data-aos="fade-up" data-aos-easing="linear" data-aos-delay="400">
                <img class="w-100 rounded-top" src="assets/img/team/img4.jfif" alt="Image Description"> 
                <div class="wt-box-shadow-sm bg-white text-center rounded p-4">
                  <div class="mb-3">
                    <h5 class="mb-1">Karim Elhosseiny</h5>
                    <small class="d-block font-style-normal text-uppercase text-primary wt-letter-spacing-xs">Web Developer</small>
                  </div>
                </div> 
              </figure> 
            </div>
          </div> 
        </div>
      </section>


<section class="wt-section">
        <div class="container">
		<div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
          <div class="col-md-8 text-center w-md-50 mx-auto mb-0 ">
            <h2 class="mb-md-2">Feedback</h2>
            <p>some feedback from famous athletes</p>
          </div>
		</div>
		 
          <div class="row">
            <div class="col-lg-6 mb-7 mb-lg-0 px-lg-5" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="200">
              <!-- Testimonial -->
              <blockquote class="wt-blockquote-v2 rounded mb-5">this website is a brilliant idea and im sure it will help a lot of people to start their carrer like me</blockquote>
              <div class="media wt-font-size-90">
                <img class="d-flex align-self-center rounded-circle wt-blockquote-v2__image wt-box-shadow-lg mx-3 mt-2" src="assets/img/ava/img2.jpg" alt="Image description">
                <div class="media-body align-self-center">
                  <strong class="d-block">Big ramy </strong>
                  <span class="wt-font-size-75 text-dark">Mr Olympia 2020 champion</span>
                </div>
              </div>
              <!-- End Testimonial -->
            </div>

            <div class="col-lg-6 px-lg-5" data-aos="fade-left" data-aos-easing="linear" data-aos-delay="400">
              <!-- Testimonial -->
              <blockquote class="wt-blockquote-v2 rounded mb-5">these guys are hardworkers i have never thoughtof this brillian ideas , its gonna change the way of finding gyms</blockquote>
              <div class="media wt-font-size-90">
                <img class="d-flex align-self-center rounded-circle wt-blockquote-v2__image wt-box-shadow-lg mx-3 mt-2" src="assets/img/ava/img3.jpg" alt="Image description">
                <div class="media-body align-self-center">
                  <strong class="d-block">Lazar anglov </strong>
                  <span class="wt-font-size-75 text-dark">professional athlete</span>
                </div>
              </div>
              <!-- End Testimonial -->
            </div>
          </div>
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
    </footer>
     --><!-- End Footer -->
  
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
	
    <!-- END JAVASCRIPTS -->
	
  </body>
  <!-- End Body -->
</html>