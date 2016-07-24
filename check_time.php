<?php
require_once("Connection.php");
require_once('session.php');
$i=0;
$send=0;
if(isset($_SESSION['user_id']))
{
	$uid = $_SESSION['user_id'];
} 
//echo $_GET["username"];
if(!empty($_POST["username"])) {
  $result = "SELECT diary_time FROM diary_data WHERE diary_date='" .$_POST["username"] ."' AND uid=".$uid;
  //echo $result;
 $rs = mysql_query($result);
 $rs1 = mysql_query($result);
  $num_records = mysql_num_rows($rs);
  
  if($num_records>0)
{
	
	       
	while($row = mysql_fetch_array($rs))
	{
      $tm[$i]=$row['diary_time'];
	  $i=$i+1;
	}
	$i=0;
	while($row1 = mysql_fetch_array($rs1))
	{
		$send="$send".","."$tm[$i]";
		$i=$i+1;
	}
	echo $send;
}
}
?>