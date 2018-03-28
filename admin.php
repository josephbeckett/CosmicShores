<?php
include 'session.php';
if ($_SESSION['admin'] != 1 ) {
  header("Location: login.php");
}

$info = "";

// if(!isset($_GET['uid'])) {
//     header("Location: signup.php");
// }
//
// $pid = $_GET['uid'];
?>
<html>
  <head>
	  <title>Admin Area</title>
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
    <!-- Navbar -->
    <?php
        if($row['Admin'] == 1) {
          include('adminnav.php');
        } else {
          include('usernav.php');
        }
    ?>

	  <!-- Content -->

    <div class="row">
      <div class="container">
        <div class="center">
          <h1 class="flow-text">Support Tickets</h1>
          <h4 class="flow-text"> <?php display_delsupportticket_message(); ?> </h4>
          <h4 class="flow-text"> <?php display_delallsupportticket_message(); ?> </h4>
          <a class="waves-effect waves-light btn" href='truncatesupport.php'>Delete All</a>
          <br />
          <?php
            require_once("nbbc/nbbc.php");

            $bbcode = new BBCode;

            $sql = "SELECT Support.SupportID, Support.PostTitle, Support.PostDescription, Support.PostContent, Support.PostDate, User.Email
                    FROM Support INNER JOIN User WHERE User.CustomerID = Support.CustomerID ORDER BY SupportID DESC";

            $res = mysqli_query($conn, $sql);

            $posts = "";

            if (mysqli_num_rows($res) > 0) {
                while($row = mysqli_fetch_assoc($res)) {
                    $supportid = $row['SupportID'];
                    $title = $row['PostTitle'];
                    $description = $row['PostDescription'];
                    $content = $row['PostContent'];
                    $date = $row['PostDate'];
                    $useremail = $row['Email'];


                    $outputtitle = $bbcode->Parse($title);
                    $outputdescrip = $bbcode->Parse($description);
                    $outputcontent = $bbcode->Parse($content);


                    if ($_SESSION['admin'] == 1 ) {
                        $admin = "<div><a href='delsupportpost.php?supportid=$supportid'>Delete</a></div>";
                    }
                    $posts .= "<div class='container'>
                      <h4 class='flow-text'><a href='support.php?supportid=$supportid'>$outputtitle</a></h4>
                      <p class='flow-text'>$outputdescrip</p>
                      <p class='flow-text'>$outputcontent</p>
                      <p class='flow-text'> submitted by $useremail at : $date</p>$admin
                      </div>";
                }
                echo $posts;
            } else {
                echo "There are no Support tickets to display";
            }
          ?>
        </div>
      </div>
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/stylesheet.js"></script>
  </body>
</html>
