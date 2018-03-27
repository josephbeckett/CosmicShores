<?php
    include("session.php");

    if (!isset($_GET['uid'])) {
        header('Location: adminuserview.php');
    } else {
        $uid = $_GET['uid'];
        $sql = "DELETE * FROM Blog ON CustomerID = $uid
                DELETE * FROM Gallery ON Customer ID = $uid
                DELETE * FROM Support ON CustomerID = $uid
                DELETE * FROM User ON CustomerID = $uid
                ";
        mysqli_query($conn, $sql);
        header('Location: adminuserview.php');
    }
?>
