<?php
    include("session.php");

    if (!isset($_GET['photoid'])) {
        header('Location: gallery.php');
    } else {
        $imgsql = "SELECT Image FROM Photos WHERE ImageID = $photoid";
        $image = $row['Image'];
        $file = "uploadedimages/$photoid";
        if (!unlink($file))
          {
          set_delgallerypost_message("Error deleting $file");
          }
        else
          {
            $photoid = $_GET['photoid'];
            $sql = "DELETE FROM Photos WHERE ImageID = $photoid";
            mysqli_query($conn, $sql)
            set_delgallerypost_message("Deleted $file");
          }
        // $photoid = $_GET['photoid'];
        // $sql = "DELETE FROM Photos WHERE ImageID = $photoid";
        // if(mysqli_query($conn, $sql)) {
        //     set_delgallerypost_message("Image deleted successfully");
        // } else {
        //     set_delgallerypost_message("Unable to delete image");
        // }
        header('Location: gallery.php');
    }


?>
