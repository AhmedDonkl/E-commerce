<!DOCTYPE html>
<html>
<body>
<?php

$strConnection = mysqli_connect('127.0.0.1','root','','commerce');
 
 $id = $_POST['id'];
 $name = $_POST['name'];
 $cat = $_POST['Category'];
 $sub= $_POST['sub-Category'];
 $pri = $_POST['Price'];
 $quantity = $_POST['Quantity'];
 $Description = $_POST['Description'];
 
 $update_query= " UPDATE product SET Name='$name',Description='$Description',Quantity=$quantity,Price=$pri,Category='$cat',SubCategory='$sub' WHERE ID=$id";
 mysqli_query($strConnection,$update_query);


    require "products_mod.php"; 
      exit;

?>

</body>
</html>