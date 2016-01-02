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
       <li> <a href="admin home.php"> Home </a> </li>
       <li> <a href="products_mod.php"> Products </a> </li>
       <li> <a href="update customer.php">  update customer </a> </li>
       <li> <a href="shipping.php">  shipping  </a> </li>
      <li> <a  href="admin page.php"> Log Out </a> </li> 
	</ul>
</nav>

<div id="section_side">

<section id="main">
<br/>

<?php
include 'server.php';
?>

<br/> <br/> 

<div id="big_box">
<form name="myform" method='post' action='update.php'> 
<table  width="30%" cellspacing="5" id="badr">
    	
	<tr>
	    <td>ID</td>
		<td> <input type= "text" name="id" /> </td>
	</tr>
	<tr>
	    <td>Name</td>
		<td> <input type= "text" name="name" /> </td>
    </tr>
    <tr>
	    <td> Category </td>
		<td> <input type= "text" name="Category" /> </td>
    </tr>
    <tr>
	    <td> sub-Category </td>
		<td> <input type= "text" name="sub-Category" /> </td>
    </tr>
    <tr>
	    <td> Price </td>
		<td> <input type= "text" name="Price" /> </td>
    </tr>
    <tr>
	    <td> Quantity </td>
		<td> <input type= "text" name="Quantity" /> </td>
    </tr>
    <tr>
	    <td> Description </td>
		<td> <input type= "text" name="Description" /> </td>
    </tr>	

</table>
<br/>
<input type="submit" value="Update Product"/>
</form>

<br/> <br/>

<form name="myform2" method='post' action='insert.php'> 
<table width="30%"  cellspacing="5" id="badr">
    	
	<tr>
	    <td>Name</td>
		<td> <input type= "text" name="name" /> </td>
    </tr>
    <tr>
	    <td> Category </td>
		<td> <input type= "text" name="Category" /> </td>
    </tr>
    <tr>
	    <td> sub-Category </td>
		<td> <input type= "text" name="sub-Category" /> </td>
    </tr>
    <tr>
	    <td> Price </td>
		<td> <input type= "text" name="Price" /> </td>
    </tr>
    <tr>
	    <td> Quantity </td>
		<td> <input type= "text" name="Quantity" /> </td>
    </tr>
    <tr>
	    <td> Description </td>
		<td> <input type= "text" name="Description" /> </td>
    </tr>	
    <tr>
	    <td> Photo </td>
		<td> <input type= "text" name="photo" placeholder="Enter Photo Path"/> </td>
    </tr>

</table>

<br/>
<input type="submit" value="Add New Product"/>
</form>
</div>
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