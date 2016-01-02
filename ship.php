<!DOCTYPE html>
<html>
<body>
<?php

$strSQL  = "SELECT * FROM ordeer WHERE Shipped_flag=0";

$strConnection = mysqli_connect('127.0.0.1','root','','commerce');

$strResult = mysqli_query($strConnection,$strSQL);
$tab='<table cellspacing="5" id="badr">';
$tab.='<tr><th >Transaction ID</th>  <th >Customer ID</th> <th >Product ID</th> <th >Quantity</th> <th >Date</th>  </tr>';
while($strRow = mysqli_fetch_array($strResult))
{
  	$strid = $strRow['Transaction_id'];
	$strcus = $strRow['Customer_id'];
    $strproduct= $strRow['Product_id'];
	$strQuantity = $strRow['Quantity'];
	$strdate= $strRow['Purchase_date'];

	$tab.='<tr> <td >'.$strid.'</td> <td >'.$strcus.'</td> <td >'.$strproduct.'</td> <td >'.$strQuantity.'</td> <td >'.$strdate.'</td> </tr>';
		
}

$tab.='</table>';
echo $tab;

?>

</body>
</html>