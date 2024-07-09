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
      <title>Garage | Status</title>
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
      <style>
        .title-fr{
			padding-top: 64px;
		}
		@media(max-width:780px){
			.title-fr{
			margin-top:unset;
		}
		}

        div.elem-group {
  margin: 20px 0;
}

div.elem-group.inlined {
  width: 49%;
  display: inline-block;
  float: left;
  margin-left: 1%;
}

label {
  display: block;
  font-family: 'Nanum Gothic';
  padding-bottom: 10px;
  font-size: 1.25em;
}

input, select, textarea {
  border-radius: 2px;
  border: 2px solid #777;
  box-sizing: border-box;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  width: 100%;
  padding: 10px;
}

div.elem-group.inlined input {
  width: 95%;
  display: inline-block;
}

textarea {
  height: 250px;
}

hr {
  border: 1px dotted #ccc;
}

button {
  height: 50px;
  background: orange;
  border: none;
  color: white;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  border: 2px solid black;
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
      <div class="container-xl">
    <div style="marging-top:160px; margin-bottom: 80px">
	<h1 style="text-align:center;" class="title-fr">Garage Products</h1>
    <table id="datatablesSimple" class="table table-striped" style="background-color: white;color:black;">
                                    <thead>
                                        <tr>
                                            <th>Garage Name</th>
                                            <th>Price:</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Order Status</th>
                                            <th></th>
                                           
                                        
                                        </tr>
                                    </thead>
                                    <?php
            $i=1;
            include 'connection.php';
            $email= $_SESSION['garage'];
            $queryGetImg = "SELECT * FROM  productbooking WHERE email='$email'";
            $resultImg = $conn->query($queryGetImg);
            if ($resultImg->num_rows > 0 ){
            while ($row = $resultImg->fetch_object()){
                $status=$row->status;
    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row->pname; ?></td>
                                            <td><?php echo $row->price; ?></td>
                                            <td><?php echo $row->qty; ?></td>
                                            <td><?php echo $row->total; ?></td>
                                            <td><?php echo $row->status; ?></td>
                                            <?php 
                                                if($status =='pending')
                                                {
                                            ?>
                                            <td><a href="cancelorder.php?id=<?php echo $row->id; ?>" style="    color: white;
    text-decoration: none;
    background-color: #f08632;
    padding: 12px;">Cancel</a></td>
                                            <?php } else{
                                                ?>
                                                 <td><a href="cancelorder.php?id=<?php echo $row->bookid; ?>" style="display:none">Cancel</a></td>
                                                 <?php }?>
                                        </tr>
                                    </tbody>
                                    <?php $i++; } }?>
                        </table>
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