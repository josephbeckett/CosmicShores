<?php
$sql = 'TRUNCATE TABLE Support';
mysqli_query($conn, $sql);
header('Location: admin.php');
 ?>
