<?php
include("includes\config.php");
session_start();
$info = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
// username and password sent from form

    $myfirstname = mysqli_real_escape_string($conn,$_POST["txtFirstName"]);
    $mylastname = mysqli_real_escape_string($conn,$_POST["txtLastName"]);
    $myusername = mysqli_real_escape_string($conn,$_POST["txtUsername"]);
    $mypassword = mysqli_real_escape_string($conn,$_POST["txtPassword"]);
    $myemail = mysqli_real_escape_string($conn,$_POST["txtEmail"]);
    $myQuestionAnswer = mysqli_real_escape_string($conn,$_POST["txtQuestionAnswer"]);
    $myDOB = mysqli_real_escape_string($conn,$_POST["txtDOB"]);

    $sql = "INSERT INTO User (FirstName, LastName, Username, Password, Email, QuestionAnswer, DOB)
    VALUES ('$myfirstname', '$mylastname', '$myusername', '$mypassword', '$myemail', '$myQuestionAnswer', '$myDOB')";
    if (mysqli_query($conn, $sql)) {
        $info = "User Created Successfully!";
    } else {
        $info ="Unable to Add User!";
    }
}

?>