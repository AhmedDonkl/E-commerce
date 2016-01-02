<!DOCTYPE html>
<html>
<?php    session_start();   

?>
<body>
<?php
$usernamee=$_POST['username'];
$pass=$_POST['password'];

$strSQL  = 'SELECT CustomerID,Email,Password  FROM customer ' ;

$strConnection = mysqli_connect('127.0.0.1','root','','commerce');

$strResult = mysqli_query($strConnection,$strSQL);
$ch=false;

while($strRow = mysqli_fetch_array($strResult))
{
     $strid = $strRow['CustomerID'];
	$strusername = $strRow['Email'];
    $strpassword = $strRow['Password'];  
   
    
    if($strusername==$usernamee && $strpassword==$pass )
            {
                $ch=true;
                $_SESSION['customerid']= $strid; 
                    
            } 
            
              
            
              
}
if($ch==false)
{
    echo "<html><h5>  Invalid User Name Or Password </h5> </html>";
    require "index.php"; 
      exit;
      
    
}
else{
    require "home page.php"; 
      exit;
    
}
?>


</body>
</html>