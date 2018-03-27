<?php
function set_message($supportmessage) {
    if(!empty($supportmessage)) {
        $_SESSION['supportmessage'] = $supportmessage;
    }
    else {
        $supportmessage = "";
    }
}
function display_message() {
    if(isset($_SESSION['supportmessage'])) {
        echo $_SESSION['supportmessage'];
        unset($_SESSION['supportmessage']);
    }
}

 ?>
