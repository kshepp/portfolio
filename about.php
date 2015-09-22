<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
     
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<link href="css/custom.css" rel="stylesheet">  


</head>  



<body>
<?php include_once("analyticstracking.php") ?>
<!--Start of Navbar area-->	

<header>
<?php 
$fname = basename(__FILE__);
echo $fName;
include("nav.php");
?>
</header>
<!--End of Navbar area-->	

<!--Start of Jumbotron-->

<div class="container">
    <div class= "jumbotron">
    <div class="jumbotron text-center">
    <h1>About Kristen</h1>
    <br />
    <figure>
    <img class="thumbnail" src="img/Balcony_of_Europe.jpg" 
    alt="Kristen Sitting on the Balcony of Europe"/>
    <figcaption>
    Sitting on the Balcony of Europe in Nerja, Spain.
    </figcaption>
</figure>
    <br />
   <br />
    <p>
    I've always been drawn to the entrepreneurial spirit of technology.
    I'm particularly passionate about how to use technology to improve people's lives and 
    the world we live in. I truly believe in being a Global Citizen and hope to use technology
    to make a positive impact on our world.
    </p>
    </div>
</div>
</div>
<!--End of Jumbotron-->    

<!--Start of Intro section-->
<br />
<br />
<br />

<div class="container">
    <div class="row">
    <div class="col-xs-12 text-center">
        <p>Below is a video that was created as an entry to the 
            <a href="newyorktrek.php">New York Innovation Trek</a>
            in the Fall of 2014. It highlights some work I've done with social
            enterprises, non-profits, and start-ups committed to making a difference including:
            <br />
            <br />
            </p>
            <div class="text-center">
                <p>
                <a href="http://www.thebridesproject.org/">The Bride's Project</a>
                <br />
                <a href="http://www.pda.or.th/e_acpd.asp">The Population and Community Development Association</a>
                <br />
                <a href="betterhope.is">BetterHope</a>
            </p>
            </div>
        
<br />
<div class="embed-responsive embed-responsive-16by9">
<iframe width="560" height="315" src="https://www.youtube.com/embed/r45WFYIqTGM" frameborder="0" allowfullscreen></iframe>
</div>
<br />
<br />
    </div>
    
    <div class = "col-md-6 text-center">
    <img class="about_icons" src="img/MSUvUofM.png" alt="MSU and University of Michigan logo"/>
    <h3> Education </h3>
    <p>
    My undergraduate degree is from Michigan State University in Comparative Cultures and Politics. 
    Currently, I'm earning a Masters of Science in Information 
    with a focus in human computer interaction and entrepreneurship from the 
    University of Michigan. 
    </p>
    </div>
   
   <div class = "col-md-6 text-center">
    <img class="about_icons" src="img/soccer.png" alt="World soccer ball with html tags"/>
    <h3>Spare Time</h3>
    <p>
    In my spare time I'm usually being active outdoors somewhere or planning my next trip.
    </p>
    </div>
    
    </div>
</div>

<div class="container">
<div class = "row text-center">
<img class="home_icons" src="img/gear.png" alt="Gear symbolizing the inter-workings of the site"/>
<h3>About This Site</h3>
<p class="col-count-2">
This site is built from the ground-up and is accessible by screenreaders and tab-friendly. 
Sublime was used as the the HTML, CSS, and Javascript editor.
Adobe Suite and SnagIt technologies helped create the images. Twitter's Bootstrap provided the
responsive design. This website is fueled by coffee.
</p>
</div>
</div>

<!--End of Intro Section--> 

 
<!--Start Footer area-->	
<?php 
include("footer.php");
?>
<!--End of Footer Area-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
    
</html>
