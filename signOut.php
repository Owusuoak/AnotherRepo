<?php
require_once("functions.php");

?>

<?php

/**
 * @author johnmensah
 * @copyright 2012
 */
//can put protection on include files like the function file 
//on the server side when deploying application so you need to 
//know more about the server you are deploying to
//how to protect files you do not want people to have access to

//clossing a session or logging out

//find session
session_start();

//unset setting session array to null
$_SESSION=array();

// destroy session cookie
 
if(isset($_COOKIE[session_name()])){
    setcookie(session_name(),'',time()-42000,'/');
}

//Destroy session
session_destroy();

redirect_to("signIn.php?logout=1")

?>