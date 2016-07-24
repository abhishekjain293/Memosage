<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'memosage_data';


$link = mysql_connect($hostname,$username,$password);
$r = mysql_select_db($db_name,$link);
/*

if($r)
	echo "Connected";
else
	echo mysql_errno($link);
*/
?>