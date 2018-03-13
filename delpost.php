<?php 
include_once('session.php');
include_once('config.php');

if (!isset($_SESSION['Username'])) {
    header('Location: login.php');

    return;
}

if (!isset($_GET['pid'])) {
    header('Location: blog.php');
} else {
    $pid = $_GET['pid'];
    $sql = "DELETE FROM Blog WHERE PostID = $pid";
    mysqli_query($conn, $sql);
    header('Location: blog.php');
}
?>