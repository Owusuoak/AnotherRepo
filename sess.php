
<?php

/**
 * @author johnmensah
 * @copyright 2012
 */

session_start();
function logged_in(){
    return isset($_SESSION['user_name']);
    }
function confirm_logged_in(){
    if(!logged_in()){
        redirect_to("signIn.php");
        
    }
    
}

?>