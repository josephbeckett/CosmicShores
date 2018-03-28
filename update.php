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
    <div class="section">
        <div class="container">
            <div class="row">
                <form action = "" method = "post">
                    <div class="row">
                        <div class="input-field col s12">
                            <label>Username : </label>
                            <input type = "text" name = "txtUsername" value = "<?php echo $row["Username"]?>" class = "box"/><br /><br />
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <label>First Name :</label>
                            <input type = "text" name = "txtFirstName" value = "<?php echo $row["FirstName"]?>" class = "box"/><br /><br />
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <label>Last Name :</label>
                            <input type = "text" name = "txtLastName" value = "<?php echo $row["LastName"]?>" class = "box"/><br /><br />
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <label>Email :</label>
                            <input type = "text" name = "txtEmail" value = "<?php echo $row["Email"]?>" class = "box"/><br /><br />
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="txtDOB" type="text" class="datepicker" value="<?php echo $row["DOB"] ?>">
                            <label for="txtDOB" data-error="wrong" data-success="right">Date Of Birth</label>
                        </div>
                    </div>
                    <button class="waves-effect waves-light btn" type="submit" name="update">Update</button>
                    <button class="waves-effect waves-light btn" type="submit" name="delete">Delete</button>
                </form>
            <div><?php echo $info; ?></div>
            </div>
        </div>
    </div>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/stylesheet.js"></script>
  </body>
</html>
