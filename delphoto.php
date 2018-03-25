<?php
    include("session.php");

    if (!isset($_GET['photoid'])) {
        header('Location: gallery.php');
    } else {
        $imgsql = "SELECT Image FROM Photos WHERE ImageID = $photoid"
        $image = $row['Image']
        $file = "uploadedimages/$photoid";
        if (!unlink($file))
          {
          echo ("Error deleting $file");
          }
        else
          {
          echo ("Deleted $file");
          }
        $photoid = $_GET['photoid'];
        $sql = "DELETE FROM Photos WHERE ImageID = $photoid";
        mysqli_query($conn, $sql);


        header('Location: gallery.php');
    }


?>
