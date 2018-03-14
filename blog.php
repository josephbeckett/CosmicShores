<?php
  include("session.php");

  if(isset($_SESSION['CustomerID'])) {
    header("Location: login.php");
  }

?>
<html>
  <head>
	  <title>Blog</title>
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
                <li><a href="login.php">Sign out</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href ="loginhomepage.php">Dashboard</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="login.php">Sign out</a></li>
            </ul>
        </div>
    </nav>

	  <!-- Content -->
    <div class="center">
      <?php
        require_once("nbbc/nbbc.php");

        $bbcode = new BBCode;

        $sql = "SELECT * FROM Blog ORDER BY PostID DESC";

        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        $posts = "";

        if (mysqli_num_rows($res) > 0) {
            while($row = mysqli_fetch_assoc($res)) {
                $id = $row['PostID'];
                $title = $row['PostTitle'];
                $content = $row['PostContent'];
                $date = $row['PostDate'];

                $admin = "<div><a href='delpost.php?pid=$id'>Delete</a>&nbsp;<a href='editpost.php?pid=$id'>Edit</a></div>";

                $output = $bbcode->Parse($content);

                $posts .= "<div class='container'><h2 class='flow-text'><a href='blogpost.php?pid=$id'>$title</a></h2><p>$output</p><h5 class='flow-text'>$date</h5>$admin</div>"; 
            }
            echo $posts;
        } else {
            echo "There are no results to display!";
        }
      ?>

    <br />

    <a class="waves-effect waves-light btn" href="blogpost.php">Post</a>
  </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/stylesheet.js"></script>
  </body>
</html>