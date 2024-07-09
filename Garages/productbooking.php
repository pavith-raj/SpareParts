<?php
 session_start();
 if(!isset($_SESSION['garage'])){
   header('Location: login.php');
 }
 $login_email=$_SESSION["garage"];
include "connection.php";
if(isset($_POST['submit']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address=mysqli_real_escape_string($conn,$_POST['address']);
  $pname=mysqli_real_escape_string($conn,$_POST['pname']);
  $vehiclename=mysqli_real_escape_string($conn,$_POST['vehiclename']);
  $companyname=mysqli_real_escape_string($conn,$_POST['companyname']);
  $model=mysqli_real_escape_string($conn,$_POST['model']);
  $price=$_POST['price'];
  $qty=$_POST['qty'];
  $total=$_POST['total'];
  $status='pending';

 
   
    $query="INSERT INTO productbooking(pname,vehiclename,companyname,model,price, qty, total, fname, lname, email, phone, address, status)VALUES('$pname','$vehiclename','$companyname','$model','$price','$qty','$total','$fname','$lname','$email','$phone','$address','$status')";
    $run=$conn->query($query)or die("Error in saving data".$conn->error);

if($run)
{
    echo '<script>alert("Successfully Ordered We Will Connect You")</script>';
    echo '<script>window.location.href="product.php";</script>';
}
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
      <title>Garage | Booking</title>
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
        .container{
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 1200px)
{
  .container{
    max-width: 1140px;
  }
}
.d-flex{
  display: flex;
  flex-direction: row;
  background: #f6f6f6;
  border-radius: 0 0 5px 5px;
  padding-bottom: 250px;
}
form{
  flex: 4;
}
.Yorder{
  flex: 2;
}
.title{
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0, #5195A8), color-stop(100, #70EAFF));
  background: -moz-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
  background: -ms-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
  background: -o-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
  background: linear-gradient(to bottom right, #5195A8 0%, #70EAFF 100%);
  border-radius:5px 5px 0 0 ;
  padding: 20px;
  color: #f6f6f6;
}
h2{
  margin: 0;
  padding-left: 15px; 
}
.required{
  color: red;
}
label, table{
  display: block;
  margin: 15px;
}
label>span{
  float: left;
  width: 25%;
  margin-top: 12px;
  padding-right: 10px;
}
input[type="text"], input[type="tel"], input[type="email"], select
{
  width: 70%;
  height: 30px;
  padding: 5px 10px;
  margin-bottom: 10px;
  border: 1px solid #dadada;
  color: #888;
}
select{
  width: 72%;
  height: 45px;
  padding: 5px 10px;
  margin-bottom: 10px;
}
.Yorder{
  margin-top: 15px;
  height: 600px;
  padding: 20px;
  border: 1px solid #dadada;
}
table{
  margin: 0;
  padding: 0;
}
th{
  border-bottom: 1px solid #dadada;
  padding: 10px 0;
}
tr>td:nth-child(1){
  text-align: left;
  color: #2d2d2a;
}
tr>td:nth-child(2){
  text-align: right;
  color: #52ad9c;
}
td{
  border-bottom: 1px solid #dadada;
  padding: 25px 25px 25px 0;
}

p{
  display: block;
  color: #888;
  margin: 0;
  padding-left: 25px;
}
.Yorder>div{
  padding: 15px 0; 
}

input[type="submit"]{
  width: 100%;
  margin-top: 10px;
  padding: 10px;
  border: none;
  border-radius: 30px;
  background: #52ad9c;
  color: #fff;
  font-size: 15px;
  font-weight: bold;
}
input[type="submit"]:hover{
  cursor: pointer;
  background: #428a7d;
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
      <div class="container">
  <div class="title">
      <h2>Product Order Form</h2>
  </div>
<div class="d-flex">
  <form action="productbooking.php" method="POST" >
    <div>
  <?php
               
               include 'connection.php';
               $id= (isset($_GET['id']) ? $_GET['id'] : '');
               $query = "SELECT * FROM   product WHERE id='$id'";
               $result = $conn->query($query);
               if ($result->num_rows > 0 ){
               while ($row = $result->fetch_object()){ 
               ?>
    <label>
      <span class="fname">First Name <span class="required">*</span></span>
      <input type="text" name="fname" required>
    </label>
    <label>
      <span class="lname">Last Name <span class="required">*</span></span>
      <input type="text" name="lname" required>
    </label>
   
    <label>
      <span>Street Address <span class="required">*</span></span>
      <input type="text" name="address" placeholder="Address" required>
    </label>
   
      <span>Phone <span class="required">*</span></span>
      <input type="text" name="phone" required> 
    </label>
    <label>
      <span>Email Address <span class="required">*</span></span>
      <input type="email" name="email" value="<?php echo $login_email ?>" readonly> 
    </label>
  </form>
  <div class="Yorder">
    <table>
      <tr>
        <th colspan="2">Your order</th>
      </tr>
      <tr>
        <td> Product Name</td>
        <td><input type="text" name="pname" value="<?php echo $row->pname ?>" readonly required>  </td>
      </tr>
      <tr>
        <td> Vehicle Name</td>
        <td><input type="text" name="vehiclename" value="<?php echo $row->vehiclename ?>" readonly required>  </td>
      </tr>
      <tr>
        <td> Company Name</td>
        <td><input type="text" name="companyname" value="<?php echo $row->companyname	 ?>" readonly required>  </td>
      </tr>
      <tr>
        <td>Model No</td>
        <td><input type="text" name="model" value="<?php echo $row->modelno ?>" readonly required>  </td>
      </tr>

      <tr>
        <td>Price :</td>
        <td><input type="text" name="price" value="<?php echo $row->price ?>" id="price" readonly required></td>
      </tr>
      <tr>
        <td>qty</td>
        <td><input type="text" name="qty"  onchange="calculatetotal()" id="qty"  required></td>
      </tr>
      <tr>
        <td>total</td>
        <td><input type="text" name="total"  id="total" readonly required></td>
      </tr>
    </table><br>
    <input type="submit" name="submit" value="Place Order" >
  
  
   
    <?php }}?>
               </div>
               </form>
  </div><!-- Yorder -->
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
      <script>
     function calculatetotal(){
            var price=document.getElementById("price").value;
            var qty=document.getElementById("qty").value;
            // var total= document.getElementById("total").value;

            document.getElementById("total").value= (price * qty);
            console.log(total);

        }
</script>
   </body>
</html>