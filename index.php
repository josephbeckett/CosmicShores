<!DOCTYPE html>
<html>
  <head>
	  <title>Home</title>
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
	  <!-- Content -->
	  <div class="container font center">
		  <div class="col s12 m12 l3">
			  <h1> Cosmic Shores </h1>
			  <h3> Amateur Astronomy Society</h3>
			  <br>
			  <a href="signup.html" class="wave-effect waves-light btn"> Want to become a member?</a>
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