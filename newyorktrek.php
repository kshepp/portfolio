<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>NYC Trek</title>

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
<img class= "nyc" src="img/nyc.png" alt="outline of New York City with the words New York Innovation Trek Underneath"/> 
</div>
</div>

<div class="row">
<div class="col-md-6 text-center">
<div class="nytrek_pics_top">
<img class="broke" src="img/broketeam.jpg" alt="The Broke App Team"/>
</div>
</div>

<div class="row">
<div class="col-md-6 text-left">
    <h3>Badges Earned:</h3>
    <br />
    
    <a href="badges.php">
        <img class="badge_icon" src="img/NYTrek14_participation.png" alt="Entrepreneurship-Ideation New York Trek 2014 Innovator Badge"/>
    Entrepreneurship-Ideation Innovator
    </a>
    <br />
    
    <a href="badges.php">
    <img class="badge_icon" src="img/ideation_CD_beginner_skill.png" alt="Customer Development Beginner Badge"/>
    Customer Development
    </a>
    <br />
    
    <a href="badges.php">
    <img class="badge_icon" src="img/ideation_ISP_beginner_skill.png" alt="Innovation Storytelling Pitch Beginner Badge"/>
    Innovation Storytelling Pitch
    </a>
    <br />
    
    <a href="badges.php">
    <img class="badge_icon" src="img/IdeationDesignThinkingSkill.png" alt="Ideation Design Thinking Skill Badge"/>
    Ideation Design Thinking
    </a>
    <br />
    
    <a href="badges.php">
    <img class="badge_icon" src="img/IdeationDesignThinkingParticipation.png" alt="Ideation Design Thinking Participation Badge"/>
    Ideation Design Thinking
    </a>

</div>
</div>



<div class="row">
    <div class="col-xs-12">
<br />
<p>
This project was a part of the University of Michigan - 
School of Information New York Innovation Trek. Students apply and are selected 
for the opportunity to form an idea around an area of passion, conduct customer 
development for that idea, and formulate a pitch to share with 
entrepreneurs already in the trenches in New York City.
<br />
<br />
Our team, a group of five, formed around a passion for financial literacy. We come from diverse backgrounds 
but hold a common belief that personal finance is a skill everyone should learn. This trek 
emphasized the importance of ideation and customer discovery. We brainstormed, conducted user 
research, and told our user's story and how we thought we could help them.
</p>
    </div>
</div>

<div class="row">
    
    <div class = "col-md-6 text-center">
    <img class="nytrek_pics" src="img/whiteboard.jpg" alt="Image of whiteboard table where initial brainstorm took place"/>
    <br />
    <br />
    <p>
    From the whiteboard..
    </p>
    </div>

    <div class = "col-md-6 text-center">
    <img class="nytrek_pics" src="img/theprob.jpg" alt="Target audience quote that defines our problem"/>
    <br />
    <br />
    <p>
    ..to defining the problem..
    </p>
    </div>

</div>

<div class="row">

    <div class = "col-md-6 text-center">
    <img class="nytrek_pics" src="img/broke.jpg" alt="Twitter feed data of hashtag broke"/>
    <br />
    <br />
    <p>
    ..to discovering the Value Proposition and creating user personas based on interviews and real data..
    </p>
    </div>


    <div class = "col-md-6 text-center">
    <img class="nytrek_pics" id="prototypes" src="img/mockups.jpg" alt="Mock-ups created in photoshop and snagit"/>
    <br />
    <p>
    ..to Designing Prototypes to address contextual inquiries.
    </p>
    </div>


</div>
</div>
<br />

<div class="row">
    <div class="col-xs-12 text-center">
        <p>
            <b>
            A lot has changed with the Broke App since it's beginnings. This project has been iterated and updated 
            continually since the New York Trek in October 2014. There's a lot on this page that is no longer 
            relevant to the 
            project because we have progressed and learned, but I like to keep this page here as a 
            reminder of how far we've come.

            </b>
        </p>
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
