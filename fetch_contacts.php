<?php
require_once('session.php');
$letters = range('A', 'Z');
require_once('Connection.php');
if(isset($_SESSION['user_id']))
{
	$uid = $_SESSION['user_id'];
} 
foreach ($letters as $one) {
	//echo "<p>".$one."</p>";
$SQL = "SELECT contact_name,contact_id FROM contact_data where contact_name LIKE '".$one."%' AND uid='".$uid."'";
//echo "<p>".$SQL."</p>";
$rs = mysql_query($SQL);
$num_records = mysql_num_rows($rs);
if($num_records>0)
{
	
	       
				echo '<h1 id="-1'.$one.'">'.$one.'</h1>';
	while($row = mysql_fetch_array($rs))
	{
		$c_name=$row['contact_name'];
		$c_id=$row['contact_id'];
    echo ' <a id=select_contact href="contact_page.php?select_contact='.$c_id.'&edit_contact='.$c_id.'"name="select_contact" ><div class="contact selected">

   <div class="contactInfo">
            

      <div class="photoIcon">&nbsp;</div><div class="name">'.$c_name.'</div>
    </div>
	

    <div style="clear: both;"></div>
  </div></a>';
	}
}
}
?>