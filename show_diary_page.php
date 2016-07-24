<?php
require_once('Connection.php');
$d_date=$_POST['d_date'];
$d_time=$_POST['_time'];
$SQL1 = "SELECT * FROM diary_data where diary_date='".$d_date."' AND diary_time='".$d_time."'";
//echo "<p>".$SQL1."</p>";
//echo $SQL1;
$res = mysql_query($SQL1);
//echo "<p>".$res."</p>";
$num_rec = mysql_num_rows($res);
if($num_rec > 0)
{
	while($row1 = mysql_fetch_assoc($res))
	{
		$_time=$row1['diary_time'];
		$_date=$row1['diary_date'];
		$_note=$row1['diary_note'];
		
		echo '<div>'.$_note.'</div>';
	}
}
?>