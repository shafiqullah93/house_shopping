<?php
session_start();
if(!isset($_SESSION["login"])){
	header("location:loginform.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EstateAgency Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="(1)assets/orginal/img/favicon.png" rel="icon">
  <link href="(1)assets/orginal/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="(1)assets/orginal/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="(1)assets/orginal/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="(1)assets/orginal/lib/animate/animate.min.css" rel="stylesheet">
  <link href="(1)assets/orginal/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="(1)assets/orginal/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="(1)assets/orginal/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="#">رهنمای<span class="color-b">معاملات</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
	  
	  
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="Ragister_form.php">راجسترکردن خانه</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create_user.php">ایجاد کردن کاربر</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">لیست تمام خانه ها</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">لیست تمام کاربر ها</a>
          </li>
        </ul>
      </div>
	  
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Admin
                      <br> Walizada</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b"><?php echo date("Y/m/d"); ?></span> Page
                      <br> Management</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Welcome</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Admin
                      <br> Walizada</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b"><?php echo date("Y/m/d"); ?></span> Page
                      <br> Management</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Welcome</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-3.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                     <p class="intro-title-top">Admin
                      <br> Walizada</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b"><?php echo date("Y/m/d"); ?></span> Page
                      <br> Management</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Welcome</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Carousel end /-->

  
  
  
  
  <!--/ footer Star /-->
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         
          
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">EstateAgency</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="(1)assets/orginal/lib/jquery/jquery.min.js"></script>
  <script src="(1)assets/orginal/lib/jquery/jquery-migrate.min.js"></script>
  <script src="(1)assets/orginal/lib/popper/popper.min.js"></script>
  <script src="(1)assets/orginal/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="(1)assets/orginal/lib/easing/easing.min.js"></script>
  <script src="(1)assets/orginal/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="(1)assets/orginal/lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="(1)assets/orginal/js/main.js"></script>

</body>
</html>
