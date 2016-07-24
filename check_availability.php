<?php
require_once("Connection.php");


if(!empty($_POST["username"])) {
  $result = mysql_query("SELECT count(*) FROM user_data WHERE username='" . $_POST["username"] . "'");
  $row = mysql_fetch_row($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span class='status-not-available'> Username Not Available.</span>";
  }else{
      echo "Username Available";
  }
}
?>