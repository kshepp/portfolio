<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/normalize.css">
<link href="css/custom.css" rel="stylesheet">
 
<title>Kristen Sheppard</title>

</head>  



<body class = "loading">
<?php include_once("analyticstracking.php") ?>
<!--Start of Navbar area-->	

<header>

<?php 
include("nav.php");
?>

</header>
<!--End of Navbar area-->	


<!--Start of Jumbotron-->

<div class="container">   
<section id="slide-1" class="homeSlide">


    
    <div class= "jumbotron">
    <div class="jumbotron text-center">
    <h1>Greetings From Michigan</h1>
    <h2>Kristen is an </h2>


   <div id="typer" class="text-center">
    <span class="element" style="font"> </span>

    </div>
    
   
    
    <!--insert javascript to print out
    UX Designer
    Interaction Designer
    UX Researcher
    Front End Developer?
    Entrepreneur
    Educator
    Data-Miner
     -->

            
    <br />
    <a href="about.php" class="btn btn-primary">About Me</a>
    <div class="divider">
    </div>
    <a href="#portfolio" class="btn btn-primary">Projects</a>
    <div class="divider">
    </div>
    <a href="badges.php" class="btn btn-primary">Badges</a>
    <div class="divider">
    </div>
    <a href="resume.php" class="btn btn-primary">Resume</a>
     <div class="divider">
    </div>  


</div>
</div>
</section>
</div>



<!--End of Jumbotron--> 




<!--Start of Columns-->
<br />
 <div class="row">
 <h2 class="navbar-brand" id="portfolio">
<br />
<br />
<br />
<br />
    Kristen's Projects</h2>
 </div>
 <br />
 <br />
 <br />
 
<div class="row">
 

 <div class="col-md-4 card">
        <div class="shadows">
         <div class="portfolio_icons">
            <div class="cf">
              <a href ="broke.php" >
              <img class="bottom" src="img/broke_bottom.jpg" alt="Data-file image" />
              <img class="top" src="img/broke_icon.jpg" alt="Puzzle piece"/>
              </a>
            </div>
          </div>
        <div class="text-center">
        <h3>The Broke App</h3>
        </div>
        
         <ul>
            <li>FinTech Startup</li>
            <li>User Experience Research and Design</li>
            <li>Product and Value Creation</li>
        </ul>
        
        </div>
    </div>     
 

 <div class="col-md-4 card">
        <div class="shadows">
         <div class="portfolio_icons">
            <div class="cf">
              <a href ="digital_projects_studio.php" >
              <img class="bottom" src="img/dp_circle_bottom.png" alt="Data-file image" />
              <img class="top" src="img/dp_circle.png" alt="Puzzle piece"/>
              </a>
            </div>
          </div>
        <div class="text-center">
        <h3>Hatcher Graduate Library Digital Projects Studio</h3>
        </div>
        
         <ul>
            <li>Open Source Coding</li>
            <li>Blogging Tutorials</li>
            <li>Front End Development</li>
        </ul>
        
        </div>
    </div>



<div class="col-md-4 card">
        
        <div class="shadows">

         <div class="portfolio_icons">
            <div class="cf">
              <a href ="newyorktrek.php" >
              <img class="bottom" src="img/NYTrek_top.png" alt="Data-file image" />
              <img class="top" src="img/NYTrek.png" alt="Puzzle piece"/>
              </a>
            </div>
          </div>
    <div class="text-center">
        <h3>New York Innovation Trek</h3>
    </div>
        <ul>
            <li>Customer Discovery</li>
            <li>Ideation</li>
            <li>User Research</li>
        </ul>

        </div>
    </div>
       
        
        <div class="col-md-4 card">

        <div class="shadows">

        <div class="portfolio_icons">
            <div class="cf">
              <a href ="betterhope.php" >
              <img class="bottom" src="img/bh_top.png" alt="Better Hope Project Info" />
              <img class="top" src="img/betterhope_logo.png" alt="Better Hope Logo"/>
              </a>
            </div>
        </div>
        
        <div class="text-center">
        <h3>BetterHope</h3>
        </div>
        <ul>
            <li>User Experience</li>
            <li>Graphic Design</li>
            <li>SEO And Content Management</li>
        </ul>
       
        </div>
    </div>




  <div class="col-md-4 card">
        <div class="shadows">
        <div class="portfolio_icons">
            <div class="cf">
              <a href ="maryannsantiques.php" >
              <img class="bottom" src="img/ma_circle_bottom.png" alt="Data-file image" />
              <img class="top" src="img/ma_circle.png" alt="Puzzle piece"/>
              </a>
            </div>
          </div>
        <div class="text-center">
        <h3>Maryann's Antiques</h3>
        </div>

       <ul>
        <li>Front End Development</li>
        <li>User Experience</li>
        <li>Search Engine Optimization</li>
       </ul>
        </div>
        
        </div>
       
    
</div>

<!--End of Columns-->
</div>
 

 
<!--Start Footer area-->	

<?php 
include("footer.php");
?>



<!--End of Footer Area-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/typed.js"></script>
<!-- <script src="js/jquery.js"></script> -->
<script src="typed.js"></script>

<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="js/skrollr.js"></script>
<script src="js/skrollr.ie.min.js"></script>
<script src="js/_main.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/modernizr-2.7.1.min.js"></script>


<script>
  $(function(){
      $(".element").typed({
        strings: ["UX Designer.", "Interaction Designer.", "UX Researcher.", 
        "Front End Developer.", "Entrepreneur.", "UX Designer."],
        typeSpeed: 10
      });
  });
</script>
    
</body>
    
</html>
