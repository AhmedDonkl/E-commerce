<!DOCTYPE html>
<html>
<body>
<?php

$usernamee=$_POST['username'];
$pass=$_POST['password'];

$strSQL  = 'SELECT Username,Password FROM admin ' ;

$strConnection = mysqli_connect('127.0.0.1','root','','commerce');

$strResult = mysqli_query($strConnection,$strSQL);
$ch=false;

while($strRow = mysqli_fetch_array($strResult))
{
     
	$strusername = $strRow['Username'];
    $strpassword = $strRow['Password'];  
   
    
    if($strusername==$usernamee && $strpassword==$pass )
            {
                $ch=true;
             
                    
            } 
            
              
            
              
}
if($ch==false)
{
    echo "<html><h5>  Invalid User Name Or Password </h5> </html>";
    require "admin page.php"; 
      exit;
      
    
}
else{
    require "admin home.php"; 
      exit;
    
}

?>

</body>
</html>