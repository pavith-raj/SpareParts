<?php
   $i=1;
   include 'connection.php';
   if(isset($_POST['request'])){
    $request= $_POST['request'];
    $query = "SELECT * FROM productbooking WHERE fname='$request'";
    $result = $conn->query($query);
    if ($result->num_rows > 0 ){
        while ($row = $result->fetch_object()){ 
            $address=$row->address ?  $row->address: null;
?>
 
 <div class="form-group" >
						<textarea class="form-control" rows="3" name="address"  readonly><?php echo $address; ?></textarea>
					</div>
                <?php  }
              
                 }}
             ?>