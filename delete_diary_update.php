<?php
require_once('Connection.php');
if(isset($_GET['delete_diary_update']))
{
	if($_GET['delete_diary_update']!="")
	{
	$d_date=$_GET['delete_diary_update'];
	$_time=$_GET['delete_time'];
	$SQL = "DELETE FROM diary_data where diary_date='".$d_date."' AND diary_time='".$_time."'";
	//echo $SQL;
	$r = mysql_query($SQL);
	if($r)
	{
		header('Location:showdiary.php');
	}
	}
	else
		header('Location:showdiary.php');
}
?>