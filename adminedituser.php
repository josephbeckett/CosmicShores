<?php
    include("session.php");
    if ($_SESSION['admin'] != 1 ) {
      header("Location: login.php");
    }
    if(!isset($_GET['custid'])) {
        header("Location: adminuserview.php");
    }

    $custid = $_GET['custid'];

    if(isset($_POST['update'])) {
      $myusername =mysqli_real_escape_string($conn,$_POST["txtUsername"]);
      $myfirstname = mysqli_real_escape_string($conn,$_POST["txtFirstName"]);
      $mylastname = mysqli_real_escape_string($conn,$_POST["txtLastName"]);
      $myemail = mysqli_real_escape_string($conn,$_POST["txtEmail"]);
      $mydob = mysqli_real_escape_string($conn, $_POST["txtDOB"]);
      $myadmin = mysqli_real_escape_string($conn, $_POST["txtAdmin"]);


      $sql = "UPDATE User SET Username = '$myusername', FirstName = '$myfirstname', LastName = '$mylastname', Email =
      '$myemail', DOB = '$mydob', Admin = '$myadmin' WHERE CustomerID = '$custid' ";
      mysqli_query($conn, $sql);
      header("Location: adminuserview.php");
    }


?>

<html>
    <head>
        <!--Import Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Import  stylesheet.css-->
        <link type="text/css" rel="stylesheet" href="css/stylesheet.css"  media="screen,projection"/>
        <title>Blog - Post</title>
    </head>
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
        <?php

        $sql_get = "SELECT * FROM User WHERE CustomerID = '$custid' ";
        $res = mysqli_query($conn, $sql_get);

        if(mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $username = $row['Username'];
                $firstname = $row['FirstName'];
                $lastname = $row['LastName'];
                $email = $row['Email'];
                $DOB = $row['DOB'];
                $admin = $row['Admin'];
            }
        }


		echo "<form action='adminedituser.php?uid=$uid' method='post' enctype='multipart/form-data'>";
    include 'userform.php';
        ?>
				      <button class="waves-effect waves-light btn" name="update" type="submit">Update</button>
            </div>
          </div>
        </form>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/stylesheet.js"></script>
    </body>
</html>
