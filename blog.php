<?php
  include("session.php");

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
    <!-- Header -->
    <?php
        if($row['Admin'] == 1) {
          include('adminnav.php');
        } else {
          include('usernav.php');
        }
    ?>

	  <!-- Content -->
    <div class="center">
      <?php
        // $sql1 = " SELECT user.Username
        //   FROM user
        //   INNER JOIN blog
        //   ON user.CustomerID = blog.CustomerID";
        // $query1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
        // while($row1 = mysqli_fetch_array($query1, MYSQLI_ASSOC)) {
        //   $username = $row["Username"];
        // }
        // $sql ="SELECT user.Username FROM user INNER JOIN blog ON user.CustomerID = blog.CustomerID";

        require_once("nbbc/nbbc.php");

        $bbcode = new BBCode;

        $sql = "SELECT blog.PostID, blog.PostTitle, blog.PostContent, blog.PostDate, user.Username FROM blog INNER JOIN user ON user.CustomerID = blog.CustomerID ORDER BY PostID DESC";

        $res = mysqli_query($conn, $sql);

        $posts = "";

        if (mysqli_num_rows($res) > 0) {
            while($row = mysqli_fetch_assoc($res)) {
                $id = $row['PostID'];
                $title = $row['PostTitle'];
                $content = $row['PostContent'];
                $date = $row['PostDate'];
                $username = $row["Username"];

                $output = $bbcode->Parse($content);
                if ($_SESSION['admin'] ==1 ) {
                    $admin = "<div><a href='delpost.php?pid=$id'>Delete</a>&nbsp;<a href='editpost.php?pid=$id'>Edit</a></div>";
                }
                $posts .= "<div class='container'><h2 class='flow-text'><a href='blogpost.php?pid=$id'>$title</a></h2><p>$output</p><p class='flow-text'>posted by $username on $date</p></div>";
            }
            echo $posts;
        } else {
            echo "There are no posts on the blog to view.";
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
