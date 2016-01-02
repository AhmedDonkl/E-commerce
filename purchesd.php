
<!doctype html>

<html lang="en">

<head>
<meta charset="utf-8"/>

<title> Easy Market </title>

<link rel="stylesheet" href="table.css"/>
<link rel="stylesheet" href="style.css"/>

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

<header id="top_header"> <h1> Easy Market </h1> </header>

<nav id="nav_bar">
	<ul>
       <li> <a href="index.html"> Products </a> </li>
	   <li> <a href="forms.html"> Forms </a> </li>
	   <li> <a href="links.html"> Links </a> </li>
	</ul>
</nav>

<div id="section_side">

<section id="main">
<br/>

<form name="myform"   method="post" >
<div id="product_name" > You Have selected This Items</div> <br/>
   <?php
    include('Code.php');
    view_selected();
   ?>
   <br />
<input  type="submit" name="Confirm" value="Confirm" class="myButton" onclick="return check(document.myform)" />
 

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
                form.action='index.php';
           
            }
            else
            {
                form.action ='Final.php';
              
            }
            
        }
    </script>
</body>


</html>