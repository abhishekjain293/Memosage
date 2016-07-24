<?php
require_once('Connection.php');
require_once('session.php');
if(isset($_SESSION['user_id']))
{
	$uid = $_SESSION['user_id'];
} 
	//echo "<p>".$one."</p>";
$SQL = "SELECT event_name,event_id FROM reminder_data where uid=".$uid;
//echo "<p>".$SQL."</p>";
$rs = mysql_query($SQL);
$num_records = mysql_num_rows($rs);
if($num_records>0)
{
	
	       
	while($row = mysql_fetch_array($rs))
	{
		$e_name=$row['event_name'];
		$e_id=$row['event_id'];
    echo ' <a id=select_reminder href="showreminder.php?select_reminder='.$e_id.'&edit_reminder='.$e_id.'"name="select_reminder" ><div class="contact selected">

   <div class="contactInfo">
            

      <div class="photoIcon">&nbsp;</div><div class="name">'.$e_name.'</div>
    </div>
	

    <div style="clear: both;"></div>
  </div></a>';
	}
}
?>