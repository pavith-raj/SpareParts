<?php
session_start();
if(!isset($_SESSION["admin"]))
{
    header("Location: index.php");
}
include 'connection.php';
if (isset($_POST["submit"])) 
{
   
    $ename= $_POST['ename'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $id=$_POST['id'];

                    $query = "UPDATE employee SET ename='$ename', email='$email', password='$password', phone='$phone' WHERE id='$id'";
                    $run = $conn->query($query) or die("Error in saving Data".$conn->error);    
                    if ($run) {
                    echo '<script>alert("Employee  Updated  Successfull!")</script>';
                    echo '<script>window.location.href="viewemployee.php";</script>';
                     }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    
    <!-- partial:partials/_navbar.html -->
   <?php include "navbar.php" ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php include "sidebar.php"?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Employee</h4>
                
                  <form class="forms-sample" action="updateemployee.php" method="POST" enctype="multipart/form-data">
                  <?php
            $i=0;
            include "connection.php";
            $id= (isset($_GET['id']) ? $_GET['id'] : '');
            $query = "SELECT * FROM employee WHERE id='$id' ";
                $result = $conn->query($query);
                if ($result->num_rows > 0 ){
                     while ($row = $result->fetch_object()){ 
                     
                    
        ?>  
                    <div class="form-group">
                      <label for="exampleInputUsername1">Employee Name</label>
                      <input class="form-control" type="hidden" id="formFile" name="id" value="<?php echo $row->id; ?>">
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Employee Name" name="ename" value="<?php echo $row->ename; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" value="<?php echo $row->email; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
                      <input type="password" class="form-control" id="exampleInputpassword1" placeholder="Password" name="password" value="<?php echo $row->password; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone</label>
                      <input type="text" class="form-control" id="exampleInputpassword1" placeholder="Phone" name="phone" value="<?php echo $row->phone; ?>">
                    </div>
                    <button type="button" class="btn btn-light" onclick="window.location.href='viewemployee.php'">Cancel</button>
                    <button type="submit" class="btn btn-primary me-2" style="background-color:#10de8a !important;border-color:#10de8a!important" name="submit" >Submit</button>
                    <?php }} ?>
                </form>
                </div>
              </div>
            </div>
                      
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
