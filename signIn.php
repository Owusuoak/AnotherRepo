<?php 
require_once("functions.php");
?>
<?php 
require_once("sess.php");
?>
<?php
// check session so that if already logged in and not yet out would keep 
//user on the home page
if(logged_in()){
    redirect_to("AccountHome.php");
    }


/**
 * @author johnmensah
 * @copyright 2012
 */

echo '<div style="background-color:rgb(47,101,147);width:400px;height: 400px;margin: auto ;">';
if(isset($_GET['logout'])&& $_GET['logout']==1){
echo 'You are successfully logged out';       
}
echo '<form action="eventGalaSignIn.php" method="post" enctype="multipart/form-data" >



User Name<br/><input type="text" name="userName" /><br />
User Password<br /><input type="password"  name="userPass" /><br />
<input type="submit" name="submit"/>

</form>
</div>';

?>