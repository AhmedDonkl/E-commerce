<html>

<?php    session_start();   ?>
<head>
<meta charset="utf-8"/>

<title> Profile </title>

<link rel="stylesheet" href="style.css"/>


</head>

<body>

<div id="link">

</div>

<div id="whole_page">

<header id="top_header"> <h4> Easy Market </h4> </header>

<nav id="nav_bar">
  <li> <a href="home page.php"> Home </a> </li>
       <li> <a href="products.php"> Products </a> </li>
       <li> <a href="update profile.php">  profile </a> </li>
       <li> <a href="track orders.php">  track orders  </a> </li>
      <li> <a  href="index.php"> Log Out </a> </li> 
</nav>

<div id="section_side">

<section id="main">
<?php

$id=$_SESSION['customerid'];

$strSQL  = "SELECT FirstName,LastName,BillingAddress,ShippingAddress,Email,Phone,Password  FROM customer WHERE CustomerID='$id'"  ;

$strConnection = mysqli_connect('127.0.0.1','root','','commerce');

$strResult = mysqli_query($strConnection,$strSQL);
while($strRow = mysqli_fetch_array($strResult))
{
     $fname = $strRow['FirstName'];
	$lname = $strRow['LastName'];
    $bill = $strRow['BillingAddress']; 
    $ship = $strRow['ShippingAddress'];
    $phone = $strRow['Phone'];
    $pass = $strRow['Password'];
    
}

$std="<section id='main'>


<br/>


<form name='form' method='post' action='valdiate update profile.php'>
<table  id='badr' class='myform'>
    <tr>
        <td>
            First Name : 
        </td>
        <td>
            <input name='fname' type='text' id='input_sub' value=$fname >
        </td>
    </tr>
    
    <tr>
        <td>
            Last Name : 
        </td>
        <td>
            <input name='lname' type='text' id='input_sub' value=$lname>
        </td>
    </tr>
    <tr>
        <td>
        Phone :
        </td>
        <td>
        <input name='Phone' type='text' id='input_sub' value=$phone>
        </td>
    </tr>
    <tr>
        <td>
        Password :
        </td>
        <td>
        <input name='password' type='password' id='input_sub' value=$pass>
        </td>
    </tr>
    <tr>
        <td>
            Billing Address :
        </td>
        <td>
            <input name='billing' type='text' id='input_sub' value=$bill>
        </td>
    </tr>
    <tr>
        <td>
        Shipping Address :
        </td>
        <td>
        <input name='shipping' type='text' id='input_sub' value=$ship>
        </td>
    </tr>
   
    
</table>

 <input name='submit' type='submit' value='Update'  id='btn_sub' />

</form>";
echo $std;
?>

</section>



</div>

<br/><br/>
<footer id="the_footer">
Copyright 1999-2014 @TheNewGalaxy. All Rights Reserved
</footer>

</div>

</body>


</html>