<?php
//require_once('session.php');
require_once('Connection.php');

if(isset($_SESSION['user_id']))
{
	$uid = $_SESSION['user_id'];
} 
$SQL = "SELECT * FROM diary_data where uid=".$uid;
//echo "<p>".$SQL."</p>";
$rs = mysql_query($SQL);
$rs1 = mysql_query($SQL);
$count=0;
$counter=0;
$maxid=0;
//echo $rs;
$num_records = mysql_num_rows($rs);
if($num_records>0)
{
	
	while($row = mysql_fetch_array($rs))
	{	
		$d_time=$row['diary_time'];
		$d_id=$row['diary_id'];
		$d_date=$row['diary_date'];
		$d_diary=$row['diary_note'];
		$time=date("h:i");
		//echo "The time is " . $time."<br>";
//echo date("G:i", strtotime($time))."<br>";
		$date = date('Y/m/d', time());
		//$date3 = strtotime("+1 day", strtotime($date));
		//$date33=date("Y-m-d", $date3);
		//$e_date = date('d/m/Y', strtotime($e_date));
		//echo $date3."<br>";
		//echo $date33."<br>";
		
		//echo $e_date."<br>";
		//echo $date_tm."<br>";
		$date1=strtotime($date);
		//$date3=strtotime($date_tm);
		$date2=strtotime($d_date);
		//$dateofmonth1=date('d', strtotime($d_date));
		//$dateofmonth2=date('d', strtotime($date));
		//echo $date1."<br>";
		//echo $date2."<br>";
		if($d_id>$maxid)
		{
			$maxid=$d_id;
		}
	}
	while($row1 = mysql_fetch_array($rs1))
	{	
		$d_time=$row1['diary_time'];
		$d_id=$row1['diary_id'];
		$d_date=$row1['diary_date'];
		$d_diary=$row1['diary_note'];
		$time=date("h:i");
		//echo "The time is " . $time."<br>";
//echo date("G:i", strtotime($time))."<br>";
		$date = date('Y/m/d', time());
		//$date3 = strtotime("+1 day", strtotime($date));
		//$date33=date("Y-m-d", $date3);
		//$e_date = date('d/m/Y', strtotime($e_date));
		//echo $date3."<br>";
		//echo $date33."<br>";
		
		//echo $e_date."<br>";
		//echo $date_tm."<br>";
		$date1=strtotime($date);
		//$date3=strtotime($date_tm);
		$date2=strtotime($d_date);
		//$dateofmonth1=date('d', strtotime($d_date));
		//$dateofmonth2=date('d', strtotime($date));
		//echo $date1."<br>";
		//echo $date2."<br>";
		//echo $maxid;
			if($d_id==$maxid)
			{
				echo '<div class="tileBody numberTile" style="font-size: 20px; line-height: 25px; word-wrap:break-word">'.$d_diary.'</div>';
			}
	}
}
else
{
	echo '<div class="tileBody numberTile" style="font-size: 20px; line-height: 25px; word-wrap:break-word">No Page To Show<br> Start writing your diary pages </div>';
}