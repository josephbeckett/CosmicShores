<?php
$info ="";
include("session.php");
function displayUser($conn, $login_user) {
    $sql = "SELECT userID, username, password, firstname, lastname, email FROM test
    WHERE userID = '$login_user' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    return $row;
}
function updateUser($conn, $login_user) {
$myfirstname = mysqli_real_escape_string($conn,$_POST["txtFirstname"]);
$mylastname = mysqli_real_escape_string($conn,$_POST["txtLastname"]);
$myemail = mysqli_real_escape_string($conn,$_POST["txtEmail"]);

$sql = "UPDATE test SET firstname = '$myfirstname', lastname = '$mylastname', email =
'$myemail' WHERE userID = '$_SESSION[login_user]' ";
if (mysqli_query($conn, $sql)) {
    $info = "Updated User successfully ";
} else {
    $info = "Error updating User: ". mysqli_error($conn);
}
return $info;
}
function deleteUser($conn, $login_user) {
$sql = "DELETE FROM test WHERE userID = '$_SESSION[login_user]' ";
if (mysqli_query($conn, $sql)) {
    $info = "User deleted successfully";
header("Location: login.php");
} else {
    $info = "Error deleting User: " . mysqli_error($conn);
}
return $info;
}
if(isset($_POST["update"])){
    $info = updateUser($conn, $_SESSION["login_user"]);
    $row = displayUser($conn, $_SESSION["login_user"]);
}
else if (isset($_POST["delete"])){
    $info = deleteUser($conn, $_SESSION["login_user"]);
}
else
{
    $row = displayUser($conn, $_SESSION["login_user"]);
}
mysqli_close($conn);
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
                <label>UserName : <?php echo $row["username"]?></label><br /><br />
                <label>First Name :</label><input type = "text" name = "txtFirstname" value = "<?php
                echo $row["firstname"]?>" class = "box"/><br /><br />
                <label>Last Name :</label><input type = "text" name = "txtLastname" value = "<?php
                echo $row["lastname"]?>" class = "box"/><br /><br />
                <label>Email :</label><input type = "text" name = "txtEmail" value = "<?php echo
                $row["email"]?>"class = "box"/><br /><br />
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