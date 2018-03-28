<?php
include 'session.php';

$target_dir = "uploadedimages/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        set_gallerypost_message("File is an image - " . $check["mime"] . ".");
        $uploadOk = 1;
    } else {
        set_gallerypost_message("File is not an image.");
        $uploadOk = 0;
        header("Location: gallery.php");

    }
}
// Check if file already exists
if (file_exists($target_file)) {
    set_gallerypost_message("Sorry, file already exists.");
    $uploadOk = 0;
    header("Location: gallery.php");
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    set_gallerypost_message("Sorry, your file is too large.");
    $uploadOk = 0;
    header("Location: gallery.php");
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    set_gallerypost_message("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
    $uploadOk = 0;
    header("Location: gallery.php");
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    set_gallerypost_message("Sorry, your file was not uploaded.");
    header("Location: gallery.php");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        header("Location: gallery.php");
    } else {
        set_gallerypost_message("Sorry, there was an error uploading your file.");
        header("Location: gallery.php");
    }
}

$image = ($_FILES['fileToUpload']['name']);
$date = date('l jS \of F Y h:i:s A');
$uid = $_SESSION['login_user'];
$sql = "INSERT INTO Photos (Image, ImageDate, CustomerID) VALUES ('$image', '$date', '$uid')";
if (mysqli_query($conn, $sql)) {
    set_gallerypost_message("Image uploaded successfully");
} else {
    set_gallerypost_message("Unable to upload image");
}
header("Location: gallery.php");
?>
