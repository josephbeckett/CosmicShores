<!DOCTYPE html>
<html>
  <head>
	  <title>Best Photos</title>
    <!--Import Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet"> 
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Import  stylesheet.css-->
    <link type="text/css" rel="stylesheet" href="css/stylesheet.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </nav>

    <!-- Photo Grid -->
    <div class="w3-row" id="myGrid" style="margin-bottom:128px">
        <div class="w3-third">
            <img src="images/BestPhoto1.jpg" style="width:100%">
            <img src="images/BestPhoto2.jpeg" style="width:100%">
            <img src="images/BestPhoto3.jpeg" style="width:100%">
            <img src="images/BestPhoto4.jpg" style="width:100%">
            <img src="images/BestPhoto5.jpg" style="width:100%">
            <img src="images/BestPhoto6.jpeg" style="width:100%">
        </div>
    
        <div class="w3-third">
            <img src="images/BestPhoto7.jpg" style="width:100%">
            <img src="images/BestPhoto8.jpg" style="width:100%">
            <img src="images/BestPhoto9.jpg" style="width:100%">
            <img src="images/BestPhoto10.jpg" style="width:100%">
            <img src="images/BestPhoto11.jpg" style="width:100%">
            <img src="images/BestPhoto12.jpg" style="width:100%">
        </div>
    
        <div class="w3-third">
            <img src="images/BestPhoto13.jpg" style="width:100%">
            <img src="images/BestPhoto14.jpg" style="width:100%">
            <img src="images/BestPhoto15.jpg" style="width:100%">
            <img src="images/BestPhoto16.jpg" style="width:100%">
            <img src="images/BestPhoto17.jpg" style="width:100%">
            <img src="images/BestPhoto18.jpg" style="width:100%">
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge font" style="margin-top:128px"> 
        <h1 class="font">So, Do You Like What You See?</h1>
        <a class="waves-effect waves-light btn" href="signup.html" target="_blank">Join Us</a>
    </footer>
	  
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