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
      <title>Garage | Dashboard</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="css/product.css">
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
      <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
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
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                              <h1>Welcome</h1>
                                 <span>Spare Parts Depot</span>
                                 <p>your Trusted Partner for Quality Components. Experience the peace of mind that comes with our handpicked selection of genuine parts, backed by industry expertise. Our commitment to delivering reliable products and exceptional customer service ensures your satisfaction at every step. Discover the difference with us.</p>
                                 <a href="#contact">Contact Us</a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                              <h1></h1>
                                 <span>Knowledgeable Assistance</span>
                                 <p>Our team of experts is ready to assist you with any inquiries or technical questions you may have. From selecting the right spare parts to providing compatibility guidance, we are here to support you every step of the way. Our goal is to help you find the best solutions for your equipment maintenance and repair needs.</p>
                                 <a href="#contact">Contact Us</a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                              <h1></h1>
                                 <span>Conclusion</span>
                                 <p>At our Spare Parts Depot, we are dedicated to providing efficient solutions for equipment maintenance and repair. With our extensive inventory, user-friendly platform, reliable availability, and excellent customer support, we strive to be your trusted partner in keeping your machinery running smoothly. Trust us for all your spare parts needs and experience the convenience and reliability we offer.</p>
                                 <a href="#contact">Contact Us</a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- three_box -->
      <div class="three_box">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="box_text">
                  <h3>High-Quality Parts</h3>
                     <i><img src="images/thr3.png" alt="#"/></i>
                     <p>Company will guarantee the quality of the parts we provide. We may source the parts from trusted manufacturers and conduct thorough quality control checks to ensure that customers receive parts that meet or exceed industry standards.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box_text">
                  <h3>Fast Delivery</h3>
                     <i><img src="images/thr4.jpg"alt="#"/></i>
                     <p>Timely delivery of spare parts is crucial to minimizing equipment downtime. Our company will promise swift and efficient delivery services to ensure that customers receive their parts as quickly as possible.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box_text">
                  <h3>Competitive Pricing</h3>
                     <i><img src="images/thr5.png" alt="#"/></i>
                     <p>Company will promise competitive pricing for our spare parts. We understand the importance of cost-effectiveness for our customers and aim to provide fair prices without compromising on quality.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>

     <div>
     <div class="container">
    <h3 class="h3">Garage Products</h3>
    <div class="row">
    <?php
                    $i=1;
                    include 'connection.php';
                    $query = "SELECT * FROM   product limit 0,4";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0 ){
                    while ($row = $result->fetch_object()){ 
                    ?>
        <div class="col-md-4 col-sm-6">
            <div class="product-grid8">
                <div class="product-image8">
                    <a href="#" >
                        <img class="pic-1" margin="220px" width="100px" src="<?php echo '../Admin/productuploads/'.$row->image;?>">
                        <img class="pic-2" height="220px" width="100px" src="<?php echo '../Admin/productuploads/'.$row->image;?>">
                    </a>
                   
                </div>
                <div class="product-content">
                    <div class="price">₹ <?php echo $row->price ?>
                    </div>
                    <hr>
                    <h3 class="title"><a href="#"><?php echo $row->pname ?></a></h3>
                    <a class="all-deals" href="productmain.php?id=<?php echo $row->id ?>">Book Your Product <i class="fa fa-angle-right icon"></i></a>
                </div>
            </div>
        </div>
        
        
        <?php $i++;}} ?>
      
    </div>
    
</div>
<center><a href="product.php" class="read_more" style="text-align:center;">More Products</a></center>
   </div>
      <!-- end wedo  section -->
      <!-- testimonial -->
      <div class="testimonial" id="testimonial">
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
                                          <p>The Spare Parts Depot has made the process of sourcing spare parts so much easier for our garage. The extensive range of genuine parts and the user-friendly interface make finding and ordering the right components a breeze. Highly recommended!</p>
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