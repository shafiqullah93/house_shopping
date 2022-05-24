<!--$connect-->
<?php
include_once("(2)include/mysql_connect.php");

/*  this query is for agents*/
$camand="select ID,Name,phone,Email,photo from users order by ID asc";
$dataset=mysqli_query($connect,$camand);
$row=mysqli_fetch_assoc($dataset);
/*  this query is for home select*/
$camand1="select * from  ragisterform inner join home_address on ragisterform.ID=home_address.H_ID order by ID  asc limit 9";
$dataset1=mysqli_query($connect,$camand1);
$row1=mysqli_fetch_assoc($dataset1);
/*  this query is for select top home*/
$camand2="select * from  ragisterform inner join home_address on ragisterform.ID=home_address.H_ID order by ID  desc limit 6";
$dataset2=mysqli_query($connect,$camand2);
$row2=mysqli_fetch_assoc($dataset2);
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

  <?php 
  include("(2)include/index_header.php");
  ?>

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
                    <p class="intro-title-top">Responsible
                      <br> SHAFIQULLAH "walizada"</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">شما</span> میتوانید
                      <br> خانه را خریداری کنید</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">خوش آمدید به سایت ما</span></a>
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
                     <p class="intro-title-top">Responsible
                      <br> Baz mohammad "Kakar"</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">شما</span> میتوانید
                      <br> خانه را به فروش برسانید</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">خوش آمدید به سایت ما</span></a>
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
                    <p class="intro-title-top">Responsible
                      <br> Sang mohammad "mohammadi"</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">شما</span> میتوانید
                      <br> خانه را کرایه بگیرید</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">خوش آمدید به سایت ما</span></a>
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

  <?php 
  include("(2)include/content.php");
  include("(2)include/index_footer.php");
  ?>
  
  
  
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
