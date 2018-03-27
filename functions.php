<?php
function set_message($supportmessage) {
    if(!empty($supportmessage)) {
        $_SESSION['supportmessage'] = $supportmessage;
    }
    else {
        $supportmessage = "";
    }
}
function support_display_message() {
    if(isset($_SESSION['supportmessage'])) {
        echo $_SESSION['supportmessage'];
        unset($_SESSION['supportmessage']);
    }
}
function set_updatedetails_message($updatedetails) {
    if(!empty($updatedetails)) {
        $_SESSION['updatedetails'] = $updatedetails;
    }
    else {
        $updatedetails = "";
    }
}
function update_details_message() {
  if(isset($_SESSION['updatedetails'])) {
      echo $_SESSION['updatedetails'];
      unset($_SESSION['updatedetails']);
    }
}
function set_blogpost_message($blogpostmessage) {
    if(!empty($blogpostmessage)) {
        $_SESSION['blogpostmessage'] = $blogpostmessage;
    }
    else {
        $blogpostmessage = "";
    }
}
function post_blogpost_message() {
  if(isset($_SESSION['blogpostmessage'])) {
      echo $_SESSION['blogpostmessage'];
      unset($_SESSION['blogpostmessage']);
    }
}
function set_updateblogpost_message($updateblogpostmessage) {
    if(!empty($updateblogpostmessage)) {
        $_SESSION['updateblogpostmessage'] = $updateblogpostmessage;
    }
    else {
        $updateblogpostmessage = "";
    }
}
function update_blogpost_message() {
  if(isset($_SESSION['updateblogpostmessage'])) {
      echo $_SESSION['updateblogpostmessage'];
      unset($_SESSION['updateblogpostmessage']);
    }
}
function set_delblogpost_message($delblogpostmessage) {
    if(!empty($delblogpostmessage)) {
        $_SESSION['delblogpostmessage'] = $delblogpostmessage;
    }
    else {
        $delblogpostmessage = "";
    }
}
function display_delblogpost_message() {
  if(isset($_SESSION['delblogpostmessage'])) {
      echo $_SESSION['delblogpostmessage'];
      unset($_SESSION['delblogpostmessage']);
    }
}
function set_delsupportticket_message($delsupportticketmessage) {
    if(!empty($delsupportticketmessage)) {
        $_SESSION['delsupportticketmessage'] = $delsupportticketmessage;
    }
    else {
        $delsupportticketmessage = "";
    }
}
function display_delsupportticket_message() {
  if(isset($_SESSION['delsupportticketmessage'])) {
      echo $_SESSION['delsupportticketmessage'];
      unset($_SESSION['delsupportticketmessage']);
    }
}
function set_delallsupportticket_message($delallsupportticketmessage) {
    if(!empty($delallsupportticketmessage)) {
        $_SESSION['delallsupportticketmessage'] = $delallsupportticketmessage;
    }
    else {
        $delallsupportticketmessage = "";
    }
}
function display_delallsupportticket_message() {
  if(isset($_SESSION['delallsupportticketmessage'])) {
      echo $_SESSION['delallsupportticketmessage'];
      unset($_SESSION['delallsupportticketmessage']);
    }
}
function set_deluseraccount_message($deluseraccountmessage) {
    if(!empty($deluseraccountmessage)) {
        $_SESSION['deluseraccountmessage'] = $deluseraccountmessage;
    }
    else {
        $deluseraccountmessage = "";
    }
}
function display_deluseraccount_message() {
  if(isset($_SESSION['deluseraccountmessage'])) {
      echo $_SESSION['deluseraccountmessage'];
      unset($_SESSION['deluseraccountmessage']);
    }
}
function set_updateuseraccount_message($updateuseraccountmessage) {
    if(!empty($updateuseraccountmessage)) {
        $_SESSION['updateuseraccountmessage'] = $updateuseraccountmessage;
    }
    else {
        $updateuseraccountmessage = "";
    }
}
function display_updateuseraccount_message() {
  if(isset($_SESSION['updateuseraccountmessage'])) {
      echo $_SESSION['updateuseraccountmessage'];
      unset($_SESSION['updateuseraccountmessage']);
    }
}
function set_gallerypost_message($gallerypostmessage) {
    if(!empty($gallerypostmessage)) {
        $_SESSION['gallerypostmessage'] = $gallerypostmessage;
    }
    else {
        $gallerypostmessage = "";
    }
}
function display_gallerypost_message() {
  if(isset($_SESSION['gallerypostmessage'])) {
      echo $_SESSION['gallerypostmessage'];
      unset($_SESSION['gallerypostmessage']);
    }
}
function set_delgallerypost_message($delgallerypostmessage) {
    if(!empty($delgallerypostmessage)) {
        $_SESSION['delgallerypostmessage'] = $delgallerypostmessage;
    }
    else {
        $delgallerypostmessage = "";
    }
}
function display_delgallerypost_message() {
  if(isset($_SESSION['delgallerypostmessage'])) {
      echo $_SESSION['delgallerypostmessage'];
      unset($_SESSION['delgallerypostmessage']);
    }
}


 ?>
