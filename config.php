<?php
   $servername = "ec2-54-75-227-92.eu-west-1.compute.amazonaws.com";
   $username = "elsdgmlrlrlymr";
   $password = "d3bde27b0106e97648765c794fad3258889817458fee971f84da82d5a0e2e849";
   $dbname = "dcl3n65bog0ml6";
   $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
	}
?>
