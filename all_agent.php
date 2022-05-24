<!--$connect-->
<?php
include_once("(2)include/mysql_connect.php");
$cammand="select * from users";
$dataset=mysqli_query($connect,$cammand);
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

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">ویب سایت رهنمای<span class="color-b"> معاملات</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
		
		  <li class="nav-item">
            <a class="nav-link" href="index.php">صفحه اصلی</a>
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

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single"> نماینده های سایت رهنمای معاملات
			</h1>
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
	  
	  <?php $a=1; do{ ?>
	  <div class="col-md-6 col-lg-4">
               <img src="(1)assets/agent_photo/<?php echo $row["photo"]; ?>" alt="" class="agent-avatar img-fluid">
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="property-agent">
                <h4 class="title-agent"><?php echo $row["Name"];    ?></h4>
                <p class="color-text-a">
                  Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                  dui. Quisque velit nisi,
                  pretium ut lacinia in, elementum id enim.
                </p>
                <ul class="list-unstyled">
                  <li class="d-flex justify-content-between">
                    <strong>Mobile_Number:</strong>
                    <span class="color-text-a"><?php echo $row["phone"];  ?></span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Email:</strong>
                    <span class="color-text-a"><?php echo $row["Email"];    ?></span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Whatapp_Number:</strong>
                    <span class="color-text-a"> <?php echo $row["phone"];    ?></span>
                  </li>
				  <li class="d-flex justify-content-between">
                    <strong>Instagram:</strong>
                    <span class="color-text-a"><?php echo $row["Instgram"];    ?></span>
                  </li>
				  <li class="d-flex justify-content-between">
                    <strong><a href="<?php echo $a.".php";  ?>">learn More</a></strong> </li>
                 <?php $a++; ?>
				</ul>
                <div class="socials-a">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <div class="property-contact">
                <form class="form-a">
                  <div class="row">
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-lg form-control-a" id="inputName"
                          placeholder="Name *" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1"
                          placeholder="Email *" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <textarea id="textMessage" class="form-control" placeholder="Comment *" name="message" cols="45"
                          rows="8" required></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-a">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
		<?php }while($row=mysqli_fetch_assoc($dataset));?>
		
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
