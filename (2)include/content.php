  
  <!--/ Services Star /-->
  <section class="section-services section-t8" dir="rtl">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">ارایه خدمات از قبیل</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row" >
       <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-home"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">خرید خانه</h2>
              </div>
            </div>
            <div class="card-body-c">
              <h1 class="content-c">
                بهترین خانه ها را با قیمت مناسب در موقعیت ها مناسب و امن از طریق ویب سایت ما بدست بیاورید
              </h1>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-usd"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">فروش خانه</h2>
              </div>
            </div>
            <div class="card-body-c">
              <h1 class="content-c">
               شما میتوانید خانه خود را از طریق این ویب سایت با ارتباط برقرار کردن با ما به فروش برسانید
              </h1>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-gamepad"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">خانه کرایه</h2>
              </div>
            </div>
            <div class="card-body-c">
              <h1 dir="rtl" class="content-c">
              شما میتوانید از طریق این سایت خانه های مناسب را به کرایه بگیرید
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Services End /-->

  <!--/ Property Star /-->
  <section class="section-property section-t8">
    <div class="container">
	
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">خانه ها یا منازل</h2>
            </div>
            <div class="title-link">
              <a href="all_home.php">بیشتر بدانید
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
	  <!--  -->
	 
	<div class="row">	
		<?php
		do{ ?>
    <div class="col-md-4">
	  <!--first part start  -->
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">		  
            <div class="img-box-a">
              <img src="(1)assets/Home_photo/<?php echo $row1["Home_photo1"];  ?>" alt="" class="img-a img-fluid" width="500px" height="500px">
            </div>
			
            <div class="card-overlay">
              <div class="card-overlay-a-content">
			  
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">Ragistrition Date
                      <br /> <?php echo $row1["_Date"];  ?></a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | $ 12.000</span>
                  </div>
                  <a href="#" class="link-a">Click here to view
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
        </div><br>
		</div>
	<?php }while($row1=mysqli_fetch_assoc($dataset1)); ?>
	</div>
	
	
	
    </div>
  </section>
  <!--/ Property End /-->

  <!--/ Agents Star /-->
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">نماینده های این سایت</h2>
            </div>
            <div class="title-link">
              <a href="all_agent.php">تمام نماینده ها
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
	  <?php do{?>
        <div class="col-md-3">
		
          <div class="card-box-d">
            <div class="card-img-d">
              <img  src="(1)assets/agent_photo/<?php echo $row["photo"];  ?>" alt="" class="img-d img-fluid">
			</div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h6 class="title-d">
                    <a href="agent-single.html" class="link-two">
                      <?php echo $row["Name"]; ?></a>
                  </h6>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a">
                  Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                </p>
                <div class="info-agents color-a">
                  <p>
                    <strong>Phone: </strong><?php echo $row["phone"]; ?></p>
                  <p><strong>Email:</strong><?php echo $row["Email"]; ?></p>
                  
                </div>
              </div>
              <div class="card-footer-d">
                <div class="socials-footer d-flex justify-content-center">
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
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
	  <?php }while($row=mysqli_fetch_assoc($dataset));?>
	  
</div>
  </section>
  <!--/ Agents End /-->

  <!--/ News Star /-->
  <section class="section-news section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">خانه های تازه راجستر شده</h2>
            </div>
            <div class="title-link">
              <a href="NewHome.php">تازه ترین ها
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
	  <div class="row">	
		<?php do{ ?>
    <div class="col-md-4">
	  <!--first part start  -->
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">		  
            <div class="img-box-a">
              <img src="(1)assets/orginal/img/property-6.jpg" alt="" class="img-a img-fluid">
            </div>
			
            <div class="card-overlay">
              <div class="card-overlay-a-content">
			  
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">206 Mount
                      <br /> Olive Road Two</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | $ 12.000</span>
                  </div>
                  <a href="#" class="link-a">Click here to view
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
        </div><br>
		</div>
	<?php }while($row2=mysqli_fetch_assoc($dataset2)); ?>
	</div>
	  
    </div>
  </section>
  <!--/ News End /-->

  <!--/ Testimonials Star /-->
  <section class="section-testimonials section-t8 nav-arrow-a">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">بهترین زندگی را با خانه های مناسب تجربه کنید</h2>
            </div>
          </div>
        </div>
      </div>
      <div id="testimonial-carousel" class="owl-carousel owl-arrow">
        <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-img">
                  <img src="(1)assets/orginal/img/testimonial-1.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                  ما برای شما بهترین خانه ها را در موقعیت های مختلف و درجاهای مناسب عرضه میکنیم 
				  تاشما بتوانید همراه با فامیل تان یک زندگی خوب وخوشبخت و آسایش داشته باشید 
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="(1)assets/orginal/img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                  <h5 class="testimonial-author"></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-img">
                  <img src="(1)assets/orginal/img/testimonial-2.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                   فامیل هامحترم ما فعلا در چهار ولایت افغانستان فعالیت داریم و میتوانیم برای شما سرویس 
				   ارایه ولایت های مزارشریف،کندز،تخار،بدخشان زیبا 
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="(1)assets/orginal/img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
                  <h5 class="testimonial-author"> </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Testimonials End /-->