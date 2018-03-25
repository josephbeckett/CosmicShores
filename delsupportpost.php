<?php
    include("session.php");

    if (!isset($_GET['supportid'])) {
        header('Location: support.php');
    } else {
        $supportid = $_GET['supportid'];
        $sql = "DELETE FROM Support WHERE SupportID = $supportid";
        mysqli_query($conn, $sql);
        header('Location: admin.php');
    }
?>
