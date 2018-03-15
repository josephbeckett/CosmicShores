<?php
    include("session.php");

    if(isset($_POST['post'])) {

        $title = mysqli_real_escape_string($conn, $_POST['PostTitle']);
        $content = mysqli_real_escape_string($conn, $_POST['PostContent']);

        $date = date('l jS \of F Y h:i:s A');

        $sql = "INSERT into Blog (PostTitle, PostContent, PostDate) VALUES ('$title', '$content', '$date')";

        if($title == "" || $content == "") {
            echo "Please complete your post!";
            return;
        }
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
                    <li><a href="logout.php">Sign out</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href ="loginhomepage.php">Dashboard</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="logout.php">Sign out</a></li>
                </ul>
            </div>
        </nav>
        <form action="blogpost.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="input-field">
                    <input placeholder="Post Title" type="text" name="PostTitle" required data-length="100"><br /><br />
                </div>
                <div class="input-field col s12">
                    <textarea placeholder="Post Content" name="PostContent" class="materialize-textarea" required data-length="100000"></textarea><br />
                </div>
                <button class="waves-effect waves-light btn" name="post" type="submit" value="Post">Post</button>
            </div>
        </form>
    </body>
</html>
