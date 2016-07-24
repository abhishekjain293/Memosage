<?php

require_once('session.php');
require_once('Connection.php');
if(isset($_POST['edit_diary1']))
{
	$d_time = $_POST['d_time'];
	$event_comment = $_POST['event_comment'];
	$d_diary = $_POST['d_diary'];
	$user_id = $_POST['hidden_diary_uid'];
	$_id=$_POST['hidden_diary_id'];
	$d_time = str_replace(' ','',$d_time);
	if($d_time!="")
	{
	
		$d_time= date("H:i",strtotime($d_time));
	}
	$d_diary=mysql_real_escape_string($d_diary);
	$SQL = "UPDATE diary_data SET diary_time ='".$d_time."',diary_note='".$d_diary."' WHERE diary_id =".$_id;
	//echo $SQL;
	$r = mysql_query($SQL);

	if($r)
	{
		header('Location:showdiary.php');
	} 
	else
	{
		echo "Error in Updation";
	}
}
$d_date=$_GET['edit_diary_update'];
$d_time=$_GET['edit_time'];
$t_date=date("Y/m/d", time());
$date1=strtotime($d_date);
$date2=strtotime($t_date);
if($date1==$date2)
{
$SQL1 = "SELECT * FROM diary_data where diary_date='".$d_date."' AND diary_time='".$d_time."'";
//echo $SQL1;
$res = mysql_query($SQL1);
$num_rec = mysql_num_rows($res);
if(isset($_SESSION["user_id"]))
{
	$us_id=$_SESSION["user_id"];
}
if($num_rec!=0)
{
	while($row1 = mysql_fetch_assoc($res))
	{
		$_time=$row1['diary_time'];
		$_date=$row1['diary_date'];
		$_note=$row1['diary_note'];
		$_id=$row1['diary_id'];
		
		echo '<form action="edit_diary.php" method="post" onsubmit="return diary_validate()" name="f4">
								<div class="top-margin">
									<label>Time<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="d_time" id="d_time" value="'.$_time.'">
								</div>
								<span id="f_n" class="text-danger"></span>
								<div class="top-margin">
									<label>Date<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="d_date" id="d_date" readonly value='.date("Y/m/d", time()).'>
								</div>
								<div class="top-margin">
									<label>Your Day<span class="text-danger">*</span></label>
									<textarea rows=30 col=100 class="form-control" name="d_diary" id="d_diary">'.$_note.'</textarea>
								</div>
								<span id="e_a" class="text-danger"></span>
								<input type="hidden" class="form-control" name="hidden_diary_uid" id="hidden_diary_uid" value='.$us_id.'>
								<input type="hidden" class="form-control" name="hidden_diary_id" id="hidden_diary_id" value="'.$_id.'">
								
								<hr>

								<div class="row">
									<div class="col-md-12 text-right">
										<button class="btn btn-action" name="edit_diary1" id="edit_diary1" type="submit">Edit Diary</button>
									</div>
								</div>
							</form>';
	}
}
}
else
{
	//echo '<script language="javascript"> alert("You cannot edit diary page other than today"s date") ;</script>';
	echo "<p>You cannot edit diary page other than today's date</p>";
}