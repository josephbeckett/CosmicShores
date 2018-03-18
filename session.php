<?php
    include("config.php");
    session_start();

    $admin_check = $_SESSION['admin'];
    $user_check = $_SESSION["login_user"];

    $ses_sql = mysqli_query($conn,"SELECT CustomerID FROM User WHERE CustomerID = '$user_check' ");
    $ses_adm_sql = mysqli_query($conn, "SELECT CustomerID FROM User WHERE CustomerID = '$admin_check' ");

    $row = mysqli_fetch_array($ses_sql, $ses_adm_sql, MYSQLI_ASSOC);


    if(!isset($_SESSION["login_user"])){
        header("location: login.php");
    }
    if(!isset($_SESSION["admin"])){
        header("location: login.php");
    }
?>