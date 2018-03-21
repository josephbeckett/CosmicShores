<?php
include("config.php");
include("loggingin.php");
ini_set('display_errors', 1);
?>
<html>
  <head>
	  <title>Login</title>
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

<!-- Video Background -->
    <video playsinline autoplay muted loop id="bgvid">
            <source src="images/CosmicShores.mp4" type="video/mp4">
    </video>

<!-- Header -->
<?php
  include 'normalnav.php';
 ?>
	  <!-- Content -->
    <form method="post">
        <div class="container">
            <div class="input-field">
                <input type="text" name="txtUsername" required autofocus >
                <label for="txtUsername">Username</label>
            </div>
            <div class="input-field">
                <input type="password" name="txtPassword" required>
                <label for="txtPassword">Password</label>
            </div>
            <button class="waves-effect waves-light btn" type="submit">Login</button>
        </div>
    </form>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/stylesheet.js"></script>
  </body>
</html>
