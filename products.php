
<!doctype html>

<html lang="en">

<head>
    <script type="text/javascript">
        function check(form)
        {
            var counter =0;
            for(var i=0;i<form.elements.length ;i++)
            {
                if(form.elements[i].type=='checkbox')
                {
                    if(form.elements[i].checked==true)
                    {
                        counter++;
                    }
                }
            }
            if(counter == 0)
            {
                alert('Please Select At Least One Product');
            }
            else
            {
                form.action ='purchesd.php';
              
            }
            
        }
    </script>
<meta charset="utf-8"/>

<title> Easy Market </title >

<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="table.css"/>

<style type="text/css">
    #product_table
    {
        border: 1px solid gray;
        border-collapse: collapse;
    }
    #product_table td
    {
        border: 1px solid gray;
        
    }

</style>

</head>

<body>

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
<br/>

<form name="thisForm"  method="post" >
<div id="product_name" > Mobiles </div> <br/>
 <?php
    include 'Code.php';
    get('select  Picture , Price ,Quantity , Description , Name , ID
                          from product where Category = "mobile" and Quantity > 0' );
 ?>

<br/> <br/> <br/>


<div id="product_name" > LabTops </div> <br/>
 <?php
    
    get('select  Picture , Price ,Quantity , Description , Name , ID
                          from product where Category = "labtop" and Quantity > 0' );
 ?>

<br/> <br/> <br/>

<div id="product_name"> Cameras</div> <br/>

 <?php
   
    get('select  Picture , Price ,Quantity , Description , Name , ID
                          from product where Category = "camera" and Quantity > 0' );
 ?>
<br/> <br/> <br/>
<input  type="submit" name="Confirm" value="Confirm" class="myButton" onclick="return check(document.thisForm);"  />
 

<br/> <br/> 

</form>

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