<?php
    include("session.php");

    if (!isset($_GET['uid'])) {
        header('Location: adminuserview.php');
    } else {
        $uid = $_GET['uid'];
        $sql = "DELETE * FROM CustomerID = $uid
                ";
        mysqli_query($conn, $sql);
        header('Location: adminuserview.php');
        $info = "User Deleted Successfully!";
    }
?>
