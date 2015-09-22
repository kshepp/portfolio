<footer>
<div class= "navbar navbar-inverse navbar-static-bottom" role="navigation">
    <div class="container">
    <div class="navbar-text pull-left">
    </div>
    
    <div class= "navbar-text pull-right">
        <a href="https://twitter.com/oK_Shep">
            <i class="fa fa-twitter-square fa-2x"></i></a>
        <a href="https://www.linkedin.com/profile/view?id=55005282">
            <i class="fa fa-linkedin-square fa-2x"></i></a>
        <a href="https://gist.github.com/kshepp">
            <i class="fa fa-github-square fa-2x"></i></a>
        <a href="https://plus.google.com/u/0/+KristenSheppard07/posts">
            <i class="fa fa-google-plus-square fa-2x"></i></a>
    </div>
    
    <div class="navbar-text pull-left">
    &copy; Kristen Sheppard 2014<br/>

    <?php
     $filename = 'somefile.txt';
        if(basename($_SERVER['SCRIPT_NAME'])) {
            echo "Page was last updated on " . date ("F d Y H:i:s.", filemtime(basename($_SERVER['SCRIPT_NAME'])));
}?>
    </div>
    </div>
</div>	
</footer>
