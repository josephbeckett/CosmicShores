<?php
include("config.php");
session_start();
$info = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
// username and password sent from form

    $myproblemtitle = mysqli_real_escape_string($conn,$_POST["txtProblemTitle"]);
    $myproblemsubtitle = mysqli_real_escape_string($conn,$_POST["txtProblemSubtitle"]);
    $myproblemcontent = mysqli_real_escape_string($conn,$_POST["txtProblemContent"]);
    $myvalidation = mysql_real_escape_string($conn,$POST_["txtValidation"])
    $mycurrentdate = date('Y-m-d H:i:s');

    $sql = "INSERT INTO Support (SupportID, PostTitle, PostDescription, PostContent, Validation, PostDate)
    VALUES ('$myproblemtitle', '$myproblemsubtitle', '$myproblemcontent', '$myvalidation', '$mycurrentdate')";
    if (mysqli_query($conn, $sql)) {
        $info = "Ticket successfully submitted";
    } else {
        $info ="Unable to submit ticket";
    }
}
?>