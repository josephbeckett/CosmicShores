<!DOCTYPE html>
<html>
  <head>
	  <title>About</title>
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
		  .collection{
		  	background-color: #ffffff;
			border: 6px solid;
		  }
		  hr{
		  	background-color: #a7adba;
		  }
	  </style>
  </head>
<!-- Navbar -->
  <body class="backcolor">
    <nav class="normalNav">
        <div class="nav-wrapper">
            <img src="images/CosmicShoresLogoWithoutLogo.png" alt="">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </nav>
	<!-- Content cards -->
    <div class="container font"> 
        <div class="row">
            <div class="col s12 m12 l6">
                <div class="card">
                    <div class="card-image">
                        <img src="images/bestPhotoLogo.jpeg">
                        <span class="card-title">Best Member Photos</span>
                    </div>
                    <div class="card-content">
                        <p>Here is a collection of all the best selected photos from our members. Please enjoy.</p>
						<a class="wave-effect btn" href="BestPhotos.html">See More</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l6">
                <div class="card">
                    <div class="card-image">
                        <img src="images/memberPhoto.jpeg">
                        <span class="card-title">Want to Become a Member</span>
                    </div>
                    <div class="card-content">
                        <p>If you're interesting in become part of our astronomical society, then don't hesitate to sign up.</p>
						<a class="wave-effect btn" href="signup.html">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	  <div class="container font center">
		  <div class="col s12 m12 l3">
			  <h3> About Our Society </h3>
				<img src="images/CosmicShoresLogo2WithoutBackground.png">
			  <br>
			<p> We are a non-profit society dedicated to everything Space based, so whether you're a professional or amateur you're welcome to join us and share your knowledge and passion with us </p>
		  </div>
	  </div> 
	<div class="container font">
	  <ul class="collection">
		  <h3 class="center"> Our Society Leaders </h3>
		  <hr>
		<li class="collection-item avatar">
		  <img src="images/profileImgJake.jpeg" alt="" class="circle">
		  <span class="title">Jake Surtes</span>
		  <p>Group Founder <br>
			 Hobbyist Photographer
		  </p>
		</li>
		<li class="collection-item avatar">
		   <img src="images/profileImgMegan.jpeg" alt="" class="circle">
		  <span class="title">Megan Castor</span>
		  <p>Co-Founder<br>
			 Novice Photographer
		  </p>
		</li>
		<li class="collection-item avatar">
		   <img src="images/profileImgJames.jpeg" alt="" class="circle">
		  <span class="title">James Satworth</span>
		  <p> Event Organiser <br>
			 Professional Photographer
		  </p>
		</li>
		<li class="collection-item avatar">
		   <img src="images/profileImgNatalie.jpeg" alt="" class="circle">
		  <span class="title">Natalie Handsworth</span>
		  <p> Financier <br>
			 Amateur Photographer
		  </p>
		</li>
	  </ul>
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