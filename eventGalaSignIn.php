<?php 
require_once("sess.php");
?>
<?php 
require_once("functions.php");
?>
<?php

/**
 * @author johnmensah
 * @copyright 2012
 */
 
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }else{
  }

mysql_select_db("EventGala", $con);

$result = mysql_query("SELECT * FROM User
WHERE user_name='$_POST[userName]' AND user_password='$_POST[userPass]'");

mysql_num_rows($result);
if (mysql_num_rows($result)==1){
    $found_user = mysql_fetch_array($result);
    $_SESSION['user_name']=$found_user['user_name'];
    redirect_to("AccountHome.php");

    
}else{
    
    redirect_to("WrongDetail.html");
    
}


mysql_close($con);
?>