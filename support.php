<?php
include("userdetails.php");
include("supportticket.php")
$info = "Problem Submitted";
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
		<li><a href="support.php">Support</a></li>
		<li><a href="login.php">Sign out</a></li>
            </ul>
        </div>
    </nav>
    <!-- Content -->
    <div class="container font center">
        <div class="col s12 m12 l3">
		<h3>Hello <?php echo $row["Username"]; ?></h3>
		<h4>What is your problem?</h4>
	</div>
    </div> 
    <!-- Support Form -->
	<form method="post">
		<div class="container">
			<div class="input-field">
				<input type="text" name="txtProblemTitle" required data-length"100">
				<label for="txtProblemTitle">Problem Title</label>
			</div>
			<div class="input-field col s12">
				<textarea id="txtProblemSubtitle" class="materialize-textarea" data-length="200"></textarea>
				<label for="txtProblemSubtitle">Problem Description</label>
			</div>
            <div class="input-field col s12">
                <textarea id="txtProblemContent" class="materialize-textarea" data-length="500"></textarea>
				<label for="txtProblemContent">Problem Content</label>
			</div>
            <div class="input-field">
				<input type="text" name="txtValidation" required data-length"100">
				<label for="txtValidation">Enter Username or Email</label>
			</div>
			<button class="waves-effect waves-light btn" type="submit">Submit</button>
		</div>
	</form>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/stylesheet.js"></script>
  </body>
</html>
