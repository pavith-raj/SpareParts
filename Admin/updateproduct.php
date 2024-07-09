<?php
session_start();
if(!isset($_SESSION["admin"]))
{
    header("Location: index.php");
}
include 'connection.php';
if (isset($_POST["submit"])) 
{
   
    $pname=  mysqli_real_escape_string($conn,$_POST['pname']);
    $vehiclename= mysqli_real_escape_string($conn,$_POST['vehiclename']);
    $companyname= mysqli_real_escape_string($conn,$_POST['companyname']);
    $modelno= mysqli_real_escape_string($conn,$_POST['modelno']);
    $price=$_POST['price'];
    $description= mysqli_real_escape_string($conn,$_POST['description']);
    $id=$_POST['id'];
    // $new_image= $_FILES['newimage'] ['name'];
    // $old_image=$_POST['oldimage'];

    // $tarpath= "productuploads/";

                  


                    //  if(isset($_FILES['newimage'] ['name']) && !empty($_FILES['newimage'] ['name'])){
                    //     if(!empty($new_image))
                    //     {
                    //         $updated_image=$new_image;
                    //     }
                    //     else{
                    //         $updated_image=$old_image;
                    //     }
                    //     $updated_image= $_FILES['newimage'] ['name'];
                    //     $imageTemname1= $_FILES['newimage'] ['tmp_name'];
                       
                    //     if(file_exists($tarpath.$_FILES['newimage'] ['name'])){
                    //         $filename=$_FILES['newimage'] ['name'];
                    //         echo '<script>alert("Already Exist File")</script>';
                    //         echo '<script>window.location.href="viewproduct.php";</script>';
                    //     }
                    //     else{
                            $query = "UPDATE product SET pname='$pname' ,price='$price', description='$description',vehiclename='$vehiclename',companyname='$companyname',modelno='$modelno' WHERE id='$id' ";
                            $run = $conn->query($query) or die("Error in saving Data".$conn->error);    
                            if ($run) {
                              //  unlink($tarpath.$old_image);
                              //   move_uploaded_file($imageTemname1,$tarpath.$updated_image);
                                
                                echo '<script>alert("Product Details Updated Successfull!")</script>';
                                echo '<script>window.location.href="viewproduct.php";</script>';
                               
                           
                             }
                             else{
                                echo '<script>alert("Product Details  Updated  UnSuccessfull!")</script>';
                                echo '<script>window.location.href="viewproduct.php";</script>';
                            }
                        }

// }
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Update Product</title>
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
                  <h4 class="card-title">Update Garage Products</h4>
                
                  <form class="forms-sample" action="updateproduct.php" method="POST" enctype="multipart/form-data">
                  <?php
            $i=0;
            include "connection.php";
            $id= (isset($_GET['id']) ? $_GET['id'] : '');
            $query = "SELECT * FROM product WHERE id='$id' ";
                $result = $conn->query($query);
                if ($result->num_rows > 0 ){
                     while ($row = $result->fetch_object()){ 
                     
                    
        ?>  
                    <div class="form-group">
                      <label for="exampleInputUsername1">Product Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Product Name" name="pname" value="<?php echo $row->pname; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Product Price</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Product Price" name="price" value="<?php echo $row->price; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Vehicle Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row->vehiclename; ?>"  name="vehiclename">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Company Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row->companyname; ?>"  name="companyname">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Model NO</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row->modelno; ?>" name="modelno">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Product Description</label>
                      <textarea class="form-control" id="exampleInputPassword1" placeholder="Product Description" name="description" value="<?php echo $row->description; ?>"><?php echo $row->description; ?></textarea>
                      <input class="form-control" type="hidden" id="formFile" name="id" value="<?php echo $row->id; ?>">
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Product Image</label>
                      <input class="form-control" type="hidden" id="formFile" name="id" value="<?php echo $row->id; ?>">
                      <span class="btn btn-outline-secondary"><i class="ti-upload"></i><input type="file"  name="newimage" ></span>
                      <input class="form-control" type="hidden" id="formFile" name="oldimage" value="<?php echo $row->image; ?>">
                    <img src="<?php echo 'productuploads/'.$row->image;?>" width="100px" height="60px" />
                    </div> -->
                    <button type="button" class="btn btn-light" onclick="window.location.href='viewproduct.php'">Cancel</button>
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

