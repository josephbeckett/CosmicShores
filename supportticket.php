<?php
include("session.php");
session_start();
$info = "";
if(isset($_POST['submit'])) {
// Support tickets are sent from form

    $myproblemtitle = mysqli_real_escape_string($conn,$_POST["txtProblemTitle"]);
    $myproblemsubtitle = mysqli_real_escape_string($conn,$_POST["txtProblemSubtitle"]);
    $myproblemcontent = mysqli_real_escape_string($conn,$_POST["txtProblemContent"]);
    $mycurrentdate = date('H:i d-m-Y');
    $useremail = $_SESSION['useremail'];

    include 'supportemail.php';

    $uid = $_SESSION['login_user'];

    $sql = "INSERT INTO Support (PostTitle, PostDescription, PostContent, PostDate, CustomerID)
    VALUES ('$myproblemtitle', '$myproblemsubtitle', '$myproblemcontent', '$mycurrentdate', '$uid')";
    if (mysqli_query($conn, $sql)) {
        set_message("Support Ticket successfully submitted, please be patient");
    } else {
        set_message("Unable to submit ticket ");
    }
    header("Location: loginhomepage.php");
}

?>
