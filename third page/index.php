<?php
session_start();
include "../db.php";
if (isset(($_GET['id'])))
{
    $id = $_GET["id"];
    $sql = "select * from gyms where id = '$id'";
    $query = mysqli_query($db, $sql);
    print_r($query);
    while ($result = mysqli_fetch_array($query))
    {
        //echo $result["LOC"]."<br>";
        //echo $result["NAME"]."<br>";
        //echo $result["RATE"]."<br>";
        //echo $result["LINK"]."<br>";
        $img ="../".$result["image link"];

        //echo $result["region"]."<br>";
        //echo "<br><br><br>";
        //echo"<img src='$img'> ";
        $LOC=$result["LOC"];
        $RATE=$result["RATE"];    
        $LINK=$result["LINK"];
?>  

<!DOCTYPE html>
<html lang="en" class="no-js">
  <!-- Head -->
  <head>
    <title>Gum Hub</title>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Gym website, Bootstrap Theme, Freebies, UI Kit, MIT license">
    <meta name="description" content="Bootstrap 4 Template by WebThemez">
    <meta name="author" content="webthemez.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 

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
		  <a class="navbar-brand js-scroll-trigger" href="../index.php">Gym Hub</a>  
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="ti-menu text-primary"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#about">About</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#portfolio">Photos</a>
			  </li>
			</ul>
		  </div>
		</div>
	  </nav>
      <!-- End Navbar --> 
		<section class="wt-section hero-large hero mt-md-5">
			<div class="hero-img bg-overlay" data-overlay="0" style="background-image: url(assets/img/intro/img6.jpg);"></div>
			<div class="container">
				<div class="row align-items-center text-white">
					<div class=" col-md-6">
           <?php echo"<img src='$img' style='width: 200px; height=200px' > ";?>
                      
           			<h1 class="text-uppercase mb-3 display-3 font-weight-bolder" data-aos="fade-right" style="align-self: center;">
							<?php echo $result["NAME"]  ?>
						</h1>
					</div>
				</div>
			</div>
		</section>

    </header>
    <!-- End Header -->

    <main role="main">
  <section class="wt-section pb-0" id="about">
    <div class="container">
        <div class="row justify-content-between align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="200">
		  <div class="col-md-5">
                           <?php echo"<img src='$img' style='width: 90%' class='rounded-md' > ";?>

            </div>
            <div class="col-md-7"> 
                <h2 class="mb-4 ">About Us</h2>
                <p class="text-muted"> <br> Rate: <?php echo $RATE; ?> <br> Address: <?php echo $LOC; ?> <br> <a href='<?php  
                echo $LINK;?>'>contact us </a></p>
            </div>
          
        </div>
    </div>
</section> 

  <section class="wt-section">
    
	  
	   

<section class="wt-section" id="portfolio"> 
 <div class="container">
        <div class="row justify-content-md-center text-center pb-lg-5">
            <div class="col-md-12">
                <h2 class="h1">PHOTOS</h2>
                <p>HERE ARE SOME PHOTOS OF THE GYM</p>
            </div>
        </div>
         <div class='portfolio-item row' data-aos='fade-up' data-aos-easing='linear' data-aos-delay='100'>
         
         <?php $sql2 = "select * from photos where gym_id = $id";
        $query2 = mysqli_query($db, $sql2);
        while ($result2 = mysqli_fetch_array($query2))
        {
            $img2 = "../".$result2['img_link'];
            echo "   <div class='item gts col-lg-3 col-md-4 col-6 col-sm'> 
				<div class='hovereffect rounded-md overflow-hidden'>
					<img class='img-fluid img-responsive' src='$img2' alt=''>
						<div class='overlay'> 
							<p>
								<a href='$img2' class='fancylight popup-btn info' data-fancybox-group='light'>
								<i>view</i></a>
							</p>
						</div>
					</div> 
			    
            </div> ";
        }
?></div>
          
			    <!-- <div class="item selfie col-lg-3 col-md-4 col-6 col-sm"> 
				<div class="hovereffect rounded-md overflow-hidden">
					<img class="img-fluid img-responsive" src="assets/img/intro/2.jpg" alt="">
						<div class="overlay"> 
							<p>
								<a href="assets/img/intro/2.jpg" class="fancylight popup-btn info" data-fancybox-group="light">
								<i>view</i></a>
							</p>
						</div>
					</div> 
			    
            </div> 
				    <div class="item lap col-lg-3 col-md-4 col-6 col-sm"> 
				<div class="hovereffect rounded-md overflow-hidden">
					<img class="img-fluid img-responsive" src="assets/img/intro/3.jpg" alt="">
						<div class="overlay"> 
							<p>
								<a href="assets/img/intro/3.jpg" class="fancylight popup-btn info" data-fancybox-group="light">
								<i>view</i></a>
							</p>
						</div>
					</div> 
			    
            </div>
				    <div class="item selfie col-lg-3 col-md-4 col-6 col-sm"> 
				<div class="hovereffect rounded-md overflow-hidden">
					<img class="img-fluid img-responsive" src="assets/img/intro/4.jpg" alt="">
						<div class="overlay"> 
							<p>
								<a href="assets/img/intro/4.jpg" class="fancylight popup-btn info" data-fancybox-group="light">
								<i>view</i></a>
							</p>
						</div>
					</div> 
			    
            </div> 
				    <div class="item lap col-lg-3 col-md-4 col-6 col-sm"> 
				<div class="hovereffect rounded-md overflow-hidden">
					<img class="img-fluid img-responsive" src="assets/img/intro/5.jpg" alt="">
						<div class="overlay"> 
							<p>
								<a href="assets/img/intro/5.jpg" class="fancylight popup-btn info" data-fancybox-group="light">
								<i>view</i></a>
							</p>
						</div>
					</div> 
			    
            </div> 
				    <div class="item gts col-lg-3 col-md-4 col-6 col-sm"> 
				<div class="hovereffect rounded-md overflow-hidden">
					<img class="img-fluid img-responsive" src="assets/img/intro/6.jpg" alt="">
						<div class="overlay"> 
							<p>
								<a href="assets/img/intro/6.jpg" class="fancylight popup-btn info" data-fancybox-group="light">
								<i>view</i></a>
							</p>
						</div>
					</div> 
            </div> -->   
         </div>
      </div>
</section>	
      <!-- End Clients Section -->
    </main>
    <?php

    }
}

?>
  
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
