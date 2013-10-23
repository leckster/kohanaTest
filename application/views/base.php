<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>RaceEntry Blog</title>
    <!-- this is how, you you can add a css file -->
    <?php echo HTML::style("public/css/base.css"); ?>
    <!-- this is how, you you can add a javascript file -->
    <?php echo HTML::script("public/js/jquery-1.6.4.js"); ?>
</head>
 
<body>
<div id="wrapper">
    <!-- Header for the site -->
    <div id="header"><h1>RaceEntry Blog</h1></div>
     
    <!-- Menu for the site -->
    <div id="navlist">
        <ul>
            <li><?php echo HTML::anchor("", "Home"); ?></li>
            <li><?php echo HTML::anchor("article", "Articles"); ?></li>
            <li><?php echo HTML::anchor("article/edit", "New Article"); ?></li>
        </ul>
    </div>
     
    <!-- here we load all content -->
    <div id="content">
        <?php echo $content; ?>
    </div>
     
    <!-- no footer added -->
</div>
</body>
</html>