<?php
     include 'connection.php';
     $id=(isset($_GET['id'])?$_GET['id']:'');      
     $query = "UPDATE productbooking SET status='cancelled' WHERE id='$id' ";
     if($conn->query($query)==TRUE){
        echo '<script>alert(Product Successfully Cancelled")</script>';
        echo '<script>window.location.href="orderstatus.php";</script>';
     }

?>