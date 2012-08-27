<?php 
require_once("functions.php");
?>
<?php 
require_once("sess.php");
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
    <title>Notice Board</title>
    <script type="text/javascript" src="jquery.js"></script>


 <script type="text/javascript">
 
$(document).ready(function(){
  $("#tw").click(function(){
            $("#dropPannel1").toggle("50000");
  });
});


$(document).ready(function(){
$("#ccm").click(function(){


 $("#dropPannel2").toggle("50000");

});
});

$(document).ready(function(){
$("#ne").click(function(){

 $("#dropPannel3").toggle("50000");
});
});

$(document).ready(function(){
$("#cnf").click(function(){

 $("#dropPannel4").toggle("50000");
});
});

$(document).ready(function(){
$("#ces").click(function(){

 $("#dropPannel5").toggle("50000");
});
});



$(document).ready(function(){
$("#wa").click(function(){
$("#dropPannel6").toggle("50000");  
});
});
$(document).ready(function(){
$("#ot").click(function(){
$("#dropPannel7").toggle("50000");
    
});
});
$(document).ready(function(){
$("#ad").click(function(){
$("#dropPannel8").toggle("50000");
       
});
});




$(document).ready(function(){
$("#messag").click(function(){
$("#mess").toggle("1000");

       
});
});
$(document).ready(function(){
$("#cler").click(function(){
$("#mess").toggle("1000");

       
});
});




</script>
	
    
    <style type="text/css">
    .filterNot,.tweek,.ad {
    background: -moz-linear-gradient(rgb(134,244,128),rgb(95,240,10)) repeat scroll 0 0 transparent;
    border: 2px solid rgb(134,244,128) ;
    border-radius: 5px 5px 0px 0px;
    cursor: pointer;
    width: 348px;
    padding:20px;
    position: relative;
    height:10px;
    margin-top:2px;
    margin-left:4px;
}
.tweek{
   background: -moz-linear-gradient(rgb(255,192,151),rgb(255,127,39)) repeat scroll 0 0 transparent;         
}
.ad{
   background: -moz-linear-gradient(rgb(206,147,206),rgb(175,78,175)) repeat scroll 0 0 transparent;         
}

.banners{
    cursor: pointer;
 background-color:rgb(47,101,147);
    position: relative;
    top: -45px;
    width: 380px;
    height: 70px;
    padding: 5px;
    margin-left:-1px;
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







#dropPannel1,#dropPannel2,#dropPannel3,#dropPannel4,#dropPannel5,#dropPannel6,#dropPannel7,#dropPannel8{
    border: 2px solid rgb(134,244,128);
    padding-left:0px;
    padding-top:50px;
    width:388px;
    height:250px;
    margin-top:0px;
    margin-left:4px;
    background-color:rgb(134,244,75) ;
    position: relative;
    top: 0px;
    display: none;
}
#dropPannel1{
 background-color:rgb(134,244,75);
    top: 0px;
    display: none;
}

#dropPannel2{
  background-color:white ;
    top: 0px;
    display: none;
}
#dropPannel3{
  background-color:rgb(13,244,75);
    display: none;
    top: 0px;
}

    
    </style>
    
    
</head>

<body>


<div style="background-color:rgb(47,101,147);width:400px;margin: auto ;font-family:Hobo Std;color:rgb(91,91,255);padding-bottom: 10px;">

<div style="text-align: right;">

<?php 
if(logged_in()){
    echo "<a href='AccountHome.php' style='text-align: right;color: aqua;text-decoration: none;'>".$_SESSION['user_name']."</a> ";
   
    echo "| <a href='signOut.php' style='text-align: right;color: aqua;text-decoration: none;'>Sign Out</a> ";
   
}else{
    echo "<a href='index.htm' style='text-align: right;color: aqua;text-decoration: none;'>Sign Up</a>";  
    echo " | <a href='signIn.php' style='text-align: right;color: aqua;text-decoration: none;'>Sign In</a>";
   
}


?>
  </div>
  
  <div id="tw" class="tweek">This Week</div>
<div id="dropPannel1">

<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("EventGala", $con);
$result = mysql_query("SELECT * FROM EventNotice Where Venue='Accra'");

    

    
 while($row = mysql_fetch_array($result))
  {
    $spl =explode(' ',$row['DateTime']);
  echo "<div class='banners'><div id='date'>".$spl[0]." ".$spl[1]." ".$spl[2]."</div> <div id='content'>".$row['Title']." |  
  <a href='NoticeBoard.php?date=".$row['DateTime']."&title=".$row['Title']."' id='messag'>Detail</a>
  </div> <div id='time'>". $spl[3]." ". $spl[4]."</div></div>";
  }   


mysql_close($con);
?>



</div>
<div id="ccm" class="filterNot">Conference/Congress/Meeting</div>
<div id="dropPannel2">
<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("EventGala", $con);

