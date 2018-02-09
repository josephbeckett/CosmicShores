<?php
   $servername = "localhost:3306";
   $username = "JosephBeckett";
   $password = "Password123";
   $dbname = "CosmicShoresDatabase";
   $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
	}
?>