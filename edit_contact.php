<?php

require_once('session.php');
require_once('Connection.php');
if(isset($_POST['edit_contact1'])){
	$contact_name = $_POST['contact_name'];
	$contact_number = $_POST['contact_number'];
	$contact_email_address = $_POST['contact_email_address'];
	$contact_comment = $_POST['contact_comment'];
	$d_date = $_POST['d_date'];
	$contact_address = $_POST['contact_address'];
	$user_id = $_POST['hidden_uid'];
	$co_id=$_POST['hidden_cid'];
	$SQL = "UPDATE contact_data SET contact_name ='".$contact_name."', contact_number=".$contact_number.",contact_email_address='".$contact_email_address."',contact_comment='".$contact_comment."',contact_address='".$contact_address."',contact_date='".$d_date."' WHERE contact_id = ".$co_id;
	$r = mysql_query($SQL);

	if($r)
	{
		header('Location:contact_page.php');
	} 
	else
	{
		echo "Error in Updation";
	}
}
$c_id=$_GET['edit_contact_update'];
$SQL1 = "SELECT * FROM contact_data where contact_id=".$c_id;
//echo "<p>".$SQL1."</p>";
$res = mysql_query($SQL1);
//echo "<p>".$res."</p>";
//echo $res;
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
		$_name=$row1['contact_name'];
		$_email=$row1['contact_email_address'];
		$_phone=$row1['contact_number'];
		$_comment=$row1['contact_comment'];
		$_address=$row1['contact_address'];
		$d_date=$row1['contact_date'];
		
echo '<form name="f2" action="edit_contact.php" onsubmit="return contact_validate()" method="post">
								<div class="top-margin">
									<label>Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="contact_name" id="contact_name" value="'.$_name.'">
									<span id="f_n" class="text-danger"></span>
								</div>
								<div class="top-margin">
									<label>Contact Number<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="contact_number" id="contact_nuber" value='.$_phone.'>
									<span id="m_n" class="text-danger"></span>
								</div>
								<div class="top-margin">
									<label>Email-Address</label>
									<input type="text" class="form-control" name="contact_email_address" id="contact_email_address" value="'.$_email.'">
									<span id="e_a" class="text-danger"></span>
								</div>
								<div class="top-margin">
									<label>Date of Birth<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="d_date" id="d_date" value="'.$d_date.'">
								</div>
								<div class="top-margin">
									<label>Address</label>
									<input type="text" class="form-control" name="contact_address" id="contact_address" value="'.$_address.'">
								</div>
								<div class="top-margin">
									<label>Comment</label>
									<textarea rows=5 col=80 class="form-control" name="contact_comment" id="contact_comment">'.$_comment.'</textarea>
								</div>
								<input type="hidden" class="form-control" name="hidden_uid" id="hidden_uid" value='.$us_id.'>
								<input type="hidden" class="form-control" name="hidden_cid" id="hidden_uid" value='.$c_id.'>

								<hr>

								<div class="row">
									<div class="col-md-12 text-right">
										<button class="btn btn-action" type="submit" name="edit_contact1" id="edit_contact1">Edit</button>
									</div>
								</div>
							</form>';
	}
}
}
else
{
	echo '<p>Please select a Contact to edit </p>';
}
?>