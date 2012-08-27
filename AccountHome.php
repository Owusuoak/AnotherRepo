<?php 
require_once("functions.php");
?>
<?php 
require_once("sess.php");
?>
<?php
confirm_logged_in();
?>
<?php

/**
 * @author johnmensah
 * @copyright 2012
 */
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="johnmensah" />
    <script type="text/javascript" src="jquery.js"></script>
 <script type="text/javascript">
$(document).ready(function(){
  $("#calender").click(function(){

$("#dropPannel2").slideUp("1000");
$("#dropPannel3").slideUp("1000");
            $("#dropPannel1").slideDown("50000");


  });
});


$(document).ready(function(){
$("#createEN").click(function(){


$("#dropPannel3").slideUp("1000");
$("#dropPannel1").slideUp("1000");
            $("#dropPannel2").slideDown("50000");



});
});


$(document).ready(function(){
$("#createAds").click(function(){
$("#dropPannel1").slideUp("1000");
$("#dropPannel2").slideUp("1000");
            $("#dropPannel3").slideDown("50000");


       
});
});
$(document).ready(function(){
$("#submit2").click(function(){
$("#mess").slideDown("1000");
      
});
});
$(document).ready(function(){
$("#submit1").click(function(){
$("#mess").slideDown("1000");
       
});
});


$(document).ready(function(){
$("#mess").click(function(){
$("#mess").slideUp("1000");
       
});
});
$(document).ready(function(){
$("#messag").click(function(){
$("#mess1").toggle("1000");

       
});
});
$(document).ready(function(){
$("#cler").click(function(){
$("#mess1").toggle("1000");

       
});
});


</script>
	<title>Account Home</title>
    
    <style type="text/css">
    .filter {
    background: -moz-linear-gradient(rgb(134,244,128),rgb(95,240,10)) repeat scroll 0 0 transparent;
    border: 2px solid rgb(134,244,128) ;
    border-radius: 5px 5px 0px 0px;
    cursor: pointer;
    height: 31px;
    margin: 0 0 0 5px;
    position: relative;
}
#banners{
    cursor: pointer;
 background-color:rgb(47,101,147);
    position: relative;
    top: -120px;
    width: 380px;
    height: 70px;
    padding: 5px;
    margin-left: 3px;
    box-shadow: 0 0 5px red;
}
#date{
 float:left;
    position: relative;
    top: 0px;
    width: 50px;
    height: 70px;
    padding: 3px;
  
}
#content{
    float:left;
    position: relative;
    top: 0px;
    width: 255px;
    height: 70px;
    padding: 3px;
  
}
#time{
     float:left;
    position: relative;
    top: 0px;
    width: 50px;
    height: 70px;
    padding: 3px;
 
}

#contact{

    position: relative;
    top: -5px;
    width: 180px;
    height: 50px;
    padding: 3px;
 
}

#title{

    position: relative;
    top: -5px;
    width: 180px;
    height: 20px;
    padding: 3px;
}
#mess{
    background-color:rgb(47,101,147);
    position: relative;
    top: -200px;
    left:150px;
    width: 180px;
    height: 70px;
    padding: 3px;
    border-radius:5px 5px 5px 5px;
    box-shadow: 5px 5px 5px rgb(134,244,75);
    display: block;
    cursor: pointer;
}

#mess1{
    background-color:rgb(47,101,147);
    position: fixed;
    top:0px;
    left: auto;
    width: 400px;
    height: 500px;
    padding: 5px;
    border-radius:5px 5px 5px 5px;
    box-shadow: 5px 5px 5px rgb(134,244,75);
    display: none;
    <?php
    if($_GET['date']==""){
        echo "display: none;";
         echo "try me: ".$_GET['date'];
        
    }elseif(!isset($_GET['date'])){
        echo "display:none;";
         echo "try me: ".$_GET['date'];
        
    }else{
        echo "display: block;";
        
        echo "try me: ".$_GET['date'];
        
    }
    ?>
    
    cursor: pointer;
    margin: -9px;
}





