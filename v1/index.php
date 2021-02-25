<?php
  include ("php/main.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Pusaka Pelangi Sdn Bhd</title>

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" type="image/icon" href="img/logo2.png"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    <!-- Header Section Start -->
    <header id="hero-area" data-stellar-background-ratio="0.5">    
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a href="" class="navbar-brand" style="color:white"><img class="img-fulid" src="img/logo2.png" alt="" style="max-width:10%"><small>Pusaka Pelangi</small></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lnr lnr-menu"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#hero-area">Utama</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#services">Pengenalan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">Perkhidmatan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#portfolios">Projek</a>
              </li>

              <li class="nav-item">
                <a class="nav-link page-scroll" href="#team">Carta Organisasi</a>
              </li>


            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
           <li>
              <a class="page-scroll" href="#hero-area">Utama</a>
            </li>
            <li>
              <a class="page-scroll" href="#services">Pengenalan</a>
            </li>
            <li>
              <a class="page-scroll" href="#features">Perkhidmatan</a>
            </li>
            <li>
              <a class="page-scroll" href="#portfolios">Projek</a>
            </li>

            <li>
              <a class="page-scroll" href="#team">Carta Organisasi</a>
            </li>

        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->   
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
            <center>
            <div class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">
            <div class="float-left" >
            <div class="col-sm-6 col-md-6 col-xs-6" > 
              <img src="img/logo2.png" style="height:250px; width:140px">
            </div>
            </div>

            <div class="position-relative" > 
            <div class="col-sm-6 col-md-6 col-xs-6" > 
           
              <div style="text-align:justify" class="responsive">
              <h3>Pusaka Pelangi Sdn. Bhd.</h3>
              <h4 >(<?php echo $row["SSM"]?>)</h4>
              <h4><?php echo $row["alamat"]?></h4>
              <h4>Tel/Faks: <?php echo $rows["contact_no"]?></h4>
              </div>    
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"></p>
              <a href="#services" class="btn btn-common wow fadeInUp page-scroll" data-wow-duration="1000ms" data-wow-delay="400ms">Maklumat Lanjut</a>
            </div>
            </div>
          </div>
          </center>
          </div>
        </div> 
      </div>           
    </header>
    <!-- Header Section End -->         
    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Pengenalan</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"><?php echo $row["pengenalan_desc"]?></p>
          
    </section>
    <!-- Services Section End -->

        <!-- Start Video promo Section -->
    <section class="video-promo section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="video-promo-content text-center">
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">VIDEO PENGENALAN</h2>
                <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms"><?php echo $row["pengenalan_vid_desc"]?></p>
                <video class="responsive" src="<?php echo $row["lokasi"]?>" controls width='700px' height='520px'></video>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Promo Section -->

    <!-- Features Section Start -->
    <section id="features" class="section" data-stellar-background-ratio="0.2">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Perkhidmatan</h2>
          <hr class="lines">
          <p class="section-subtitle">Perkhidmatan yang kami sediakan</p>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="container">
              <div class="row">
              <?php
        if($result3 != null){
                  if($result3-> num_rows>0) {
                  while ($row3 = $result3-> fetch_assoc()) {
            ?>
                 <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                    <i class="fa fa-tasks" style="font-size: 18px;"></i>
                    </span>
                    <div class="text" style="margin: 0px 20px;">
                      <h4><?php echo $row3["khidmatName"]?></h4>
                      <?php echo nl2br($row3["khidmatDescription"])?>
                    </div>
                  </div>
            <?php }}} ?>
                  <!-- end loop -->
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xs-12">
            <div class="show-box">
              <img class="img-fulid" src="img/features/feature.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Features Section End -->    

    <!-- Portfolio Section -->
    <section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Projek Kami</h2>
          <hr class="lines">
          <p class="section-subtitle"><?php echo $row["projek_desc"]?></p>
        </div>
        <div id="portfolio" class="row">          
          <!-- Portfolio Recent Projects -->
          <?php
          if($results != null){
            if($results -> num_rows>0) {
            while ($projek = $results-> fetch_assoc()) {
              ?>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 " style="display:inline-block;" data-bound>
            
              <div class="portfolio-item">
                <div class="shot-item">
                
                  <img src="uploads/<?php echo $projek["imej"]?>" alt=""/>  
                  <a class="overlay lightbox" href="uploads/<?php echo $projek["imej"]?>">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                  <p style="color: grey; text-align: center; margin: 20px 0px;"><?php echo $projek["projekName"]?></p>
                </div>               
              </div>
            </div>
          
          <?php } } } ?>

        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 



    <!-- Start Pricing Table Section -->

    <!-- End Pricing Table Section -->

    <!-- Counter Section Start -->
    <div class="counters section" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row"> 
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item">   
              <div class="icon">
                <i class="lnr lnr-clock"></i>
              </div>             
              <div class="fact-count">
                <h3><span class="counter"><?php echo $row["jam_bekerja"]?></span></h3>
                <h4>Jam Bekerja</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item">   
              <div class="icon">
                <i class="lnr lnr-briefcase"></i>
              </div>            
              <div class="fact-count">
                <h3><span class="counter"><?php echo $row["bilanganprojek"]?></span></h3>
                <h4>Bilangan Project</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item"> 
              <div class="icon">
                <i class="lnr lnr-user"></i>
              </div>              
              <div class="fact-count">
                <h3><span class="counter"><?php echo $row["bilanganklien"]?></span></h3>
                <h4>Bilangan Klien</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item"> 
              <div class="icon">
                <i class="lnr lnr-heart"></i>
              </div>              
              <div class="fact-count">
                <h3><span class="counter"><?php echo $row["bilangansuka"]?></span></h3>
                <h4>Kepuasan Klien</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Counter Section End -->

    <!-- Team section Start -->
    <section id="team" class="section">
      <div class="container">
      <div class="row justify-content-center">
        <div class="section-header">          
          <h2 class="section-title">Carta Organisasi</h2>
          <hr class="lines">
        </div>
        <div class="row" >
        <img src="uploads/<?php echo $row["imej_org"]?>" class="responsive">
        </div>
        </div>
      </div>
    </section>
    <!-- Team section End -->

    <!-- testimonial Section Start -->
    
    <div id="testimonial" class="section" data-ride="carousel">
      <div class="container" >
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="section-header">          
              <h2 class="section-title" style="color: white;">Rakan Kongsi Kami</h2>
              <hr class="lines" >
            </div>
            <div class="touch-slider owl-carousel owl-theme" style="margin-top:70px;"><?php
              if($result2 != null){
                    if($result2-> num_rows>0) {
                    while ($row2 = $result2-> fetch_assoc()) {
              ?>
              
              <center>
              <div class="testimonial-text" style="display: inline;">
                  <p><?php echo $row2["partnerName"]?>
                
                </div>
                <div class="carousel-inner">
                  <div class="item-active" >
                  <img src="uploads/<?php echo $row2["partnerImej"]?>" style="width:50%; height:50%;"/>
                  </div>
                </div>
                
                
                </center>
              <?php }}} ?>
              </div>
          </div>
        </div>        
      </div>
    </div>

    <!-- testimonial Section Start -->

    <!-- Blog Section -->

    <!-- blog Section End -->

    <!-- Contact Section Start -->

    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <div class="footer">
      <div class="section-header">          
              <h2 class="section-title" style="color: white;">Hubungi Kami</h2>
              <hr class="lines">
      </div>
      
      <div class="container" style="margin-bottom: 60px;">
      <div id="portfolio" class="row"> 
        
      <div class="mapouter">
        <div class="gmap_canvas">
            <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.798373077986!2d101.05831011460191!3d4.630030543555871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31caeb5a7ed8bb45%3A0x9b0ac61a35b8a2c0!2sPusaka%20Pelangi%20Sdn%20Bhd!5e0!3m2!1sen!2smy!4v1614150127177!5m2!1sen!2smy" width="100%" height="100%" style="border:0;" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
            </div>
            
            
        <div class="portfolio-item">
        
          <div class="contact">
          <p style="font-size: 16px;">Nombor untuk dihubungi</p>
          <?php
                if($result4 != null){
                        if($result4-> num_rows>0) {
                        while ($row4 = $result4-> fetch_assoc()) { ?>
                <p ><u style="font-size: 18px;"><?php echo $row4["contact_no"]?></u> <br> <font style="color: grey">(<?php echo $row4["contactName"]?>)</font></p>
                <?php }
                  } }
          ?>
           
          </div>
        </div>
      </div> 
      </div>
      <div class="copyright">
        <p>&copy; Pusaka Pelangi Sdn. Bhd. Hak cipta terpelihara</p>
      </div>
    </div>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>
    
    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>     

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.js"></script>    
    <script src="js/jquery.stellar.min.js"></script>    
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>    
    <script src="js/smoothscroll.js"></script>    
    <script src="js/jquery.slicknav.js"></script>     
    <script src="js/wow.js"></script>   
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/waypoints.min.js"></script>    
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>   
    <script src="js/main.js"></script>

  </body>
</html>