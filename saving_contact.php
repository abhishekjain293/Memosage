<?php
require_once('Connection.php');
if(isset($_POST['save_contact']))
{
$contact_name = $_POST['contact_name'];
$contact_number = $_POST['contact_number'];
$contact_email_address = $_POST['contact_email_address'];
$contact_comment = $_POST['contact_comment'];
$contact_address = $_POST['contact_address'];
$d_date = $_POST['d_date'];
$user_id = $_POST['hidden_uid'];
if(isset($_POST['d_date']))
{
	$event_name=$contact_name." birthday";
	$event_date=$_POST['d_date'];
	$frequency=5;
	$SQL ="INSERT INTO reminder_data VALUES(NULL,'$event_name','$event_date',NULL,$frequency,NULL,$user_id)";
//echo $SQL;
	$r1 = mysql_query($SQL);
}


$SQL ="INSERT INTO contact_data VALUES(NULL,'$contact_name',$contact_number,'$contact_email_address','$d_date','$contact_comment','$contact_address',$user_id)";
$r = mysql_query($SQL);
header('Location: contact_page.php');
//header('Location: signin.php');
}

?>