<?php
session_start();
if(!isset($_SESSION["admin"]))
{
    header("Location: index.php");
}
include 'connection.php';
if (isset($_POST["submit"])) 
{
   
    $eid= $_POST['eid'];
    $id=$_POST['id'];
      $query = "UPDATE productbooking SET eid='$eid'  WHERE id='$id' ";
       $run = $conn->query($query) or die("Error in saving Data".$conn->error);    
        if ($run) {
          echo '<script>alert("Employee Assigned  Updated Successfull!")</script>';
           echo '<script>window.location.href="viewconfirmedproductbooking.php";</script>';
                               
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
                  <h4 class="card-title">Assign Employee</h4>
                
                  <form class="forms-sample" action="assignemployee.php" method="POST" enctype="multipart/form-data">
                  <?php
            $i=0;
            include "connection.php";
            $id= (isset($_GET['id']) ? $_GET['id'] : '');
            $query = "SELECT * FROM productbooking WHERE id='$id' ";
                $result = $conn->query($query);
                if ($result->num_rows > 0 ){
                     while ($row = $result->fetch_object()){ 
                     
                    
        ?>  
                    <div class="form-group">
                      <label for="exampleInputUsername1">Select Employee</label>
                      <input class="form-control" type="hidden" id="formFile" name="id" value="<?php echo $row->id; ?>">
                      <select class="form-control" name="eid">
                                                <option>Select Option</option>
                                                <?php
                                                    $i=1;
                                                    include "connection.php";
                                                    $querys = "SELECT * FROM employee";
                                                    $results = $conn->query($querys);
                                                    if ($results->num_rows > 0 ){
                                                    while ($rows = $results->fetch_object()){            
                                                ?>  
                                                <option value="<?php echo $rows->id ?>"><?php echo $rows->ename ?></option>
                                                <?php $i++;}} ?>
                                            </select>
                    </div>
                   
                   
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

