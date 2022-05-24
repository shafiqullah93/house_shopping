<!--$connect-->
<?php
include_once("(2)include/mysql_connect.php");
$cammand="select * from users where phone='0783425146'";
$dataset=mysqli_query($connect,$cammand);
$row=mysqli_fetch_assoc($dataset);
//for sale
$camand1="select * from  ragisterform inner join home_address on ragisterform.ID=home_address.H_ID where Style_home1='for sale'and province_Address='mazar-e-sharif'";
$dataset1=mysqli_query($connect,$camand1);
$row1=mysqli_fetch_assoc($dataset1);
//for rent
$camand2="select * from  ragisterform inner join home_address on ragisterform.ID=home_address.H_ID where Style_home1='for rante'and province_Address='mazar-e-sharif'";
$dataset2=mysqli_query($connect,$camand2);
$row2=mysqli_fetch_assoc($dataset2);
//for grawy
$camand3="select * from  ragisterform inner join home_address on ragisterform.ID=home_address.H_ID where Style_home1='Gravy'and province_Address='mazar-e-sharif'";
$dataset3=mysqli_query($connect,$camand3);
$row3=mysqli_fetch_assoc($dataset3);
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
  include("(2)include/_1234_header.php");
  ?>

  <!--/ Intro Single star /-->
  
  
  <section class="intro-single">
    <div class="container">
	
	
	
	
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">خوش آمدید به صفحه
			<br>
			<?php echo $row["Name"];    ?>
			</h1>
			<span>معلومات در باره خانه های مزار شریف</span>
          </div>
        </div>
      
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Agent Single Star /-->
  <section class="agent-single">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-6">
              <div class="agent-avatar-box">
                <img src="(1)assets/agent_photo/<?php echo $row["photo"]; ?>" alt="" class="agent-avatar img-fluid">
              </div>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="agent-info-box">
                <div class="agent-title">
                  <div class="title-box-d">
                    <h3 class="title-d"><?php echo $row["Name"];    ?>
                      <br><?php echo $row["LastName"];    ?></h3>
                  </div>
                </div>
                <div class="agent-content mb-3">
                  <p class="content-d color-text-a">
                    Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
                    Vivamus suscipit tortor
                    eget felis porttitor volutpat. Vivamus suscipit tortor eget felis porttitor volutpat.
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Mobile_Number: </strong>
                      <span class="color-text-a"><?php echo $row["phone"];  ?></span>
                    </p>
                    <p>
                      <strong>Email: </strong>
                      <span class="color-text-a"><?php echo $row["Email"];    ?></span>
                    </p>
                    <p>
                      <strong>Whatapp_Number: </strong>
                      <span class="color-text-a"> <?php echo $row["phone"];    ?></span>
                    </p>
                    <p>
                      <strong>Instagram: </strong>
                      <span class="color-text-a"><?php echo $row["Instgram"];    ?></span>
                    </p>
                  </div>
                </div>
                <div class="socials-footer">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="title-box-d">
           <a name="part1"> <h3 class="title-d">خانه برای فروش(6)</h3></a>
          </div>
        </div>
        <div class="row property-grid grid">
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
                    <a href="#"><?php echo $row1["Style_home1"]; ?>
                      <br /> <?php echo $row1["_Date"]; ?></a>
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
                      <span><?php echo $row1["home_size"];?>m
                        <sup>2</sup>
                      </span>
                    </li>
					<li>
                      <h4 class="card-info-title" align="center">ولایت</h4>
                      <span><?php echo $row1["province_Address"];?></span>
                    </li>
                    <li>
                    <li>
                      <h4 class="card-info-title"align="center">تعداد اطاق</h4>
                      <span><?php echo $row1["Home_Amont"];?></span>
                    </li>
                    <li>
                      <h4 class="card-info-title"align="center">دهلیز</h4>
                      <span><?php echo $row1["Vestibule_Amont"];?></span>
                    </li>
                    <li>
                      <h4 class="card-info-title"align="center">حمام</h4>
                      <span><?php echo $row1["Bathroom_Amont"];?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

	  <?php }while($row1=mysqli_fetch_assoc($dataset1)); ?>
        </div>
		<!-- start sale-->
		 <div class="col-md-12 section-t8">
          <div class="title-box-d">
           <a name="part2"> <h3 class="title-d">خانه برای کرایه(6)</h3></a>
          </div>
        </div>
		
        <div class="row property-grid grid">
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
                    <a href="#"><?php echo $row2["Style_home1"]; ?>
                      <br /> <?php echo $row2["_Date"]; ?></a>
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
                      <span><?php echo $row2["home_size"];?>m
                        <sup>2</sup>
                      </span>
                    </li>
					<li>
                      <h4 class="card-info-title" align="center">ولایت</h4>
                      <span><?php echo $row2["province_Address"];?></span>
                    </li>
                    <li>
                    <li>
                      <h4 class="card-info-title"align="center">تعداد اطاق</h4>
                      <span><?php echo $row2["Home_Amont"];?></span>
                    </li>
                    <li>
                      <h4 class="card-info-title"align="center">دهلیز</h4>
                      <span><?php echo $row2["Vestibule_Amont"];?></span>
                    </li>
                    <li>
                      <h4 class="card-info-title"align="center">حمام</h4>
                      <span><?php echo $row2["Bathroom_Amont"];?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

	  <?php }while($row2=mysqli_fetch_assoc($dataset2)); ?>
        </div>
		
		<!-- end sale-->
		<!-- start rent-->
		  <br><br><br><br><br><br>
		 <div class="col-md-12 section-t8">
          <div class="title-box-d">
		
          <a name="part3"><h3 class="title-d">خانه گروی(6)</h3></a>
          </div>
        </div>
		
        <div class="row property-grid grid">
		  <?php  while($row3=mysqli_fetch_assoc($dataset3)){?>
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="(1)assets/orginal/img/property-1.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#"><?php echo $row3["Style_home1"]; ?>
                      <br /> <?php echo $row3["_Date"]; ?></a>
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
                      <span><?php echo $row3["home_size"];?>m
                        <sup>2</sup>
                      </span>
                    </li>
					<li>
                      <h4 class="card-info-title" align="center">ولایت</h4>
                      <span><?php echo $row3["province_Address"];?></span>
                    </li>
                    <li>
                    <li>
                      <h4 class="card-info-title"align="center">تعداد اطاق</h4>
                      <span><?php echo $row3["Home_Amont"];?></span>
                    </li>
                    <li>
                      <h4 class="card-info-title"align="center">دهلیز</h4>
                      <span><?php echo $row3["Vestibule_Amont"];?></span>
                    </li>
                    <li>
                      <h4 class="card-info-title"align="center">حمام</h4>
                      <span><?php echo $row3["Bathroom_Amont"];?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

	  <?php } ?>
        </div>
		<!-- end rent-->
		
      </div>
    </div>
  </section>
  <!--/ Agent Single End /-->

 

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
