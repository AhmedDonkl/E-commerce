<!DOCTYPE html>
<html>
<body>
<?php

$strSQL  = 'SELECT *FROM product ' ;

$strConnection = mysqli_connect('127.0.0.1','root','','commerce');

$strResult = mysqli_query($strConnection,$strSQL);
$tab='<table cellspacing="5" id="badr">';
$tab.='<tr><th >ID</th>  <th >Name</th> <th >Category</th> <th >Sub-Category</th> <th >Price</th> <th >Quantity</th> <th >Description</th> </tr>';
while($strRow = mysqli_fetch_array($strResult))
{
  	$strname = $strRow['Name'];
	$strcategory = $strRow['Category'];
    $strDescription= $strRow['Description'];
	$strQuantity = $strRow['Quantity'];
	$strPrice = $strRow['Price'];
	$strSub = $strRow['SubCategory'];
	$strID = $strRow['ID'];
	$tab.='<tr> <td >'.$strID.'</td> <td >'.$strname.'</td> <td >'.$strcategory.'</td> <td >'.$strSub.'</td> <td >'.$strPrice.'</td> <td >'.$strQuantity.'</td> <td >'.$strDescription.'</td> </tr>';
		
}

$tab.='</table>';
echo $tab;




?>

</body>
</html>