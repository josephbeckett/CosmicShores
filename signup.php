<?php
include("config.php");
include("creatinguser.php");
$info = "";
?>
<html>
  <head>
	  <title>Sign Up</title>
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
    <video muted playsinline autoplay loop id="bgvid">
        <source src="video/fundo.webm" type="video/webm">
        <source src="images/CosmicShores.mp4" type="video/mp4">
    </video>
<!-- Navbar -->
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
<!-- Content Form -->
    <div class="section">
        <div class="container">
            <div class="row">
                <form class="col s12" action="" method="post">
                    <div class="row">
                    <div class="input-field col s6">
                        <input name="txtFirstName" type="text">
                        <label for="txtFirstName">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="txtLastName" type="text">
                        <label for="txtLastName">Last Name</label>
                    </div>
                    </div>
					<div class="row">
                    <div class="input-field col s12">
                        <input name="txtUsername" type="text">
                        <label for="txtUsername">Username</label>
                    </div>
                    </div>
                    <div class="row">
                    <div class="input-field col s12">
                        <input id="password" name="txtPassword" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required  class="validate">
                        <label for="txtPassword">Password</label>
                    </div>
                    </div>
					<div class="container" id="message" for="txtPassword">
					  <h6>Password must contain the following:</h6>
						<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
						<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
						<p id="number" class="invalid">A <b>number</b></p>
						<p id="length" class="invalid">Minimum <b>8 characters</b></p>
					</div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="txtEmail" type="email" class="validate">
                            <label for="txtEmail" data-error="wrong" data-success="right">Email</label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <select name="txtQuestionAnswer">
                            <option value="" disabled selected>What skill level are you at Photography?</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Novice">Novice</option>
                            <option value="Hobbyist">Hobbyist</option>
                            <option value="Competent">Competent</option>
                        </select>
                        <label data-error="wrong" data-success="right" ></label>
                    </div>
                    <div class="row">
                    <div class="input-field col s12">
                        <input name="txtDOB" type="text" class="datepicker">
                        <label for="txtDOB" data-error="wrong" data-success="right">Date Of Birth</label>
                    </div>
                    </div>
                    <button class="waves-effect waves-light btn" name="Submit"type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
	<?php echo ($info);?>
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
