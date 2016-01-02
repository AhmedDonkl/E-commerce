<html>
<?php    session_start();   ?>
<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$Phone=$_POST['Phone'];
$billing=$_POST['billing'];
$shipping=$_POST['shipping'];
$pass=$_POST['password'];

$strSQL  = 'SELECT Email,Phone  FROM customer ' ;
$id=$_SESSION['customerid'];

$sql = "UPDATE customer SET FirstName='$fname',LastName='$lname',BillingAddress='$billing',ShippingAddress='$shipping',Phone='$Phone',Password='$pass' WHERE CustomerID='$id'" ;

$strConnection = mysqli_connect('127.0.0.1','root','','commerce');

mysqli_query($strConnection,$sql);
$_SESSION['check']=false;

 

?>

<head>
<meta charset="utf-8"/>

<title> Valdiate Profile </title>

<link rel="stylesheet" href="style.css"/>


</head>

<body>

<div id="link">

</div>

<div id="whole_page">

<header id="top_header"> <h4> Easy Market </h4> </header>

<nav id="nav_bar">
	<ul>
       <li> <a href="home page.php"> Home Page </a> </li>
      

	</ul>
</nav>

<div id="section_side">

<section id="main">


<br/>
<a > <img src="ok.jpg"/> </a> <br /><br />



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