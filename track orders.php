<!doctype html>

<html lang="en">

<head>
<meta charset="utf-8"/>

<title> Easy Market </title>

<link rel="stylesheet" href="style.css"/>

</head>

<body>

<div id="whole_page">

<header id="top_header"> <h4> Easy Market </h4> </header>

<nav id="nav_bar">
	<ul>
       <li> <a href="home page.php"> Home </a> </li>
       <li> <a href="products.php"> Products </a> </li>
       <li> <a href="update profile.php">  profile </a> </li>
       <li> <a href="track orders.php">  track orders  </a> </li>
      <li> <a  href="index.php"> Log Out </a> </li> 

	</ul>
</nav>

<div id="section_side">

<section id="main">
<br/>

<?php
include 'tracking.php';
?>

<br/> <br/>
<form name="myform" method='post' action='track orders2.php'> 
<table  width="50%" cellspacing="5" id="badr" >
    	
	<tr>
	    <td>Transaction ID</td>
		<td> <input type= "text" name="id" /> </td>
	</tr>

</table>
<br/>
<input type="submit" value="Confirm Shipped"/>
</form>

<br/> <br/>
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