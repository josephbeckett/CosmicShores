<?php
include("session.php");
$sql = "SELECT CustomerID, Username, Password, FirstName, LastName, Email, QuestionAnswer, DOB FROM User WHERE customerID = '$_SESSION[login_user]'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
mysqli_close($conn);
?>