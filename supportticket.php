<?php
include("config.php");
$info = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
// Support tickets are sent from form

    $myproblemtitle = mysqli_real_escape_string($conn,$_POST["txtProblemTitle"]);
    $myproblemsubtitle = mysqli_real_escape_string($conn,$_POST["txtProblemSubtitle"]);
    $myproblemcontent = mysqli_real_escape_string($conn,$_POST["txtProblemContent"]);
    $myvalidation = mysql_real_escape_string($conn,$POST_["txtValidation"]);
    //$mycurrentdate = date('Y-m-d H:i:s');

    $sql = "INSERT INTO Support (PostTitle, PostDescription, PostContent, Validation)
    VALUES ('$myproblemtitle', '$myproblemsubtitle', '$myproblemcontent', '$myvalidation')";
    if (mysqli_query($conn, $sql)) {
        $info = "Ticket successfully submitted";
    } else {
        $info ="Unable to submit ticket";
    }
}
?>