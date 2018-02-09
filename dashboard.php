<?php
include('session.php');

$sql = "SELECT userID, username, password, firstname, lastname, email FROM User WHERE userID = '$_SESSION[login_user]'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
mysqli_close($conn);
?>
<html>

<head>
<title>Dashboard</title>
</head>

<body>
<h1>Welcome <?php echo $row["firstname"]; ?></h1>
<?php echo "Username: " . $row["username"] . "</br>"?>
<?php echo "Firstname: " . $row["firstname"] . "</br>"?>
<?php echo "Lastname: " . $row["lastname"] . "</br>"?>
<?php echo "Email: " . $row["email"] . "</br>"?>
<h2><a href="update.php">Update Details</a></h2>
<h2><a href = "login.php">Sign Out</a></h2>

</body>

</html>