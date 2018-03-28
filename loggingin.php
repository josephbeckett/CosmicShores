<?php
include("config.php");
session_start();
ini_set('display_errors', 1);
$info = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form

   $myusername = mysqli_real_escape_string($conn, $_POST["txtUsername"]);
   $mypassword = mysqli_real_escape_string($conn, $_POST["txtPassword"]);

   $sql = "SELECT * FROM User WHERE Username = '$myusername'";
   $result = mysqli_query($conn,$sql);
   if($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        $decryptpassword = password_verify($mypassword, $row['Password']);
        if($decryptpassword == false) {
          header("Location: login.php?login=error");
          $info = ("Your username or password is incorrect")

        } elseif ($decryptpassword == true) {
            $_SESSION['login_user'] = $row['CustomerID'];
            $_SESSION['admin'] = $row['Admin'];
            header("location: loginhomepage.php");
        }
   }
 }
    mysqli_close($conn);
?>
