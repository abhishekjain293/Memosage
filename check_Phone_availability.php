<?php
require_once("Connection.php");


if(!empty($_POST["phone"])) {
  $result = mysql_query("SELECT count(*) FROM user_data WHERE mobile_number=" . $_POST["phone"] . "");
  if($result!="" || $result!=null)
  {
	$row = mysql_fetch_row($result);
	$user_count = $row[0];
	if($user_count>0) 
	{
		echo "<span class='status-not-available'> Mobile Number is already in use.<a href='signin.php'> Sign In</a></span>";
	}
  }

}
?>