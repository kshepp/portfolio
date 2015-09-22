<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digital Projects Studio</title>

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

<!--Start of Words-->



<?php include_once("analyticstracking.php") ?>

<div class="container">
    <div class="text-center"
        <div class="row">
            <div class="col-xs-12">
           
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="0">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <!-- <li data-target="#carousel-example-generic" data-slide-to="5"></li> -->
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <a href="https://digitalprojectstudio.wordpress.com/">
      <img src="img/hatcher.jpg" alt="Hatcher Graduate Library photoshoped">
        </a>
    </div>
    <div class="item">
        <a href="https://digitalprojectstudio.wordpress.com/2015/05/28/visualizing-twitter-status-data-with-wordle/">
      <img src="img/wordle.jpg" alt="Wordle example from the blog">
        </a>
    </div>
    <div class="item">
        <a href="https://digitalprojectstudio.wordpress.com/2015/04/21/getting-started-scraping-twitter-data/">
      <img src="img/run_in_terminal.jpg" alt="run in terminal example">
        </a>
    </div>
    <div class="item">
        <a href="https://digitalprojectstudio.wordpress.com/2015/06/25/using-voyant-explore-word-use/">
            <img src="img/voyant.jpg" alt="Using Voyant example from blog">
        </a>
    </div>
    <div class="item">
        <a href="https://digitalprojectstudio.wordpress.com/2015/07/01/stanfords-natural-language-processing-software-text-tagging-and-finding-named-entities/">
      <img src="img/run_ner.jpg" alt="Using the Stanford Named Entity">
  </a>
    </div>
    <!-- <div class="item">
      <img src="img/A_Harvest_of_Happiness.jpg" alt="A Harvest of Happiness Collage">
    </div> -->
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->


            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="xs-col-12">
<br />
<br />
<h2>Digital Projects Studio</h2>
<p>
    The Digital Projects Studio out of the University of Michigan Hatcher Graduate Library is a small group of 
    PhDs and graduate students that help researchers create visualizations of their work. All code written is 
    open source and shared on GitHub.
    <br />
    <br />
    I redesigned the blog to it's current format. My username is shepp07 and you can check out my posts 
    <a href="https://digitalprojectstudio.wordpress.com/author/shepp07/"><b>here.</b></a>
</p>

<h2>Current Projects</h2>
<p>
    Currently working on an open source Django project to make a more flexible version of Omeka, which is a software 
    for libraries and museums to create online exhibits. We're building the project from scratch using Django and 
    using Twitter's bootstrap to make the project responsive and accessible.
</p>
        </div>
    </div>
</div>


 
<!--Start Footer area-->  
<?php 
include ("footer.php");
?>
<!--End of Footer Area-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    
</body>
    
</html>
