<?php
include("config.php");
session_start();
$info = "";
if(isset($_POST['submit'])) {
// Support tickets are sent from form

    $myproblemtitle = mysqli_real_escape_string($conn,$_POST["txtProblemTitle"]);
    $myproblemsubtitle = mysqli_real_escape_string($conn,$_POST["txtProblemSubtitle"]);
    $myproblemcontent = mysqli_real_escape_string($conn,$_POST["txtProblemContent"]);
    $myvalidation = mysqli_real_escape_string($conn,$_POST["txtProblemValidation"]);
    $mycurrentdate = date('H:i d-m-Y');

    $sql = "INSERT INTO Support (PostTitle, PostDescription, PostContent, PostValidation, PostDate)
    VALUES ('$myproblemtitle', '$myproblemsubtitle', '$myproblemcontent', '$myvalidation', '$mycurrentdate')";
    if (mysqli_query($conn, $sql)) {
        echo "Ticket successfully submitted";
        header("Location: support.php");
    } else {
        echo "Unable to submit ticket";
    }
}

?>
