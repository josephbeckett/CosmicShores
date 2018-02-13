<?php
include("userdetails.php");
?>
<html>
  <head>
	  <title>Dashboard</title>
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

  </head>
<!-- Start of body -->
  <body>
	  
<!-- Page loading transition -->
    <div class="preloader-background">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue-only">
                <div class="circle-clipper left">
                <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
                </div><div class="circle-clipper right">
                <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
<!-- Video Background -->
    <video playsinline autoplay muted loop id="bgvid">
            <source src="video/fundo.webm" type="video/webm">
            <source src="images/CosmicShores.mp4" type="video/mp4">
    </video>

<!-- Header -->
    <nav class="transparentBG z-depth-0">
        <div class="nav-wrapper">
			<img class="logoPC" src="images/CosmicShoresLogoWithoutLogo.png" alt="">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="profile.php">Profile</a></li>
                <li><a href="about.php">Blog</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="support.php">Support</a></li>
                <li><a href="login.php">Sign out</a></li>
                
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="profile.php">Profile</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="login.php">Sign out</a></li>
            </ul>
        </div>
    </nav>
	  <!-- Content -->
    <div class="container font center">
        <div class="col s12 m12 l3">
            <h1>Welcome <?php echo $row["Username"]; ?></h1>
        </div>
    </div> 


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/stylesheet.js"></script>
  </body>
</html>