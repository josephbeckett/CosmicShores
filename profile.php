<?php
include('session.php');

$sql = "SELECT CustomerID, Username, Password, FirstName, LastName, Email, QuestionAnswer, DOB FROM User WHERE customerID = '$_SESSION[login_user]'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
mysqli_close($conn);
?>
<html>

<head>
<title>Test Dashboard</title>
</head>

<body>
<h1>Welcome <?php echo $row["FirstName"]; ?></h1>
<?php echo "Username: " . $row["Username"] . "</br>"?>
<?php echo "FirstName: " . $row["FirstName"] . "</br>"?>
<?php echo "LastName: " . $row["LastName"] . "</br>"?>
<?php echo "Email: " . $row["Email"] . "</br>"?>
<?php echo "QuestionAnswer: " . $row["QuestionAnswer"] . "</br>"?>
<?php echo "DOB: " . $row["DOB"] . "</br>"?>
<h2><a href="update.php">Update Details</a></h2>
<h2><a href = "login.php">Sign Out</a></h2>

</body>

</html>