<?php
     include 'connection.php';
     $id=(isset($_GET['id'])?$_GET['id']:'');      
     $query = "DELETE FROM product where id='$id' ";
     if($conn->query($query)==TRUE){
        echo '<script>alert(product successfully deleted")</script>';
        echo '<script>window.location.href="viewproduct.php";</script>';
     }

?>