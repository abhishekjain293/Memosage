<?php
require_once('Connection.php');
if(isset($_GET['delete_reminder_update']))
{
	if($_GET['delete_reminder_update']!="")
	{
	$e_id=$_GET['delete_reminder_update'];
	$SQL = "DELETE FROM reminder_data WHERE event_id = ".$e_id;
	//echo $SQL;
	$r = mysql_query($SQL);
	if($r)
	{
		header('Location:showreminder.php');
	} 
	}
	else
		header('Location:showreminder.php');
}
?>