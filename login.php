<?php
session_start(); 
require_once("Connection.php");
$error=''; 
if (isset($_POST['sign_in'])) 
{
	if (empty($_POST['username']) || empty($_POST['password'])) 
	{
		$error = "Username or Password is invalid";
	}
	else
	{

		$username=$_POST['username'];
		$password=$_POST['password'];

		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);

		$SQL = mysql_query("select * from user_data where password='$password' AND username='$username'");
		$rows = mysql_num_rows($SQL);
		if ($rows == 1) 
		{	
			// output data of each row
			while($row = mysql_fetch_assoc($SQL)) 
			{
			//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
			$_SESSION['login_user']=$row['username'];
			//$_SESSION['u_id']=$rows['uid'];
			$_SESSION['user_id']=$row['uid'];
			$_SESSION['name']=$row['first_name'];
			$_SESSION['photo']=$row['user_image'];
			
			}
		} 
		
		else 
		{
			$error = "Username or Password is invalid";
		} 
	}
}
?>