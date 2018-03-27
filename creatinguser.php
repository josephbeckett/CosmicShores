<?php
include("config.php");
session_start();
$info = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
// username and password sent from form

    $myfirstname = mysqli_real_escape_string($conn,$_POST["txtFirstName"]);
    $mylastname = mysqli_real_escape_string($conn,$_POST["txtLastName"]);
    $myusername = mysqli_real_escape_string($conn,$_POST["txtUsername"]);
    $mypassword = mysqli_real_escape_string($conn,$_POST["txtPassword"]);
    $myemail = mysqli_real_escape_string($conn,$_POST["txtEmail"]);
    $myquestionanswer = mysqli_real_escape_string($conn,$_POST["txtQuestionAnswer"]);
    $mydob = mysqli_real_escape_string($conn,$_POST["txtDOB"]);

    include 'email.php';

    $sql = "INSERT INTO User (FirstName, LastName, Username, Password, Email, QuestionAnswer, DOB)
    VALUES ('$myfirstname', '$mylastname', '$myusername', '$mypassword', '$myemail', '$myquestionanswer', '$mydob')";
    if (mysqli_query($conn, $sql)) {
        $info = "User Created Successfully!";
    } else {
        $info ="Unable to Add User!";
    }
}

?>
