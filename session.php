<?php
include('config.php');
session_start();

$user_check = $_SESSION["login_user"];

$ses_sql = mysqli_query($conn,"select userID from test where userID = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

if(!isset($_SESSION["login_user"])){
header("location: login.php");
}
?>