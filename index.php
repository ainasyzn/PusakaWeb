<?php
  include ("database/main/main.php");
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

    <style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #000000;
  min-width: 280px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
  
}
</style>

  </head>
  <body>

    <!-- Header Section Start -->
    <header id="hero-area" data-stellar-background-ratio="0.5">    
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a href="http://www.pusakapelangi.net" class="navbar-brand" style="color:white"><img class="img-fulid" src="img/logo2.png" alt="" style="max-width:15%"><small>Pusaka Pelangi</small></a>

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
                <a class="nav-link page-scroll" href="#team">Team Kami</a>
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
              <a class="page-scroll" href="#team">Team Kami</a>
            </li>

        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->   
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s"><img class="img-fulid" src="img/homelogo2.png" alt="" style="max-width:100%"></a></h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"></p>
              <a href="#services" class="btn btn-common wow fadeInUp page-scroll" data-wow-duration="1000ms" data-wow-delay="400ms">Maklumat Lanjut</a>
            </div>
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
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Watch Our Intro video</h2>
                <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms"><?php echo $row["pengenalan_vid_desc"]?></p>
                <a href="https://www.youtube.com/watch?v=IXoMDwh4Cq8" class="video-popup wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s"><i class="lnr lnr-film-play"></i></a>
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
                 <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-rocket"></i>
                    </span>
                    <div class="text">
                      <h4>Supplies</h4>

                        <p>Installation c/w piping at farm area and install LPG/NG equipment</p>
                        <p>Storage tank and its facilities (LPG/Natural Gas)</p>

                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-laptop-phone"></i>
                    </span>
                    <div class="text">
                      <h4>LPG Saddle and Natural Gas Station</h4>
                      <ul>
                        <li>Installation work
                          <ul>
                            <li><small>LPG Tank</small>
                              <ul>
                                <li><div class="dropdown">
                                      <small>></small>
                                      <div class="dropdown-content">
                                       <p>2nos x 2.5KL</p>
                                       <p>2nos x 10KL</p>
                                       <p>2nos x 21KL</p>
                                    </div>
                                    </div></li>
                              <ul>
                            </li>
                            <li><small>LPG Vapor Manifold System</small>
                              <ul>
                                <li><div class="dropdown">
                                      <small>></small>
                                      <div class="dropdown-content">
                                       <p>4nos x 2banks x 50kg</p>
                                       <p>6nos x 2banks x 50kg</p>
                                       <p>11nos x 2banks x 50kg</p>
                                       <p>23nos x 2banks x 50kg</p>
                                    </div>
                                    </div></li>
                              <ul>
                              </li>
                            <li><small>LPG Liquid Withdrawal System</small>
                              <ul>
                                <li><div class="dropdown">
                                      <small>></small>
                                      <div class="dropdown-content">
                                       <p>4nos x 2banks x 50kg</p>
                                       <p>6nos x 2banks x 50kg</p>
                                       <p>11nos x 2banks x 50kg</p>
                                       <p>23nos x 2banks x 50kg</p>
                                    </div>
                                    </div></li>
                              <ul>

                            </li>
                          </ul>
                        </li>
                        <li><br>Requalification, Decommissioning & Demolization of LPG Bulk Tank
                              <ul>
                                <li><div class="dropdown">
                                      <small>></small>
                                      <div class="dropdown-content">
                                       <p>1nos x 200Kg</p>
                                       <p>1nos x 2.5KL</p>
                                       <p>1nos x 10KL</p>
                                       <p>1nos x 21KL</p>
                                    </div>
                                    </div></li>
                              <ul>

                        </li>
                        <li><br>Vaporizer Maintenance</li>
                      </ul>

                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-layers"></i>
                    </span>
                    <div class="text">
                      <h4>Cosmestic Repainting</h4>
                      <p>14Kg Cylinder</p>

                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-cog"></i>
                    </span>
                    <div class="text">
                      <h4>Future Business</h4>
                      <p>RC/RQ Cylinder C14 and C50</p>
                      <p>Bottling Plant</p>
                    </div>
                  </div>
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
          <p class="section-subtitle"><?php echo $row["team_desc"]?></p>
        </div>
        <div class="row">          
          <div class="col-md-12">
            <!-- Portfolio Controller/Buttons -->
            <div class="controls text-center">
              <a class="filter active btn btn-common" data-filter="all">
                All 
              </a>
              <a class="filter btn btn-common" data-filter=".design">
                Design 
              </a>
              <a class="filter btn btn-common" data-filter=".development">
                Development
              </a>
              <a class="filter btn btn-common" data-filter=".print">
                Print 
              </a>
            </div>
            <!-- Portfolio Controller/Buttons Ends-->
          </div>

          <!-- Portfolio Recent Projects -->
          <div id="portfolio" class="row">
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/img1.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img1.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix design print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/img2.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img2.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/img3.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img3.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/img4.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img4.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/img5.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img5.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix print design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/img6.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img6.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            
          </div>

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
        <div class="section-header">          
          <h2 class="section-title">Team Kami</h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">
        <?php
        if($result1 != null){
                  if($result1-> num_rows>0) {
                  while ($row1 = $result1-> fetch_assoc()) {
            ?>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="img/team/team1.jpg" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title"><?php echo $row1["memberName"]?></h4>
                  <p><?php echo $row1["posisi"]?></p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <?php }}}?>
        </div>
      </div>
    </section>
    <!-- Team section End -->

    <!-- testimonial Section Start -->
    <div id="testimonial" class="section" data-stellar-background-ratio="0.1">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-12">
              <h1 style="text-align:center">Partner Kami</h1>
            <div class="touch-slider owl-carousel owl-theme"><?php
              if($result2 != null){
                    if($result2-> num_rows>0) {
                    while ($row2 = $result2-> fetch_assoc()) {
              ?>
                <div class="testimonial-item">
                  <img src="img/testimonial/customer1.jpg" alt="Client Testimonoal" />
                  <div class="testimonial-text">
                    <p><?php echo $row2["partnerDesc"]?></p>
                    <h3><?php echo $row2["partnerName"]?></h3>
                    <span><?php echo $row2["posisi"]?></span>
                  </div>
                </div>
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
    <footer>          
      <div class="container">
        <div class="row">
          <!-- Footer Links -->
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <ul class="footer-links">

            </ul>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="copyright">
              <p>All copyrights reserved &copy; 2020 - Designed & Developed by Syukor Studio
            </div>
          </div>  
        </div>
      </div>
    </footer>
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