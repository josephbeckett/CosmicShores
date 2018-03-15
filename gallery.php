<?php
    include("session.php");
    

?>
<html>
  <head>
	  <title>Gallery</title>
    <!--Import Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Import  stylesheet.css-->
    <link type="text/css" rel="stylesheet" href="css/stylesheet.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <style>
		  body{
		  	background-color: #a7adba;
		  }
	  </style>


  </head>

  <body>

<!-- Navbar -->
    <nav class="normalNav">
        <div class="nav-wrapper">
            <img src="images/CosmicShoresLogoWithoutLogo.png" alt="">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href ="loginhomepage.php">Dashboard</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="logout.php">Sign out</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href ="loginhomepage.php">Dashboard</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="logout.php">Sign out</a></li>
            </ul>
        </div>
    </nav>

<!-- Parallax -->
    <div class="parallax-container">
        <div class="parallax"><img src="images/parallax1.jpeg"></div>
    </div>
    <div class="section">
        <div class="row container">
            <h2 class="header flow-text">DSLR Camera Photos</h2>
            <a href="DLSRPhotos.html"class="waves-effect waves-light btn">See More</a>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="images/parallax2.jpeg"></div>
    </div>
    <div class="section">
        <div class="row container">
            <h2 class="header flow-text">Normal Telescope Photos</h2>
            <a href="NormalTelescopePhotos.html" class="waves-effect waves-light btn">See More</a>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="images/parallax3.jpg"></div>
    </div>
    <div class="section">
        <div class="row container">
            <h2 class="header flow-text">Refraction Telescope</h2>
            <a href="RefractionPhotos.html" class="waves-effect waves-light btn">See More</a>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="images/parallax4.jpg"></div>
    </div>
    <div class="section ">
        <div class="row container">
            <h2 class="header flow-text">Reflection Telescope</h2>
            <a href="ReflectionPhotos.html" class="waves-effect waves-light btn">See More</a>
        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/stylesheet.js"></script>
  </body>
</html>
