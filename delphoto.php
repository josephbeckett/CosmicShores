<?php
    include("session.php");

    if (!isset($_GET['photoid'])) {
        header('Location: gallery.php');
    } else {
        $photoid = $_GET['photoid'];
        $sql = "DELETE FROM Photos WHERE ImageID = $photoid";
        mysqli_query($conn, $sql);
        header('Location: gallery.php');
    }
?>
