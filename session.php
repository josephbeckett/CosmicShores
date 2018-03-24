<?php
    include("config.php");
    session_start();

    $user_check = $_SESSION["login_user"];

    $ses_sql = mysqli_query($conn,"SELECT * FROM User WHERE CustomerID = '$user_check' ");

    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

    $_SESSION['admin'] = $row['Admin'];

    $_SESSION['uid'] = $row['CustomerID'];

    if(!isset($_SESSION["login_user"])){
        header("location: login.php");
    } else if (!isset($_SESSION['admin'])) {
      header("Location: login.php");
    }

?>
