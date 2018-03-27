<?php
    include("session.php");

    if (!isset($_GET['pid'])) {
        header('Location: blog.php');
    } else {
        $pid = $_GET['pid'];
        $sql = "DELETE FROM Blog WHERE PostID = $pid";
        if(mysqli_query($conn, $sql)) {
            set_delblogpost_message("Blog post deleted successfully");
        } else {
            set_delblogpost_message("Unable to delete blog post");
        }
        header('Location: blog.php');
    }
?>
