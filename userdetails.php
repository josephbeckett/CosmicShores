<?php
include("session.php");
$sql = "SELECT CustomerID, Username, Password, FirstName, LastName, Email, QuestionAnswer, DOB, Admin  FROM User WHERE CustomerID = '$_SESSION[login_user]'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
mysqli_close($conn);
?>