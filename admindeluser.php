<?php
    include("session.php");

    if (!isset($_GET['custid'])) {
        header('Location: adminuserview.php');
    } else {
        $custid = $_GET['custid'];
        $sql = "DELETE FROM User WHERE CustomerID = $custid";
        if(mysqli_query($conn, $sql)){
          set_deluseraccount_message("User account successfully deleted");
        } else {
          set_deluseraccount_message("Unable to delete user account");
        }
        header('Location: adminuserview.php');
    }
?>
