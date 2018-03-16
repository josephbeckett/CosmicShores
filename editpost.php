<?php
    include("session.php");

    if(!isset($_GET['pid'])) {
        header("Location: blog.php");
    }

    $pid = $_GET['pid'];




    if(isset($_POST['update'])) {
        $title = mysqli_real_escape_string($conn, $_POST['PostTitle']);
        $content = mysqli_real_escape_string($conn, $_POST['PostContent']);

        $date = date('l jS \of F Y h:i:s A');

        $sql = "UPDATE Blog SET PostTitle='$title', PostContent='$content', PostDate='$date' WHERE PostID=$pid";
        mysqli_query($conn, $sql);
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
    </head>
    <body>
        <!-- Video Background -->
    <video playsinline autoplay muted loop id="bgvid">
        <source src="images/CosmicShores.mp4" type="video/mp4">
    </video>
        <!-- Header -->
        <nav class="transparentBG z-depth-0">
            <div class="nav-wrapper">
                <img class="logoPC" src="images/CosmicShoresLogoWithoutLogo.png" alt="">
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href ="loginhomepage.php">Dashboard</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="login.php">Sign out</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href ="loginhomepage.php">Dashboard</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="login.php">Sign out</a></li>
                </ul>
            </div>
        </nav>
        <?php

        $sql_get = "SELECT PostTitlle, PostContent FROM Blog WHERE PostID=$pid";
        $res = mysqli_query($conn, $sql_get);

        if(mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $title = $row['PostTitle'];
                $content = $row['PostContent'];
            }
        }


		echo "<form action='editpost.php?pid=$pid' method='post' enctype='multipart/form-data'>";
        echo "<div class='container'><div class='input-field'><input type='text' name='PostTitle' required data-length='100' value='$title'/><br /><br />"
        echo "</div><div class='input-field col s12'><textarea name='PostContent' class='materialize-textarea' required data-length='5000' value='$content'/></textarea><br /></div>"
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