$result = mysql_query("SELECT * FROM EventNotice Where Category='Conference/Congress/Meeting'");
   
 while($row = mysql_fetch_array($result))
  {
    $spl =explode(' ',$row['DateTime']);
  echo "<div class='banners'><div id='date'>".$spl[0]." ".$spl[1]." ".$spl[2]."</div> <div id='content'>".$row['Title']." |  
  <a href='NoticeBoard.php?date=".$row['DateTime']."&title=".$row['Title']."' id='messag'>Detail</a>
  </div> <div id='time'>". $spl[3]." ". $spl[4]."</div></div>";
    
  }   

mysql_close($con);
?>

</div>


<div id="ne" class="filterNot">Networking Event</div>
<div id="dropPannel3">

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("EventGala", $con);

$result = mysql_query("SELECT * FROM EventNotice Where Category='Networking Event'");
   
 while($row = mysql_fetch_array($result))
  {
    $spl =explode(' ',$row['DateTime']);
  echo "<div class='banners'><div id='date'>".$spl[0]." ".$spl[1]." ".$spl[2]."</div> <div id='content'>".$row['Title']." |  
  <a href='NoticeBoard.php?date=".$row['DateTime']."&title=".$row['Title']."' id='messag'>Detail</a>
  </div> <div id='time'>". $spl[3]." ". $spl[4]."</div></div>";
  
  }   

mysql_close($con);
?>


</div>
<div id="cnf" class="filterNot">Concert, Nightlife and Festival</div>
<div id="dropPannel4">

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("EventGala", $con);

$result = mysql_query("SELECT * FROM EventNotice Where Category='Concert/Nightlife/Festival'");
   
 while($row = mysql_fetch_array($result))
  {
    $spl =explode(' ',$row['DateTime']);
  echo "<div class='banners'><div id='date'>".$spl[0]." ".$spl[1]." ".$spl[2]."</div> <div id='content'>".$row['Title']." |  
  <a href='NoticeBoard.php?date=".$row['DateTime']."&title=".$row['Title']."' id='messag'>Detail</a>
  </div> <div id='time'>". $spl[3]." ". $spl[4]."</div></div>";
  
  }   

mysql_close($con);
?>

</div>
<div id="ces" class="filterNot">Corporate Events and Seminar</div>
<div id="dropPannel5">

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("EventGala", $con);
$result = mysql_query("SELECT * FROM EventNotice Where Category='Corporate Events/Seminar'");
   
 while($row = mysql_fetch_array($result))
  {
    $spl =explode(' ',$row['DateTime']);
  echo "<div class='banners'><div id='date'>".$spl[0]." ".$spl[1]." ".$spl[2]."</div> <div id='content'>".$row['Title']." |  
  <a href='NoticeBoard.php?date=".$row['DateTime']."&title=".$row['Title']."' id='messag'>Detail</a>
  </div> <div id='time'>". $spl[3]." ". $spl[4]."</div></div>";
  
  }   

mysql_close($con);
?>

</div>
<div id="wa" class="filterNot">Workshops and Accadamics</div>
<div id="dropPannel6">

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("EventGala", $con);
$result = mysql_query("SELECT * FROM EventNotice Where Category='Workshop/Accadamic'");
   
 while($row = mysql_fetch_array($result))
  {
    $spl =explode(' ',$row['DateTime']);
 echo "<div class='banners'><div id='date'>".$spl[0]." ".$spl[1]." ".$spl[2]."</div> <div id='content'>".$row['Title']." |  
  <a href='NoticeBoard.php?date=".$row['DateTime']."&title=".$row['Title']."' id='messag'>Detail</a>
  </div> <div id='time'>". $spl[3]." ". $spl[4]."</div></div>";
  
  }   

mysql_close($con);
?>

</div>
<div id="ot" class="filterNot">Others</div>
<div id="dropPannel7">

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("EventGala", $con);
$result = mysql_query("SELECT * FROM EventNotice Where Category='Others'");
   
 while($row = mysql_fetch_array($result))
  {
    $spl =explode(' ',$row['DateTime']);
 echo "<div class='banners'><div id='date'>".$spl[0]." ".$spl[1]." ".$spl[2]."</div> <div id='content'>".$row['Title']." |  
  <a href='NoticeBoard.php?date=".$row['DateTime']."&title=".$row['Title']."' id='messag'>Detail</a>
  </div> <div id='time'>". $spl[3]." ". $spl[4]."</div></div>";
  
  }   

mysql_close($con);
?>

</div>
<div id="ad" class="ad">Ads</div>
<div id="dropPannel8">

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("EventGala", $con);
$result = mysql_query("SELECT * FROM Ads ");

 while($row = mysql_fetch_array($result))
  {
  
   echo "<div class='banners'><div id='date'>".$spl[0]." ".$spl[1]." ".$spl[2]."</div> <div id='content'>".$row['Title']." |  
  <a href='NoticeBoard.php?date=".$row['Contact']."&title=".$row['Title']."' id='messag'>Detail</a>
  </div> <div id='time'>". $spl[3]." ". $spl[4]."</div></div>";
    
   
  }  

mysql_close($con);
?>

</div>
<div id="mess">
<?php
if(isset($_GET['date'])){
    echo $_GET['date']."  |  ";
    echo $_GET['title']."  |  ";
}
?>
<a href="NoticeBoard.php?date=&title="  id="cler">Clear</a>
</div>
</div>

</body>
</html>
