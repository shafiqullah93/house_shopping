<?php

include_once("(2)include/mysql_connect.php");
$camand="select * from  ragisterform inner join home_address on ragisterform.ID=home_address.H_ID where Style_home1='for sale'";
$dataset=mysqli_query($connect,$camand);
$row=mysqli_fetch_assoc($dataset);
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
  include("(2)include/SRG_header.php");
  ?>

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">لیست خانه های فروشی</h1>
            <span class="color-text-a">بهترین خانه های فروشی</span>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
	  <?php  do{?>
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="(1)assets/orginal/img/property-1.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#"><?php echo $row["Style_home1"]; ?>
                      <br /> <?php echo $row["_Date"]; ?></a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | $ 12.000</span>
                  </div>
                  <a href="property-single.html" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                     <li>
                      <h4 class="card-info-title"align="center">مساحت خانه</h4>
                      <span><?php echo $row["home_size"];?>m
                        <sup>2</sup>
                      </span>
                    </li>
					<li>
                      <h4 class="card-info-title" align="center">ولایت</h4>
                      <span><?php echo $row["province_Address"];?></span>
                    </li>
                    <li>
                    <li>
                      <h4 class="card-info-title"align="center">تعداد اطاق</h4>
                      <span><?php echo $row["Home_Amont"];?></span>
                    </li>
                    <li>
                      <h4 class="card-info-title"align="center">دهلیز</h4>
                      <span><?php echo $row["Vestibule_Amont"];?></span>
                    </li>
                    <li>
                      <h4 class="card-info-title"align="center">حمام</h4>
                      <span><?php echo $row["Bathroom_Amont"];?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

	  <?php }while($row=mysqli_fetch_assoc($dataset)); ?>
      </div>
    </div>
  </section>
  <!--/ Property Grid End /-->

 <?php
  include("(2)include/SRG_fooder.php");
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
