<?php
require_once('Connection.php');
if(isset($_POST['Register']))
{
$file_name = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user_name = $_POST['user_name'];
$password = $_POST['_password'];
$email_address = $_POST['email_address'];
$mobile_number = $_POST['mobile_number'];
$address = $_POST['address'];
$date = $_POST['_year']."-".$_POST['_month']."-".$_POST['_date'];
$path = "assets/images/".$user_name;
$r = move_uploaded_file($tmp_name, $path);
$SQL = "INSERT INTO user_data VALUES (NULL,'$first_name','$last_name','$user_name','$password','$email_address',$mobile_number,'$address','$date','$path')";
$r = mysql_query($SQL);
header("Location: signin.php");
}

?>