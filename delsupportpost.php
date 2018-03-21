<?php
    include("session.php");

    if (!isset($_GET['pid'])) {
        header('Location: support.php');
    } else {
        $pid = $_GET['pid'];
        $sql = "DELETE FROM Support WHERE SupportID = $pid";
        mysqli_query($conn, $sql);
        header('Location: admin.php');
    }
?>
