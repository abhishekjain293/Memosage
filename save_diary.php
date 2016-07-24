<?php
require_once('Connection.php');
if(isset($_POST['save_diary']))
{
$d_time = $_POST['d_time'];
$d_date = $_POST['d_date'];
$d_diary = $_POST['d_diary'];
//$frequency = $_POST['frequency'];
//$event_comment = $_POST['event_comment'];
$hidden_diary_uid = $_POST['hidden_diary_uid'];
//echo $event_time."<br>";
//echo $event_name."<br>";
//echo $event_date."<br>";
$d_time = str_replace(' ','',$d_time);
//echo $event_time."<br>";
if($d_time!="")
{
	
	$d_time= date("H:i",strtotime($d_time));
	//echo $event_time."<br>";
}
//$event_time= date("H:i", strtotime(""));
//echo $event_time."<br>";
$d_diary=mysql_real_escape_string($d_diary);

//echo $frequency."<br>";
//echo $event_comment."<br>";
//echo $hidden_reminder_uid."<br>";

$SQL ="INSERT INTO diary_data VALUES(NULL,'$d_time','$d_date','$d_diary',$hidden_diary_uid)";
//echo $SQL;
$r = mysql_query($SQL);
if($r)
	header('Location: daily_diary.php');
else
{
	$message = 'Error in Insertion!!!';
	echo $message;
}
}
if(isset($_POST['save_diary1']))
{
$d_time = $_POST['d_time'];
$d_date = $_POST['d_date'];
$d_diary = $_POST['d_diary'];
//$frequency = $_POST['frequency'];
//$event_comment = $_POST['event_comment'];
$hidden_diary_uid = $_POST['hidden_diary_uid'];
//echo $event_time."<br>";
//echo $event_name."<br>";
//echo $event_date."<br>";
$d_time = str_replace(' ','',$d_time);
//echo $event_time."<br>";
if($d_time!="")
{
	
	$d_time= date("H:i",strtotime($d_time));
	//echo $event_time."<br>";
}
//$event_time= date("H:i", strtotime(""));
//echo $event_time."<br>";
$d_diary=mysql_real_escape_string($d_diary);

//echo $frequency."<br>";
//echo $event_comment."<br>";
//echo $hidden_reminder_uid."<br>";

$SQL ="INSERT INTO diary_data VALUES(NULL,'$d_time','$d_date','$d_diary',$hidden_diary_uid)";
//echo $SQL;
$r = mysql_query($SQL);
if($r)
	header('Location: showdiary.php');
else
{
	$message = 'Error in Insertion!!!';
	echo $message;
}
}

?>