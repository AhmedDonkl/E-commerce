<!DOCTYPE html>
<html>
<body>
<?php

$strConnection = mysqli_connect('127.0.0.1','root','','commerce');
  
   $date = date("Y-m-d / h:i:sa");
	$id = $_POST['id'];
	$company = $_POST['company'];
	$tracking = $_POST['tracking'];
	
 
 $update_query= " UPDATE ordeer  SET Shipped_flag=1,Shipping_company='$company',Shipped_date = '$date' ,Tracing_number=$tracking WHERE Transaction_id=$id";
 mysqli_query($strConnection,$update_query);


    require "shipping.php"; 
      exit;

?>

</body>
</html>