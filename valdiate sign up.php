<html>
<?php
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$Phone=$_GET['Phone'];
$email=$_GET['email'];
$billing=$_GET['billing'];
$shipping=$_GET['shipping'];
$pass=$_GET['password'];

$strSQL  = 'SELECT Email,Phone  FROM customer ' ;

if($fname=="" || $lname=="" || $Phone=="" || $email=="" ||$billing=="" || $pass=="" )
{
    echo "<html><span>  Missing Field  </span></html>";
    require "sign up.php"; 
      exit;
}

$strConnection = mysqli_connect('127.0.0.1','root','','commerce');

$strResult = mysqli_query($strConnection,$strSQL);
$che=false;

while($strRow = mysqli_fetch_array($strResult))
{

	$strusername = $strRow['Email'];
    $strphone = $strRow['Phone'];
	
if($strusername==$email || $strphone==$Phone )
{
    $che=true;
     
}
}

if($che==true)
{
    
  echo "<html><span>  Invalid In Email Or Phone  </span></html>";
    require "sign up.php"; 
      exit;
}
else if($che==false)
{
    
    
 
$sql="INSERT INTO customer (FirstName,LastName,BillingAddress,ShippingAddress,Phone,Email,Password)
VALUES
('$fname','$lname','$billing','$shipping','$Phone','$email','$pass')";

mysqli_query($strConnection,$sql);
  

  }


?>

<head>
<meta charset="utf-8"/>

<title> Valdiate </title>

<link rel="stylesheet" href="style.css"/>


</head>

<body>

<div id="link">

</div>

<div id="whole_page">

<header id="top_header"> <h4> Easy Market </h4> </header>

<nav id="nav_bar">
	<ul>
       <li> <a href="index.php"> Home </a> </li>
      

	</ul>
</nav>

<div id="section_side">

<section id="main">


<br/>
<a > <img src="happy.jpg"/> </a> <br /><br />



</section>

<aside id="side">
<span>  Done Sucessfuly  </span> <br />



</aside>

</div>

<br/><br/>
<footer id="the_footer">
Copyright 1999-2014 @Easy Market. All Rights Reserved
</footer>

</div>
</body>

</html>