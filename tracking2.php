<!DOCTYPE html>
<html>
<body>
<?php

$id = $_POST['id'];
$strSQL  = "SELECT Shipped_date,Shipping_company,Tracing_number FROM ordeer WHERE Transaction_id=$id";

$strConnection = mysqli_connect('127.0.0.1','root','','commerce');

$strResult = mysqli_query($strConnection,$strSQL);
$tab='<table cellspacing="5" id="badr">';
$tab.='<tr><th >DateShipped </th>  <th >Shippingcompany</th> <th >TrackingNumber</th> </tr>';
while($strRow = mysqli_fetch_array($strResult))
{
    
  	$strdate = $strRow['Shipped_date'];
    $strcompany= $strRow['Shipping_company'];
	$strnumber= $strRow['Tracing_number'];

	$tab.='<tr> <td >'.$strdate.'</td>  <td >'.$strcompany.'</td> <td >'.$strnumber.'</td> </tr>';
		
}

$tab.='</table>';
echo $tab;

?>

</body>
</html>