<!DOCTYPE html>
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
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="signup.html">Sign Up</a></li>
                <li><a href="#modal1" class="modal-trigger">Login</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="signup.html">Sign Up</a></li>
                <li><a href="#modal1" class="modal-trigger">Login</a></li>
            </ul>
        </div>
    </nav>
<!-- Parallax -->
    <div class="parallax-container">
        <div class="parallax"><img src="images/parallax1.jpeg"></div>
    </div>
    <div class="section">
        <div class="row container">
            <h2 class="header">DSLR Camera Photos</h2>
            <a href="DLSRPhotos.html"class="waves-effect waves-light btn">See More</a>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="images/parallax2.jpeg"></div>
    </div>
    <div class="section">
        <div class="row container">
            <h2 class="header">Normal Telescope Photos</h2>
            <a href="NormalTelescopePhotos.html" class="waves-effect waves-light btn">See More</a>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="images/parallax3.jpg"></div>
    </div>
    <div class="section">
        <div class="row container">
            <h2 class="header">Refraction Telescope</h2>
            <a href="RefractionPhotos.html" class="waves-effect waves-light btn">See More</a>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="images/parallax4.jpg"></div>
    </div>
    <div class="section ">
        <div class="row container">
            <h2 class="header">Reflection Telescope</h2>
            <a href="ReflectionPhotos.html" class="waves-effect waves-light btn">See More</a>
        </div>
    </div>
	  
    <!-- Modal Structure -->
    <div id="modal1" class="modal font">
        <div class="modal-content">
			<div class="container">
				<div class="input-field">
					<input type="text" id="username" required>
					<label for="username">Username</label>
				</div>
				<div class="input-field">
					<input type="password" id="password" required>
					<label for="password">Password</label>
				</div> 
				<a class="waves-effect waves-light" type="submit">Login</a>
			  </div>
		</div>
    </div>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/stylesheet.js"></script>
  </body>
</html>