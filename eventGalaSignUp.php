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
WHERE user_name='$_POST[userName]'");

if(mysql_num_rows($result)<1){
   $sql="INSERT INTO User(user_name, user_password)
VALUES
('$_POST[userName]','$_POST[userPass]')";

if (!mysql_query($sql,$con))
  {
    redirect_to("DataExist.htm");
  
  }else{
    redirect_to("ThankYou.htm");
    
  }

 
    
}else{
    
  redirect_to("DataExist.htm");  
}


mysql_close($con);
?>