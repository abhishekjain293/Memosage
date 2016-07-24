<?php
require_once("Connection.php");


if(!empty($_POST["email"])) {
  $result = mysql_query("SELECT count(*) FROM user_data WHERE email_address='" . $_POST["email"] . "'");
  $row = mysql_fetch_row($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span class='status-not-available'> Email Id is already in use.<a href='signin.php'> Sign In</a></span>";
  }
}
?>