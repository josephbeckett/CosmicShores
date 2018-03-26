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
<!-- Video Background -->
    <video muted playsinline autoplay loop id="bgvid">
        <source src="images/CosmicShores.mp4" type="video/mp4">
    </video>
<!-- Navbar -->
<?php
  include 'normalnav.php';
 ?>
<!-- Content Form -->
    <div class="section">
        <div class="container">
            <div class="row">
                <form class="col s12" action="" method="post">
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="txtFirstName" type="text" required>
                            <label for="txtFirstName">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="txtLastName" type="text" required>
                            <label for="txtLastName">Last Name</label>
                        </div>
                    </div>
					<div class="row">
                        <div class="input-field col s12">
                            <input class="validate" name="txtUsername" type="text" required>
                            <label for="txtUsername">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" name="txtPassword" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required  class="validate">
                            <label for="txtPassword">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container" id="message" for="txtPassword">
                        <h6>Password must contain the following:</h6>
                            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                            <p id="number" class="invalid">A <b>number</b></p>
                            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="txtEmail" type="email" class="validate" required>
                            <label for="txtEmail" data-error="wrong" data-success="right">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="txtQuestionAnswer" required>
                                <option value="" disabled selected>What skill level are you at Photography?</option>
                                <option value="Beginner">Beginner</option>
                                <option value="Novice">Novice</option>
                                <option value="Hobbyist">Hobbyist</option>
                                <option value="Competent">Competent</option>
                                <option value="Professional">Professional</option>
                            </select>
                            <label data-error="wrong" data-success="right" ></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="txtDOB" type="text" class="datepicker" required>
                            <label for="txtDOB" data-error="wrong" data-success="right">Date Of Birth</label>
                        </div>
                    </div>
                    <button class="waves-effect waves-light btn" name="Submit"type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
	<?php echo ($info);?>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/stylesheet.js"></script>
  </body>
</html>
