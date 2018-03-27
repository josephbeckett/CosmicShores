<?php
  include 'session.php';
  $sql = 'TRUNCATE TABLE Support';
  if(mysqli_query($conn, $sql)) {
    set_delallsupportticket_message("All support tickets deleted successfully");
  } else {
    set_delallsupportticket_message("Unable to delete all support tickets");
  }
  header('Location: admin.php');
   ?>