#dropPannel1,#dropPannel2,#dropPannel3{
    border: 2px solid rgb(134,244,128);
    padding-left:0px;
    padding-top:50px;
    width:396px;
    height:250px;
    margin-top:0px;
    margin-left:0px;
    background-color:rgb(134,244,75) ;
    position: absolute;
    
}
#dropPannel1{
 background-color:rgb(134,244,75);
    top: 90px;
    display: none;
}

#dropPannel2{
  background-color:white ;
    top: 90px;
    display: none;
}
#dropPannel3{
  background-color:rgb(13,244,75);
    display: none;
    top: 90px;
}

    
    </style>
    
   
    
</head>

<body>


<div style="background-color:rgb(47,101,147);width:400px;height: 400px;margin: auto ;font-family:Hobo Std;color:rgb(91,91,255);">
<?php echo $_SESSION['user_name'];?>
 | <a href="signOut.php" style="text-align: right;color: aqua;text-decoration: none;">Sign Out</a>
  | <a href="NoticeBoard.php" style="text-align: right;color: aqua;text-decoration: none;">Notice Board</a>
 
<div id="calender" class="filter" style="width:120px;height:50px;margin-top:0px;margin-left:4px;">Calender</div>
<div id="createEN" class="filter" style="width:120px;height:50px;margin-top:-54px;margin-left:135px;">Create Notices/Events</div>
<div id="createAds" class="filter" style="width:120px;height:50px;margin-top:-54px;margin-left:265px;">Create Ads</div>

<div id="dropPannel1">
Welcome to your Account <br/>you have just accessed <br /> a beautiful experience, connect to events
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("EventGala", $con);
$sname=$_SESSION['user_name'];
$result = mysql_query("SELECT * FROM FavoriteEN Where user_name='$sname'");

if(mysql_num_rows($result)>=1){
    
 while($row = mysql_fetch_array($result))
  {
    $spl =explode(' ',$row['DateTime']);
  echo "<div id='banners'><div id='date'>".$spl[0]." ".$spl[1]." ".$spl[2]."</div> <div id='content'>".$row['Title']." |  
  <a href='AccountHome.php?date=".$row['DateTime']."&title=".$row['Title']."' id='messag'>Detail</a>
  </div> <div id='time'>". $spl[3]." ". $spl[4]."</div></div>";
    
  }   
}

$sname=$_SESSION['user_name'];
$result = mysql_query("SELECT * FROM FavoriteAds Where user_name='$sname'");

if(mysql_num_rows($result)>=1){
    
  
 while($row = mysql_fetch_array($result))
  {
  
    echo "<div id='banners'><div id='date'>".$spl[0]." ".$spl[1]." ".$spl[2]."</div> <div id='content'>".$row['Title']." |  
  <a href='AccountHome.php?date=".$row['Contact']."&title=".$row['Title']."' id='messag'>Detail</a>
  </div> <div id='time'>". $spl[3]." ". $spl[4]."</div></div>";
    
  }   
}
mysql_close($con);
?>
 
</div>
<div id="dropPannel2">
<form action="AccountHome.php" method="post" style="position: relative;top: -50px;" >
Contact:(Space separated 0201213178 0238918298) <br />
<input type="text" name="contact" /><br />
Venue:<br />
<input type="text"  name="venue" /><br />
When:(1st  3 letters of month Jun 19, 2012 6:09 PM)<br />
<input type="text"  name="dateTime" /><br />
Title:<br />
<input type="text"  name="title" /><br />
Description:<br />
<input type="text"  name="description" /><br />
Category:<br />
<select name="category">
 <option value="Conference/Congress/Meeting">Conference/Congress/Meeting</option>
  <option value="Networking Event">Network Event</option>
  <option value="Concert/Nightlife/Festival">Concert/Nightlife/Festival</option>
