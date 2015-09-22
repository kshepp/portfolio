<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Portfolio</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
     
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<link href="css/custom.css" rel="stylesheet"> 


</head>  


<!--Start of Navbar area--> 

<header>
<?php 
include ("nav.php");
?>
</header>
<!--End of Navbar area--> 


<?php include_once("analyticstracking.php") ?>



<div class="row">
<h2 class="navbar-brand"><b>Featured Projects</b></h2>  
</div>


<!--Start Mix it up Section-->

<!--
https://mixitup.kunkalabs.com/
http://codepen.io/patrickkunka/pen/KisAG
https://mixitup.kunkalabs.com/docs/
-->


<div class="row" id="gallery_wrap">
<div class="col-xs-12">
<!-- <div id="grid container"> -->
<div id="ourHolder">



   <div class="col-md-4 text-center">
        <div class="portfolio_icons">
         <div class="cf">
              <a href ="betterhope.php" >
              <img class="bottom" src="img/bh_top.png" alt="Better Hope Project Info" />
              <img class="top" src="img/betterhope_logo.png" alt="Better Hope Logo"/>
              </a>
          </div>
          </div>
  
    </div>
  

       
       
        <div class="col-md-4 text-center">
            <div class="portfolio_icons">
            <div class="cf">
              <a href ="newyorktrek.php" >
              <img class="bottom" src="img/NYTrek_top.png" alt="Data-file image" />
              <img class="top" src="img/NYTrek.png" alt="Puzzle piece"/>
              </a>
            </div>
          </div>
        </div>


        <div class="col-md-4 text-center">
            <div class="portfolio_icons">
            <div class="cf">
              <a href ="maryannsantiques.php" >
              <img class="bottom" src="img/ma_circle_bottom.png" alt="Data-file image" />
              <img class="top" src="img/ma_circle.png" alt="Puzzle piece"/>
              </a>
            </div>
          </div>
        </div>
        
        
       <!-- 
        <div class="col-md-4 text-center">
           <div class="portfolio_icons">
            <div class="cf">
              <a href ="womenwholaunch.php" >
              <img class="bottom" src="img/wwl_top.png" alt="Data-file image" />
              <img class="top" src="img/WWL.png" alt="Women Who Launch logo"/>
              </a>
            </div>
          </div>
          </div> -->
        



</div>
</div>
</div>
      
 

<!--
Problem statement
Solution (Tell a story)
Insights
Process
Results
The Impact
 -->

 
<!--Start Footer area-->	
<?php 
include ("footer.php");
?>
<!--End of Footer Area-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>

    
</body>
    
</html>
