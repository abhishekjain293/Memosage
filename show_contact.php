<?php
//require_once('session.php');
require_once('Connection.php');
if(isset($_SESSION['user_id']))
{
	$uid = $_SESSION['user_id'];
} 
$SQL = "SELECT count(contact_id) from contact_data where uid=".$uid;
$rs = mysql_query($SQL);
$num_records = mysql_num_rows($rs);
if($num_records>0)
{
	
	       
	while($row = mysql_fetch_array($rs))
	{
		$total_contact=$row['count(contact_id)'];
		echo '<div class="tileBody numberTile" style="font-size: 125px; line-height: 205px;">'.$total_contact.'</div>';
	}
}