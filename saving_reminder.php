<?php
require_once('Connection.php');
if(isset($_POST['save_reminder']))
{
$event_name = $_POST['event_name'];
$event_date = $_POST['event_date'];
$event_time = $_POST['event_time'];
$frequency = $_POST['frequency'];
$event_comment = $_POST['event_comment'];
$hidden_reminder_uid = $_POST['hidden_reminder_uid'];
//echo $event_time."<br>";
//echo $event_name."<br>";
//echo $event_date."<br>";
$event_time = str_replace(' ','',$event_time);
//echo $event_time."<br>";
if($event_time!="")
{
	
	$event_time= date("H:i",strtotime($event_time));
	//echo $event_time."<br>";
}
//$event_time= date("H:i", strtotime(""));
//echo $event_time."<br>";
$event_name=mysql_real_escape_string($event_name);

//echo $frequency."<br>";
//echo $event_comment."<br>";
//echo $hidden_reminder_uid."<br>";

$SQL ="INSERT INTO reminder_data VALUES(NULL,'$event_name','$event_date','$event_time',$frequency,'$event_comment',$hidden_reminder_uid)";
//echo $SQL;
$r = mysql_query($SQL);
if($r)
	header('Location: reminder.php');
else
{
	$message = 'Error in Insertion!!!';
	echo $message;
}
}
if(isset($_POST['save_reminder1']))
{
$event_name = $_POST['event_name'];
$event_date = $_POST['event_date'];
$event_time = $_POST['event_time'];
$frequency = $_POST['frequency'];
$event_comment = $_POST['event_comment'];
$hidden_reminder_uid = $_POST['hidden_reminder_uid'];
//echo $event_time."<br>";
//echo $event_name."<br>";
//echo $event_date."<br>";
$event_time = str_replace(' ','',$event_time);
//echo $event_time."<br>";
if($event_time!="")
{
	
	$event_time= date("H:i",strtotime($event_time));
	//echo $event_time."<br>";
}
//$event_time= date("H:i", strtotime(""));
//echo $event_time."<br>";
$event_name=mysql_real_escape_string($event_name);

//echo $frequency."<br>";
//echo $event_comment."<br>";
//echo $hidden_reminder_uid."<br>";

$SQL ="INSERT INTO reminder_data VALUES(NULL,'$event_name','$event_date','$event_time',$frequency,'$event_comment',$hidden_reminder_uid)";
//echo $SQL;
$r = mysql_query($SQL);
if($r)
	header('Location: showreminder.php');
else
{
	$message = 'Error in Insertion!!!';
	echo $message;
}
}

?>