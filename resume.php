<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Resume</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
     
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<link href="css/custom.css" rel="stylesheet"> 


</head>  



<body>
<?php include_once("analyticstracking.php") ?>
<!--Start of Navbar area--> 

<header>
<?php 
include ("nav.php");
?>
</header>
<!--End of Navbar area--> 

<!--Start of Words-->


<div class="container">
<div class="row">
	<div class="xs-col-12">
		<div class= "navbar-text pull-right">
        <a href="download/Resume.pdf" target="blank">
            <i class="fa fa-download fa-2x"></i></a>
        </div>
<img class="resume" src="img/Resume.png" alt="Kristen's Resume"/>
	<div class="text-center">
	<p>
		<b>Requests for full resume can be sent to shepp@umich.edu</b>
	</p>	
</div>
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
