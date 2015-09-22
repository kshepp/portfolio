<nav>
<div class="navbar navbar-inverse navbar-fixed-top" role = "navigation">
    
   <div class="container-fluid">
   
   <div class="navbar-header">
    
    <button type="button" class="navbar-toggle" data-toggle = "collapse" data-target= ".navbar-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    
    <a class="navbar-brand" href="index.php">Kristen Sheppard</a>
    </div>
    
   <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <!-- <li><a href="index.php">Home</a></li>       
            <li><a href="about.php">About Me</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="badges.php">Badges</a></li>
            <li><a href="resume.php">Resume</a></li> -->


        <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo 'current'; }else { echo ''; } ?>"><a href="index.php">Home</a></li>
        <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'about.php'){echo 'current'; }else { echo ''; } ?>"><a href="about.php">About</a></li>
        <!-- <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'portfolio.php'){echo 'current'; }else { echo ''; } ?>"><a href="portfolio.php">Portfolio</a></li> -->
        <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'badges.php'){echo 'current'; }else { echo ''; } ?>"><a href="badges.php">Badges</a></li>
        <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'resume.php'){echo 'current'; }else { echo ''; } ?>"><a href="resume.php">Resume</a></li>
   
            
            
        </ul>
    </div>   
  
   </div>
</div>

</nav>