<option value="Corporate Events/Seminar">Corporate Events/Seminar</option>
<option value="Workshop/Accadamic">Workshop/Accadamic</option>
 <option value="Others">Others</option>
  

</select> <br />
------------------------------------<input type="submit" id="submit1" name="submit1" />
</form>
<?php
 


if(isset($_POST['submit1'])){
     echo "<style type='text/css'> 
    #dropPannel2{
    display: block;
    }</style>";
            

   $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("EventGala", $con);


   $results = mysql_query("SELECT * FROM EventNotice Where DateTime='$_POST[dateTime]' AND Title='$_POST[title]'");
      
   $nom = 0;
   while($row = mysql_fetch_array($results)){
    $nom+=1;    
       
   }   
    
if($nom>=1){
    echo "<div id='mess'>Sorry this  Event Exist</div>";
  
  }else{
    
    $da="May 15,2012 11:57 AM";
    if($_POST['contact']=="" || $_POST['title']=="" || $_POST['description']=="" ||$_POST['venue']==""  ){
       echo "<div id='mess'> Invalid Entry</div>"; 
        
    }else{
        
        $sql="INSERT INTO EventNotice(Contact, Venue, DateTime, Title, Date, Category, user_name)
         VALUES
         ('$_POST[contact]','$_POST[venue]','$_POST[dateTime]','$_POST[title]','$da','$_POST[category]','$_SESSION[user_name]')";

if (!mysql_query($sql,$con))
  {
    
    echo "<div id='mess'> Invalid data entry2</div>";
    echo "what is it :".mysql_error();
  
  }else{
    echo "<div id='mess'> Succefully Created</div>";
  }

}
mysql_close($con);
        
}    
    
    
 
   

}else{
    
    
}

?>

</div>
<div id="dropPannel3">


<form action="AccountHome.php" method="POST" style="position: relative;top: -50px;" >
Contact:(Space separated 0201213178 0238918298) <br />
<input type="text" name="contact1" /><br />
Location:<br />
<input type="text"  name="location" /><br />
Title:<br />
<input type="text"  name="title1" /><br />
Description:<br />
<input type="text"  name="description1" /><br />

------------------------------------<input type="submit" name="submit2" id="submit2"/>
</form>
<?php
if(isset($_POST['submit2'])){


    echo "<style type='text/css'>
    #dropPannel2{
    display: none;   
}
#dropPannel3{
    display: block;   
}
 </style>";

   $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("EventGala", $con);

   $result = mysql_query("SELECT * FROM Ads Where Contact='$_POST[contact1]' AND Title='$_POST[title1]'");
   $row = mysql_fetch_array($result);
   if(mysql_num_rows($result)>1){
    echo "<div id='mess'>Sorry this  Event Exist</div>";
  
  }else{
    
    $da="May 15,2012 11:57 AM";
    if($_POST['contact1']=="" || $_POST['title1']=="" || $_POST['description1']==""  ){
       echo "<div id='mess'> Invalid data entry </div>";
    exit;  
        
    }
 $sql="INSERT INTO Ads(Contact, Title, Location,Description, Date, user_name)
VALUES
('$_POST[contact1]','$_POST[title1]','$_POST[location]','$_POST[description1]','$da','$_SESSION[user_name]')";

if (!mysql_query($sql,$con))
  {
    
    echo "<div id='mess'> Invalid data entry</div>";
  
  }else{
    echo "<div id='mess'> Succefully Created</div>";
  }

}
mysql_close($con);
   

}else{
    
    
}

?>



Welcome to the Future,  you can advertise on this space for premium price</div>

<div id="mess1">
<?php
if(isset($_GET['date'])){
    echo $_GET['date']."  |  ";
    echo $_GET['title']."  |  ";
}
?>
<a href="AccountHome.php?date=&title="  id="cler">Clear</a>
</div>
</div>




</body>
</html>
