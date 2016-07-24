<?php
require_once('Connection.php');
if(isset($_GET['delete_contact_update']))
{
	if($_GET['delete_contact_update']!="")
	{
	$c_id=$_GET['delete_contact_update'];
	$SQL = "DELETE FROM contact_data WHERE contact_id = ".$c_id;
	$r = mysql_query($SQL);
	if($r)
	{
		header('Location:contact_page.php');
	} 
	}
	else
	header('Location:contact_page.php');
}
?>