<?php
include("userdetails.php");
?>
<html>
  <head>
	  <title>Profile</title>
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
    <nav class="transparentBG z-depth-0">
        <div class="nav-wrapper">
			<img class="logoPC" src="images/CosmicShoresLogoWithoutLogo.png" alt="">
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
	  <!-- Content -->
    <div class="section">
        <div class="container">
            <div class="col s12 m4 l8">
            <h2 class="flow-text">Profile Details for <?php echo $row["Username"]; ?></h2>
            <p1 class="flow-text"><?php echo "Username: " . $row["Username"] . "</br>"?></p1>
            <p1 class="flow-text"><?php echo "FirstName: " . $row["FirstName"] . "</br>"?></p1>
            <p1 class="flow-text"><?php echo "LastName: " . $row["LastName"] . "</br>"?></p1>
            <p1 class="flow-text"><?php echo "Email: " . $row["Email"] . "</br>"?></p1>
            <p1 class="flow-text"><?php echo "QuestionAnswer: " . $row["QuestionAnswer"] . "</br>"?></p1>
            <p1 class="flow-text"><?php echo "DOB: " . $row["DOB"] . "</br>"?></p1>
            <h2 class="flow-text"><a href="update.php">Update Details</a></h2>
            </div>
        </div>
    </div>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/stylesheet.js"></script>
  </body>
</html>
