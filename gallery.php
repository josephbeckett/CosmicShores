<?php
    include("session.php");
?>
<html>
  <head>
	  <title>Gallery</title>
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
    <video playsinline autoplay muted loop id="bgvid">
      <source src="images/CosmicShores.mp4" type="video/mp4">
    </video>

  </head>

  <body>

  <!-- Navbar -->
  <?php
      if($row['Admin'] == 1) {
        include('adminnav.php');
      } else {
        include('usernav.php');
      }
  ?>
  <div class="center">
  <?php

    $sql = "SELECT Photos.ImageID, Photos.Image, Photos.ImageDate, User.Username FROM Photos INNER JOIN User WHERE User.CustomerID = Photos.CustomerID ORDER BY ImageID DESC";

    $res = mysqli_query($conn, $sql);

    $posts = "";

    if (mysqli_num_rows($res) > 0) {
        while($row = mysqli_fetch_assoc($res)) {
            $photoid = $row['ImageID'];
            $image = $row['Image'];
            $date = $row['ImageDate'];
            $username = $row['Username'];

            if ($_SESSION['admin'] ==1 ) {
                $admin = "<div><a href='delphoto.php?photoid=$photoid'>Delete</a></div>";
            }
            $posts .= "<div class='row'>
                        <div class='col s12 m12 l12'>
                          <div class='container'>
                            <a href='gallery.php?photoid=$photoid'>
                            <img src='uploadedimages/$image'/></a>
                            <p class='flow-text'>posted by $username on $date</p>$admin
                          </div>
                        </div>
                      </div>";
        }
        echo $posts;
    } else {
        echo "There are no photos to view in the gallery.";
    }
  ?>
  </div>
  <div class="row">
    <div class="container">
      <div class="center">
        <form action="uploadphoto.php" method="post" enctype="multipart/form-data">
          <div class="col s8 m8 l8">
            <div class="file-field input-field">
              <div class="waves-effect waves-light btn">
                <span>File</span>
                <input type="file" name="fileToUpload" id="fileToUpload"/>
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
          </div>
            <div class="col s4 m4 l4">
              <div>
                <button class="waves-effect waves-light btn" type="submit" name="Submit ">Upload</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>



    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/stylesheet.js"></script>
  </body>
</html>
