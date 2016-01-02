<html>
<?php
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$Phone=$_POST['Phone'];
$billing=$_POST['billing'];
$shipping=$_POST['shipping'];
$pass=$_POST['password'];

$sql = "UPDATE customer SET FirstName='$fname',LastName='$lname',BillingAddress='$billing',ShippingAddress='$shipping',Phone='$Phone',Password='$pass' WHERE CustomerID='$id'" ;

$strConnection = mysqli_connect('127.0.0.1','root','','commerce');

mysqli_query($strConnection,$sql);


require "update customer.php"; 
      exit;
 

?>


</html>