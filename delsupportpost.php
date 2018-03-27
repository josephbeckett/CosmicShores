<?php
    include("session.php");

    if (!isset($_GET['supportid'])) {
        header('Location: support.php');
    } else {
        $supportid = $_GET['supportid'];
        $sql = "DELETE FROM Support WHERE SupportID = $supportid";
        if(mysqli_query($conn, $sql)) {
          set_delsupportticket_message("Support ticket successfully deleted");
        } else {
          set_delsupportticket_message("Couldn't delete support ticket");
        }
        header('Location: admin.php');
    }


?>
