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

 ?>
