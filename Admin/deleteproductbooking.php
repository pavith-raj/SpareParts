<?php
     include 'connection.php';
     $id=(isset($_GET['id'])?$_GET['id']:'');      
     $query = "DELETE FROM productbooking where id='$id' ";
     if($conn->query($query)==TRUE){
        echo '<script>alert(productbooking successfully deleted")</script>';
        echo '<script>window.location.href="viewproductbooking.php";</script>';
     }

?>