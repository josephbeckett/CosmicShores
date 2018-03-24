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

    <style>
    html {
      overflow-y: hidden;
    }
    </style>

  </head>
<!-- Start of body -->
  <body>

<!-- Video Background -->
    <video playsinline autoplay muted loop id="bgvid">
            <source src="images/CosmicShores.mp4" type="video/mp4">
    </video>

<!-- Header -->
<?php
    if($row['Admin'] == 1) {
      include('adminnav.php');
    } else {
      include('usernav.php');
    }
?>
	  <!-- Content -->
    <div class="container">
      <div class="row">
        <div class="col s12 m12 l12">
          <div class="card blue-grey darken-2">
            <div class="card-content white-text">
              <h2 class="flow-text">Profile Details for <?php echo $row["Username"]; ?></h2>
              <p1 class="flow-text"><?php echo "Username: " . $row["Username"] . "</br>"?></p1>
              <p1 class="flow-text"><?php echo "FirstName: " . $row["FirstName"] . "</br>"?></p1>
              <p1 class="flow-text"><?php echo "LastName: " . $row["LastName"] . "</br>"?></p1>
              <p1 class="flow-text"><?php echo "Email: " . $row["Email"] . "</br>"?></p1>
              <p1 class="flow-text"><?php echo "Photography Level: " . $row["QuestionAnswer"] . "</br>"?></p1>
              <p1 class="flow-text"><?php echo "DOB: " . $row["DOB"] . "</br>"?></p1>
              <div class="card-action">
                <p1 class="flow-text"><a href="update.php">Update Details</a></p1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/stylesheet.js"></script>
  </body>
</html>
