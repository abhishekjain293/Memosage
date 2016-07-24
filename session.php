<?php

require_once("Connection.php");
session_start();

$user_check=$_SESSION['login_user'];
$user_id=$_SESSION['user_id'];
//$user_id=$_SESSION['u_id'];
$ses_sql=mysql_query("select username from user_data where username='$user_check'");
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
//$login_name =$row['first_name'];
if(!isset($login_session))
{
	header('Location: signin.php');
}
?>