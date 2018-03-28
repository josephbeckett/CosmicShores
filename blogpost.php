<?php
    include("session.php");

    if(isset($_POST['post'])) {

        $title = mysqli_real_escape_string($conn, $_POST['PostTitle']);
        $content = mysqli_real_escape_string($conn, $_POST['PostContent']);
        $date = date('l jS \of F Y h:i:s A');

        $uid = $_SESSION['login_user'];

        $sql = "INSERT into Blog (PostTitle, PostContent, PostDate, CustomerID) VALUES ('$title', '$content', '$date', '$uid')";

        if($title == "" || $content == "") {
            echo "Please complete your post!";
            return;
        }

        if (mysqli_query($conn, $sql)) {
            set_blogpost_message("Post uploaded successfully");
        } else {
            set_blogpost_message("Unable to post to blog");
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
        <!-- Header -->
        <?php
            if($row['Admin'] == 1) {
              include('adminnav.php');
            } else {
              include('usernav.php');
            }
        ?>
        <form action="blogpost.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="input-field">
                    <input type="text" name="PostTitle" required data-length="100"><br /><br />
                    <label for="PostTitle">Title</label>
                </div>
                <div class="input-field">
                    <textarea name="PostContent" class="materialize-textarea" required data-length="5000"></textarea><br />
                    <label for="PostContent">Content</label>
                </div>
                <button class="waves-effect waves-light btn" name="post" type="submit" value="Post">Post</button>
            </div>
        </form>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/stylesheet.js"></script>
    </body>
</html>
