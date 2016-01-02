<!DOCTYPE html>
<html>
<body>
<?php

$strConnection = mysqli_connect('127.0.0.1','root','','commerce');

 $name = $_POST['name'];
 $category = $_POST['Category'];
 $sub= $_POST['sub-Category'];
 $price = $_POST['Price'];
 $quantity = $_POST['Quantity'];
 $Description = $_POST['Description'];
 $photo = $_POST['photo'];
 
$insert_query= " INSERT INTO product (Name,Description,Quantity,Price,Category,SubCategory,Picture) VALUES ('$name','$Description',$quantity,$price,'$category','$sub','$photo')";
mysqli_query($strConnection,$insert_query);


    require "products_mod.php"; 
      exit;

?>

</body>
</html>