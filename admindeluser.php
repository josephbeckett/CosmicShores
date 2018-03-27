<?php
    include("session.php");

    if (!isset($_GET['custid'])) {
        header('Location: adminuserview.php');
    } else {
        $custid = $_GET['custid'];
        $sql = "DELETE * FROM CustomerID = $custid";
        mysqli_query($conn, $sql);
        header('Location: adminuserview.php');
        $info = "User Deleted Successfully!";
    }
?>
