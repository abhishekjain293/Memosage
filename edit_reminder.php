<?php

require_once('session.php');
require_once('Connection.php');
if(isset($_POST['edit_reminder1']))
{
	$event_name = $_POST['event_name'];
	$frequency = $_POST['frequency'];
	$event_date = $_POST['event_date'];
	$event_comment = $_POST['event_comment'];
	$event_time = $_POST['event_time'];
	$user_id = $_POST['hidden_uid'];
	$ev_id=$_POST['hidden_eid'];
	$event_time = str_replace(' ','',$event_time);
	if($event_time!="")
	{
	
		$event_time= date("H:i",strtotime($event_time));
	}
	$event_name=mysql_real_escape_string($event_name);
	$SQL = "UPDATE reminder_data SET event_name ='".$event_name."', frequency=".$frequency.",event_date='".$event_date."',event_comment='".$event_comment."',event_time='".$event_time."' WHERE event_id = ".$ev_id;
	//echo $SQL;
	$r = mysql_query($SQL);

	if($r)
	{
		header('Location:showreminder.php');
	} 
	else
	{
		echo "Error in Updation";
	}
}
$e_id=$_GET['edit_reminder_update'];
$SQL1 = "SELECT * FROM reminder_data where event_id=".$e_id;
//echo "<p>".$SQL1."</p>";
$res = mysql_query($SQL1);
//echo "<p>".$res."</p>";
if($res!="")
{
$num_rec = mysql_num_rows($res);
if(isset($_SESSION["user_id"]))
{
	$us_id=$_SESSION["user_id"];
}
if($num_rec > 0)
{
	while($row1 = mysql_fetch_assoc($res))
	{
		$_name=$row1['event_name'];
		$_date=$row1['event_date'];
		$_frequency=$row1['frequency'];
		$_comment=$row1['event_comment'];
		$_time=$row1['event_time'];
		
echo '<form name="f3" onsubmit="return reminder_validation()" action="edit_reminder.php" method="post">
								<div class="top-margin">
									<label>Give Your Reminder a Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="event_name" id="event_name" value="'.$_name.'">
									<span id="f_n" class="text-danger"></span>
								</div>
								<div class="top-margin">
									<label>Select the Date of Reminder<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="event_date" id="event_date" value="'.$_date.'">
									<span id="e_a" class="text-danger"></span>
								</div>
								<div class="top-margin">
									<label>Select the time of The Reminder<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="event_time" id="event_time" value="'.$_time.'">
								</div>
								<div class="top-margin">
									<label>How often Should this be displayed</label>
									  <select name="frequency" id="frequency" class="form-control">
										<option value="1">one-time</option>
										<option value="2">Every Day</option>
										<option value="3">Every Week</option>
										<option value="4">Each Month</option>
										<option value="5">Once a Year</option>
									  </select>
								</div>
								<span id="m_n" class="text-danger"></span>
								<div class="top-margin">
									<label>Message</label>
									<textarea rows=5 col=80 class="form-control" name="event_comment" id="event_comment">'.$_comment.'</textarea>
								</div>
								
								<input type="hidden" class="form-control" name="hidden_uid" id="hidden_uid" value='.$us_id.'>
								<input type="hidden" class="form-control" name="hidden_eid" id="hidden_eid" value='.$e_id.'>

								<hr>

								<div class="row">
									<div class="col-md-12 text-right">
										<button class="btn btn-action" type="submit" name="edit_reminder1" id="edit_reminder1">Edit Reminder</button>
									</div>
								</div>
							</form>';
	}
}
}
else
{
	echo '<p> Please Select a Reminder to Edit </p>';
}

?>