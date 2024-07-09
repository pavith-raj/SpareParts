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
                        <th>Invoice No.</th>
                    <th>Create Date</th>
                    <th>Customer Name</th>
                    <th>Invoice Total</th>
                    <th>Print</th>
                    <th>Edit</th>
                    <th>Delete</th>
                        </tr>
                      </thead>
                      <?php
                    $i=1;
                    include 'connection.php';
                    $query = "SELECT * FROM invoice_order";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0 ){
                    while ($row = $result->fetch_object()){ 
                    ?>
                      <tbody>
                        <tr>
                          <td><?php echo $row->order_id ?></td>
                          <td><?php echo $row->order_date ?></td>
                          <td><?php echo $row->order_receiver_name ?></td>
                          <td><?php echo $row->order_total_after_tax ?></td>
                          
                          
                    <td><a href="print_invoice.php?invoice_id=<?php echo $row->order_id?>">Print</a></td>
                    <td><a href="edit_invoice.php?update_id=<?php echo $row->order_id?>">Edit</a></td>
                    <td><a  id="<?php echo $row->order_id?>" class="deleteInvoice">Delete</a></td>    
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
  <script src="js/invoice.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

