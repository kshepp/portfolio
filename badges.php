<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Badges</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet"> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
$( "#target1" ).hide();
});
  $(document).ready(function(){
  $("#badge1show").click(function(){
    $("#target1").show(2000);
  });

  $("#badge1hide").click(function(){
    $("#target1").hide(2000);
  });
  
});
</script>

<script>
$(document).ready(function(){
$( "#target2" ).hide();
});
  $(document).ready(function(){
  $("#badge2show").click(function(){
    $("#target2").show(2000);
  });

  $("#badge2hide").click(function(){
    $("#target2").hide(2000);
  });
  
});
</script>

<script>
$(document).ready(function(){
$( "#target3" ).hide();
});
  $(document).ready(function(){
  $("#badge3show").click(function(){
    $("#target3").show(2000);
  });

  $("#badge3hide").click(function(){
    $("#target3").hide(2000);
  });
  
});
</script>


<script>
$(document).ready(function(){
$( "#target4" ).hide();
});
  $(document).ready(function(){
  $("#badge4show").click(function(){
    $("#target4").show(2000);
  });

  $("#badge4hide").click(function(){
    $("#target4").hide(2000);
  });
  
});
</script>


<script>
$(document).ready(function(){
$( "#target5" ).hide();
});
  $(document).ready(function(){
  $("#badge5show").click(function(){
    $("#target5").show(2000);
  });

  $("#badge5hide").click(function(){
    $("#target5").hide(2000);
  });
  
});
</script>

</head>  




<!--Start of Navbar area-->	

<header>
<?php 
include ("nav.php");
?>
</header>
<!--End of Navbar area-->	



<?php include_once("analyticstracking.php") ?>

<div class="container">
<div class="row">
<h3><b>What are Digital Badges?</b></h3>
<p class="text-center"><b>"</b>A badge is a symbol or indicator of an accomplishment, 
	skill, quality or interest. A “digital badge” is an online record of achievements, 
	tracking the recipient’s communities of interaction that issued the badge and 
	the work completed to get it. Digital badges can support connected learning 
	environments by motivating learning and signaling achievement both within particular 
	communities as well as across communities and institutions.<b>"</b> 
  <br />
  <br />
  <em>-Mozilla Foundation</em></p>  
</div>

<div class="row">
<h3><b>Why are they on your portfolio site?</b></h3>
<p class="text-center"> 
  Because why not? Also I use to be a Girl Scout so that might be part of the draw. Plus badges are a fun 
  illustrative way to show skill sets.
</p>  
</div>

<div class="container">
<div class="row">

<div class="col-md-6 text-center">
 <div class="badge">
 <img src="img/NYTrek14_participation.png" alt="Entrepreneurship-Ideation New York Trek 2014 Innovator Badge">
 </div>
 <p><b>Innovator</b></p>
<button id="badge5show">SHOW</button>
<button id="badge5hide">HIDE</button>
 <p id="target5">
 Attended at least 3 of the 5 preparation sessions prior to the NY 2014 Trek as well as 5/6 site tours in 
 New York City. Site tours included: JSTOR, Next Big Sound, Tumblr, New York Public Library Digital Labs, 
 Startup Health, and TechStars.
 </p>
</div>



<div class="col-md-6 text-center">
 <div class="badge">
 <img src="img/ideation_CD_beginner_skill.png" alt="Customer Development Beginner Badge">
 </div>

 <p><b>Customer Development</b></p>
<button id="badge4show">SHOW</button>
<button id="badge4hide">HIDE</button>
 <p id="target4">
 	The earner has participated in a workshop designed to expose him or her to the early stages of 
  customer development. In this particular instance, participants use the KJ method of contextual 
  inquiry to frame interviews. The person who earned this badge has participated in at least two 
  rounds of customer development through interviews and has captured those interviews in written or 
  audio files to analyze.
 </p>
</div>

</div>

<br />
<br />



<div class="row">
<div class="col-md-6 text-center">
 <div class="badge">
 <img src="img/ideation_ISP_beginner_skill.png" alt="Innovation Storytelling Pitch Beginner Badge">
 </div>

 <p><b>Innovation Storytelling Pitch</b></p>
<button id="badge3show">SHOW</button>
<button id="badge3hide">HIDE</button>
 <p id="target3">
 The earner has participated in a workshop designed to expose him or her to the basic components of pitching. 
 The person earning this badge demonstrates a basic understanding of how to frame a short, targeted, and 
 persuasive presentation that addresses: an identified problem in the words of a potential customer, the 
 specific customer niche, and what your minimum viable product will be to solve the identified problem.
 </p>
</div>


<div class="col-md-6 text-center">
 
 <div class="badge">
 <img src="img/IdeationDesignThinkingSkill.png" alt="Ideation Design Thinking Skill Badge">
 </div>

 <p><b>Ideation Design Thinking</b></p>
<button id="badge2show">SHOW</button>
<button id="badge2hide">HIDE</button>
 <p id="target2">
The earner has participated in a Crash Course in Design Thinking workshop. Generally this is a course 
branded by the Hasso Plattner Institute of Design at Stanford University. Instead of just telling you 
about design thinking, you immediately jump right in and experience it for yourself by completing a design 
project in about one and a half hours. Design Thinking is an iterative, self-directed process with five 
steps that are cycled through several times during the workshop: Empathize, Define, Ideate, Prototype, Test.
 </p>

</div>
</div>

<br />
<br />


<div class="row">

<div class="col-md-6 text-center">
 
 <div class="badge">
 <img src="img/IdeationDesignThinkingParticipation.png" alt="Ideation Design Thinking Participation Badge">
 </div>

 <p><b>Ideation Design Thinking Participation</b></p>
<button id="badge1show">SHOW</button>
<button id="badge1hide">HIDE</button>
 <p id="target1">
 The earner has participated in a Crash Course in Design Thinking workshop. Generally this is a course 
 branded by the Hasso Plattner Institute of Design at Stanford University. Instead of just telling you 
 about design thinking, you immediately jump right in and experience it for yourself by completing a design 
 project in about 80 minutes. Design Thinking is an iterative, self-directed process with five steps that 
 are cycled through several times during the workshop: Empathize, Define, Ideate, Prototype, Test.
 </p>
</div>


</div>
</div>

</div>
<br />
<br /> 
<!--Start Footer area-->	
<?php 
include ("footer.php");
?>
<!--End of Footer Area-->



<script src="js/bootstrap.min.js"></script>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
    
</body>
    
</html>
