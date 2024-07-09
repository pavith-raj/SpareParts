<?php
 session_start();
 if(!isset($_SESSION['garage'])){
   header('Location: login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Spare Parts Depot</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
   <?php include "header.php" ?>
      <!-- end header inner -->
      <!-- end header -->
      
      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Testimonial</h2>
                     <p></p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="images/tes.jpg" alt="#"/></i>
                                          <h4>John</h4>
                                          <span>(Garage Owner )</span>
                                          <p>The Spare Parts Depot has made the process of sourcing spare parts so much easier for our garage. The extensive range of genuine parts and the user-friendly interface make finding and ordering the right components a breeze. Highly recommended! </p>
                                       </div>
                                    </div>
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="images/tes1.jpg" alt="#"/></i>
                                          <h4>Sarah</h4>
                                          <span>(Garage Owner )</span>
                                          <p>I've been using the Spare Parts Depot for a few months now, and I couldn't be happier. The quality of the spare parts is top-notch, and the delivery is always prompt. The website is easy to navigate, and their customer support team is always helpful and responsive.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="images/tes2.jpg" alt="#"/></i>
                                          <h4>Michael</h4>
                                          <span>(Garage Owner)</span>
                                          <p>Finding reliable suppliers for spare parts has always been a challenge, but the Spare Parts Depot has completely changed that. The platform offers a wide selection of parts from trusted sources, and I've had no issues with the quality or authenticity of the products. It has definitely improved our business operations.</p>
                                       </div>
                                    </div>
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="images/tes3.jpg" alt="#"/></i>
                                          <h4>David</h4>
                                          <span>(Garage Owner)</span>
                                          <p>I was skeptical at first, but the Spare Parts Depot exceeded my expectations. The range of available parts is impressive, and the prices are competitive. The platform is reliable, and I've never encountered any issues with my orders. It has definitely made my job easier as a garage owner</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="images/tes.jpg" alt="#"/></i>
                                          <h4>John</h4>
                                          <span>(Garage Owner )</span>
                                          <p>The Spare Parts Depot has made the process of sourcing spare parts so much easier for our garage. The extensive range of genuine parts and the user-friendly interface make finding and ordering the right components a breeze. Highly recommended! </p>
                                       </div>
                                    </div>
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="images/tes1.jpg" alt="#"/></i>
                                          <h4>Sarah</h4>
                                          <span>(Garage Owner )</span>
                                          <p>I've been using the Spare Parts Depot for a few months now, and I couldn't be happier. The quality of the spare parts is top-notch, and the delivery is always prompt. The website is easy to navigate, and their customer support team is always helpful and responsive.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      </div>
      <!--  footer -->
      <?php include "footer.php" ?>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>