<?php
    session_start();
    include("config.php");

    if(isset($_POST['post'])) {
<<<<<<< HEAD
        $title = strip_tags($_POST['PostTitle']);
        $content = strip_tags($_POST['PostContent']);

        $title = mysqli_real_escape_string($conn, $title);
        $content = mysqli_real_escape_string($conn, $content);

        $date = date('l jS \of F Y h:i:s A');

        $sql = "INSERT into blog (PostTitle, PostContent, PostDate) VALUES ('$title', '$content', '$date')";

        if($title == "" || $content == "") {
            echo "Please complete your post!";
            return;
        }

        mysqli_query($conn, $sql);

        header("Location : blog.php");
    }
?>

<!DOCTYPE html>
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
            <source src="video/fundo.webm" type="video/webm">
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
                <li><a href="about.php">Blog</a></li>
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
    <form action="blogpost.php" method="post">
        <div class="container">
            <div class="input-field">
                <input placeholder="Post Title" type="text" name="PostTitle" required data-length"100">
            </div>
            <div class="input-field col s12">
                <textarea placeholder="Post Content" name="PostContent" class="materialize-textarea" required data-length="500"></textarea>
            </div>
            <button class="waves-effect waves-light btn" name= "post" type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
=======
        
    }
?>
>>>>>>> e30ae430379bea5b7976010975edb4463e616f15
