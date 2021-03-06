<?php
    include("session.php");

    if(!isset($_GET['pid'])) {
        header("Location: blog.php");
    }

    $pid = $_GET['pid'];

    if(isset($_POST['update'])) {
        $title = mysqli_real_escape_string($conn, $_POST['PostTitle']);
        $content = mysqli_real_escape_string($conn, $_POST['PostContent']);

        $sql = "UPDATE Blog SET PostTitle='$title', PostContent='$content' WHERE PostID=$pid";
        if (mysqli_query($conn, $sql)) {
            set_updateblogpost_message("Blog post updated successfully");
        } else {
            set_updateblogpost_message("Unable to update blog post");
        }
        header("Location: blog.php");
    }


?>

<html>
    <head>
        <!--Import Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Import  stylesheet.css-->
        <link type="text/css" rel="stylesheet" href="css/stylesheet.css"  media="screen,projection"/>
        <title>Blog - Post</title>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>
    <body>
        <!-- Video Background -->
    <video playsinline autoplay muted loop id="bgvid">
        <source src="images/CosmicShores.mp4" type="video/mp4">
    </video>
        <!-- Header -->
        <?php
            if($row['Admin'] == 1) {
              include('adminnav.php');
            } else {
              include('usernav.php');
            }
        ?>
        <?php

        $sql_get = "SELECT PostTitle, PostContent FROM Blog WHERE PostID=$pid";
        $res = mysqli_query($conn, $sql_get);

        if(mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $title = $row['PostTitle'];
                $content = $row['PostContent'];
            }
        }


		echo "<form action='editpost.php?pid=$pid' method='post' enctype='multipart/form-data'>";
        echo "<div class='container'><div class='input-field'><input type='text' name='PostTitle' required data-length='100' value='$title'/><br /><br />";
        echo "</div><div class='input-field col s12'><textarea name='PostContent' class='materialize-textarea' required data-length='5000'/>$content</textarea><br /></div>";
        ?>
				<button class="waves-effect waves-light btn" name="update" type="submit">Update</button>
            </div>
        </form>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/stylesheet.js"></script>
    </body>
</html>
