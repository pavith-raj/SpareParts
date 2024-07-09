<?php
session_start();
if(!isset($_SESSION["admin"]))
{
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | Products</title>
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
                  <h4 class="card-title">Product View Lists</h4>
                 
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Product name
                          </th>
                          <th>
                            Vehicle Name
                          </th>
                          <th>
                            Company Name
                          </th>
                          <th>
                            Model NO
                          </th>

                          <th>
                           Product Image
                          </th>
                          <th>
                            Price
                          </th>
                          <th>
                            Description
                          </th>
                          
                          <th></th>
                        </tr>
                      </thead>
                      <?php
                    $i=1;
                    include 'connection.php';
                    $query = "SELECT * FROM product";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0 ){
                    while ($row = $result->fetch_object()){ 
                    ?>
                      <tbody>
                        <tr>
                          <td><?php echo $row->id ?></td>
                          <td><?php echo $row->pname ?></td>
                          <td><?php echo $row->vehiclename ?></td>
                          <td><?php echo $row->companyname ?></td>
                          <td><?php echo $row->modelno ?></td>
                          <td><img src="<?php echo 'productuploads/'.$row->image;?>" width="150px" height="80px" /> </td>
                          <td><?php echo $row->price ?></td>
                          <td><?php echo $row->description ?></td>
                          
                    <td><a href="updateproduct.php?id=<?php echo $row->id ?>">Update</a></td>
                    <td><a href="deleteproduct.php?id=<?php echo $row->id; ?>">Delete</a></td>    
                        </tr>
                      </tbody>
                      <?php
                      $i++;
                    }
                }
                      ?>
                    </table>
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

