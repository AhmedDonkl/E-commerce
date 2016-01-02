<!DOCTYPE html>
<html>
<body>
<?php    session_start();   

?>
<?php
$cid= $_SESSION['customerid'];
$strSQL  = 'select Transaction_id,Product_id,Quantity,Purchase_date from ordeer where Customer_id = '.$cid.'';
echo $cid;
$strConnection = mysqli_connect('127.0.0.1','root','','commerce');

$strResult = mysqli_query($strConnection,$strSQL);
echo mysqli_num_rows($strResult);
$tab='<table cellspacing="5" id="badr">';
$tab.='<tr><th >Transaction ID</th>  <th >Product ID</th> <th >Quantity</th> <th >Date</th>  </tr>';
while($strRow = mysqli_fetch_array($strResult))
{
  	$strid = $strRow['Transaction_id'];
    $strproduct= $strRow['Product_id'];
	$strQuantity = $strRow['Quantity'];
	$strdate= $strRow['Purchase_date'];

	$tab.='<tr> <td >'.$strid.'</td>  <td >'.$strproduct.'</td> <td >'.$strQuantity.'</td> <td >'.$strdate.'</td>  </tr>';
		
}

$tab.='</table>';
echo $tab;

?>

</body>
</html>