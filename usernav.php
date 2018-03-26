<?php
include_once 'session.php';
if ($_SESSION['login_user'] != $row['CustomerID']) {
  header("Location: login.php");
}
?>
<nav class="transparentBG z-depth-0">
    <div class="nav-wrapper">
  <img class="logoPC" src="images/CosmicShoresLogoWithoutLogo.png" alt="">
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="support.php">Support</a></li>
            <li><a href="logout.php">Sign out</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="support.php">Support</a></li>
            <li><a href="logout.php">Sign out</a></li>
        </ul>
    </div>
</nav>
