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
      <title>Garage | Products</title>
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
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <style>
                * {
            box-sizing: border-box;
        }

        .details-card {
            width: 80%;
            margin: auto;
        }


        .description-container {
            position: relative;
            /* height: 900px; */
        }

        .main-description1 {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .main-description h3 {
            font-size: 2rem;
        }

        .add-inputs,
        .add-inputs input {
            float: left;
            margin-right: 10px;
            margin-bottom: 2px;
        }

        .add-inputs button {
            border-radius: 0;
        }

        .add-inputs input {
            height: 48px;
            width: 65px;
            border-radius: 0;
        }


        .product-title {
            font-size: 1.1rem;
            font-weight: bold;
        }

        .product-price {
            font-size: 1.8rem;
        }

        .social-list {
            padding: 0;
            list-style: none;
        }

        .social-list li {
            float: left;
            padding: 6px 8px;
            margin-right: 12px;
        }

        .social-list li a {
            color: black;
            font-size: 2rem;
        }

        .social-list li a i {
            font-size: 2rem;
        }
        </style>
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
      <div class="container my-5">

<div class="card details-card p-0">
    <div class="row">
    <?php
               
                    include 'connection.php';
                    $id= (isset($_GET['id']) ? $_GET['id'] : '');
                    $query = "SELECT * FROM   product WHERE id='$id'";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0 ){
                    while ($row = $result->fetch_object()){ 
                    ?>
        <div class="col-md-6 col-sm-12">
            <img class="img-fluid details-img" src="<?php echo '../Admin/productuploads/'.$row->image;?>" alt="">
        </div>
        <div class="col-md-6 col-sm-12 description-container p-5">
            <div class="main-description">
                <p class="product-category mb-0">Product</p>
                <h3><?php echo $row->pname ?></h3>
                <hr>
                <p class="product-price">₹<?php echo $row->price ?></p>
                <p class="product-category mb-0">Company Name: <?php echo $row->companyname ?></p>
                <p class="product-category mb-0">Vechile Name: <?php echo $row->vehiclename?></p>
                <p class="product-category mb-0">Model Name: <?php echo $row->modelno ?></p>
               
               <br />
                    <a href="productbooking.php?id=<?php echo $row->id ?>" class="btn btn-primary btn-lg">Order</a>
            
                <div style="clear:both"></div>

                <hr>


                <p class="product-title mt-4 mb-1">About this product</p>
                <p class="product-description mb-4">
                <?php echo $row->description ?>
                </p>

                <hr>

                






            </div>




        </div>
        <?php }}?>
    </div>
    <!-- End row -->
</div>
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