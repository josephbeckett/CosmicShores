<?php
include("blogpost.php");
include("config.php");
<<<<<<< HEAD
  if(isset($SESSION['CustomerID'])) {
    header("Location: login.php");
  }
=======
>>>>>>> e30ae430379bea5b7976010975edb4463e616f15
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
            <source src="video/fundo.webm" type="video/webm">
            <source src="images/CosmicShores.mp4" type="video/mp4">
    </video>


	  <!-- Content -->
    <div class="center">
      <?php
        require_once("nbbc/nbbc.php");

        $bbcode = new BBCode;

        $sql = "SELECT * FROM blog ORDER BY PostID DESC";

        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        $posts = "";

        if (mysqli_num_rows($res) > 0) {
            while($row = mysqli_fetch_assoc($res)) {
                $id = $row['PostID'];
                $title = $row['PostTitle'];
                $content = $row['PostContent'];
                $date = $row['PostDate'];

<<<<<<< HEAD
                $admin = "<div><a href='delpost.php?pid=$id'>Delete</a>&nbsp;<a href='editpost.php?pid=$id'>Edit</a></div>";

                $output = $bbcode->Parse($content);
=======
      <?php
        require_once("nbbc/nbbc.php");

        $bbcode = new BBCode;

        $sql = "SELECT * FROM blog ORDER BY id DESC";

        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        $posts = "";

        if (mysqli_num_rows($res) > 0) {
            while($row = mysqli_fetch_assoc($res)) {
                $id = $row['id'];
                $title = $row['title'];
                $content = $row['content'];
                $date = $row['date'];

                $admin = "<div><a href='delpost.php?pid=$id'>Delete</a>&nbsp;<a href='editpost.php?pid=$id'>Edit</a></div>";

                $output = $bbcode->Parse($content);

                $posts .= "<div><h2><a href='viewpost.php?pid=$id'>$title</a></h2><h3>$date</h3><p>$output</p>$admin</div>"; 
            }
            echo $posts
        } else {
            echo "There are no results to display!";
        }
      ?>
>>>>>>> e30ae430379bea5b7976010975edb4463e616f15

                $posts .= "<div><h2><a href='blogpost.php?pid=$id'>$title</a></h2><p>$output</p><h5>$date</h5>$admin</div>"; 
            }
            echo $posts;
        } else {
            echo "There are no results to display!";
        }
      ?>
      </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/stylesheet.js"></script>
  </body>
</html>