<?php
include("config.php");
session_start();
ini_set('display_errors', 1);
$info = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $myusername = mysqli_real_escape_string($conn, $_POST["txtUsername"]);
   $mypassword = mysqli_real_escape_string($conn, $_POST["txtPassword"]); 

   $sql = "SELECT CustomerID FROM User WHERE Username = '$myusername', Password = '$mypassword'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $customerid = $row["CustomerID"]; 
   $customerpassword = $row['Password'];
   $admin = $row['Admin'];

   // If result matched $myusername and $mypassword, table row must be 1 row
     
   if($mypassword == $customerpassword) {
      $_SESSION["login_user"] = $row["CustomerID"];
      if($admin == 1) {
          $_SESSION['admin'] = 1;
      }
      header("location: loginhomepage.php");
   } else {
      $info = "Your Login Name or Password is invalid";
   }
    mysqli_close($conn);
    
}

?>