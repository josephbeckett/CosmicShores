<?php
include("updatinguserdetails.php");
$info ="";
?>
<html>
  <head>
	  <title>Update Profile</title>
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
    <div class="section">
        <div class="container">
            <form action = "" method = "post">
                <label>Username : <?php echo $row["Username"]?></label><br /><br />
                <label>First Name :</label><input type = "text" name = "txtFirstname" value = "<?php
                echo $row["FirstName"]?>" class = "box"/><br /><br />
                <label>Last Name :</label><input type = "text" name = "txtLastname" value = "<?php
                echo $row["LastName"]?>" class = "box"/><br /><br />
                <label>Email :</label><input type = "text" name = "txtEmail" value = "<?php echo
                $row["Email"]?>"class = "box"/><br /><br />
                <button class="waves-effect waves-light btn" type="submit" name="update">Update</button>
                <button class="waves-effect waves-light btn" type="submit" name="delete">Delete</button>   
            </form>
            <h2><a href="dashboard.php">Return to Dashboard</a></h2>
            <h2><a href = "login.php">Sign Out</a></h2>
            <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $info;
            ?></div>
        </div>
    </div>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/stylesheet.js"></script>
  </body>
</html>