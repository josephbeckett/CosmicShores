<?php
  include 'session.php';
  if ($_SESSION['admin'] != 1 ) {
    header("Location: login.php");
  }

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
    <div class="row">
      <div class="container">
        <div class="center">
          <h1 class="flow-text">User Accounts</h1>
        <?php

          $sql = "SELECT * FROM User ORDER BY CustomerID ASC";

          $res = mysqli_query($conn, $sql);

          $users = "";

          if (mysqli_num_rows($res) > 0) {
              while($row = mysqli_fetch_assoc($res)) {
                  $customerid = $row['CustomerID'];
                  $username = $row['Username'];
                  $firstname = $row['FirstName'];
                  $lastname = $row['LastName'];
                  $email = $row['Email'];
                  $adminsetting = $row['Admin'];


                  if ($_SESSION['admin'] == 1 ) {
                      $admin = "<div><a href='admindeluser.php?uid=$customerid'>Delete User</a>&nbsp;<a href='adminedituser.php?uid=$customerid'>Edit User</a></div>";
                  }

                  $users.= "
                    <div class='row'>
                      <div class='container'>
                      <div class='col s12'>
                        <div class='card blue-grey darken-2'>
                          <div class='card-content white-text'>
                            <p>CustomerID: $customerid</p>
                            <p>Username: $username</p>
                            <p>Firstname: $firstname</p>
                            <p>Surname: $lastname</p>
                            <p>Email: $email</p>
                            <p>Admin: $adminsetting</p>
                        </div>
                        <div class='card-action'>
                          $admin
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                    ";
              }
              echo $users;
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
