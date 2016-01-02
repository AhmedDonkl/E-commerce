<!doctype html>

<html lang="en">

<head>
<meta charset="utf-8"/>

<title> Easy Market </title>

<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="table.css"/>

</head>

<body>

<div id="whole_page">

<header id="top_header"> <h4> Easy Market </h4> </header>

<nav id="nav_bar">
	<ul>
       <li> <a href="admin home.php"> Home </a> </li>
       <li> <a href="products_mod.php"> Products </a> </li>
       <li> <a href="update customer.php">  update customer </a> </li>
       <li> <a href="shipping.php">  shipping  </a> </li>
      <li> <a  href="admin page.php"> Log Out </a> </li> 
	</ul>
</nav>

<div id="section_side">

<section id="main">


<?php

$strSQL  = 'SELECT CustomerID,Phone,Email,Password FROM customer ' ;

$strConnection = mysqli_connect('127.0.0.1','root','','commerce');

$strResult = mysqli_query($strConnection,$strSQL);
$tab='<table cellspacing="5" id="badr">';
$tab.='<tr><th >ID</th>  <th >Phone</th> <th >Email</th> <th >Password</th> </tr>';
while($strRow = mysqli_fetch_array($strResult))
{
  	$cid = $strRow['CustomerID'];
	$phone = $strRow['Phone'];
    $email= $strRow['Email'];
    $pass= $strRow['Password'];
	$tab.='<tr> <td >'.$cid.'</td> <td >'.$phone.'</td> <td >'.$email.'</td> <td >'.$pass.'</td> </tr>';
		
}



echo $tab;





?>


<form name='form' method='post' action='valdiate customer update.php'>

<table class="myform" id="badr" >
 <tr>
        <td>
            Customer ID: 
        </td>
        <td>
            <input name='id' type='text' id='input_sub'  />
        </td>
    </tr>
    <tr>
        <td>
            First Name : 
        </td>
        <td>
            <input name='fname' type='text' id='input_sub' />
        </td>
    </tr>
    
    <tr>
        <td>
            Last Name : 
        </td>
        <td>
            <input name='lname' type='text' id='input_sub' />
        </td>
    </tr>
    <tr>
        <td>
        Phone :
        </td>
        <td>
        <input name='Phone' type='text' id='input_sub' />
        </td>
    </tr>
   
    <tr>
        <td>
            Billing Address :
        </td>
        <td>
            <input name='billing' type='text' id='input_sub' />
        </td>
    </tr>
    <tr>
        <td>
        Shipping Address :
        </td>
        <td>
        <input name='shipping' type='text' id='input_sub' />
        </td>
    </tr>
    <tr>
        <td>
        Password :
        </td>
        <td>
        <input name='password' type='password' id='input_sub' />
        </td>
    </tr>
    
</table>
 <table>
 <tr>
 <td style="width: 125px;"></td>
 <td>
    <br />
     <input name='submit' type='submit' value='Update'  id='btn_sub' class="myButton" />
 </td>
 </tr>
 </table>


</form>

<br/> <br/> <br/> <br/> 
</section>
<aside id="side">

<div id="news"> News!!! <br/> <br/> </div> 


</aside>

</div>

<br/><br/>
<footer id="the_footer">
Copyright 1999-2014 @TheNewGalaxy. All Rights Reserved
</footer>

</div>
</body>


</html>