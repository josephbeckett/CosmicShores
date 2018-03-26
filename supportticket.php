<?php
include("./session.php");
session_start();
$info = "";
if(isset($_POST['submit'])) {
// Support tickets are sent from form

    $myproblemtitle = mysqli_real_escape_string($conn,$_POST["txtProblemTitle"]);
    $myproblemsubtitle = mysqli_real_escape_string($conn,$_POST["txtProblemSubtitle"]);
    $myproblemcontent = mysqli_real_escape_string($conn,$_POST["txtProblemContent"]);
    $mycurrentdate = date('H:i d-m-Y');

    $uid = $_SESSION['login_user'];

    $sql = "INSERT INTO Support (PostTitle, PostDescription, PostContent, PostDate, CustomerID)
    VALUES ('$myproblemtitle', '$myproblemsubtitle', '$myproblemcontent', '$mycurrentdate', '$uid')";
    if (mysqli_query($conn, $sql)) {
        echo "Ticket successfully submitted";
        if (isset($_SESSION['admin'] == 1)) {
          header("Location: admin.php");
        } else {
          header("Location: loginhomepage.php");
        }
    } else {
        echo "Unable to submit ticket";
    }
}

?>
