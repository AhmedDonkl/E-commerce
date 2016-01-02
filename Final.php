<?php

?>
<html>
    <head>
        <link rel="stylesheet" href="style.css"/>
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
    
    <form name="myform" >
    
       <?php
        include('Code.php');
        Buy_selected();
       ?> 
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