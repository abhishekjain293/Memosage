<?php
require_once('Connection.php');
$e_id=$_GET['select_reminder'];
$SQL1 = "SELECT * FROM reminder_data where event_id=".$e_id;
//echo "<p>".$SQL1."</p>";
$res = mysql_query($SQL1);
//echo "<p>".$res."</p>";
$num_rec = mysql_num_rows($res);
if($num_rec > 0)
{
	while($row1 = mysql_fetch_assoc($res))
	{
		$_name=$row1['event_name'];
		$_email=$row1['event_date'];
		$_phone1=$row1['frequency'];
		$_comment=$row1['event_time'];
		$_address=$row1['event_comment'];
		if($_phone1==1)
		{
			$_phone="one time";
		}
		elseif($_phone1==2)
		{
			$_phone="every day";
		}
		elseif($_phone1==3)
		{
			$_phone="every week";
		}
		elseif($_phone1==4)
		{
			$_phone="every month";
		}
		else
		{
			$_phone="Once a Year";
		}
echo '<div class="contactViewInfo" id="version_1467379585">
<div class="photoCell">
    <div id="profilePhoto">
      <img class="photo" src="assets/images/avt.png" width="124"><br>
    </div>
</div>
<div class="contactDetailColumn">
    <div class="contactViewHeader">
      <div class="contactViewHeaderFields">
            <div id="cf_fullName" class="contactHeaderField">
    <div class="fieldValue" data-fieldid="fullName"><span class="fieldValue">'.$_name.'</span></div>  </div>
              <div class="clear"></div>
      </div>
    </div>
    <table class="contactInfoTable table-responsive">
        <tbody><tr id="cf_workEmail" class="Email">
      <td class="leftLabel contactInfoCell">
        <div class="fieldLabel">
          Date       </div>
      </td>
      <td class="contactInfoCell">
        <div class="fieldValue" data-fieldid="workEmail1"><span class="fieldValue">'.$_email.'</span></div>      </td>
    </tr>
                <tr id="cf_workPhone" class="Phone">
      <td class="leftLabel contactInfoCell">
        <div class="fieldLabel">
          Frequency        </div>
      </td>
      <td class="contactInfoCell">
        <div class="fieldValue" data-fieldid="workPhone1"><span class="fieldValue">'.$_phone.'</span></div>      </td>
    </tr>
	  <tr id="cf_workPhone" class="Phone">
      <td class="leftLabel contactInfoCell">
        <div class="fieldLabel">
          Message       </div>
      </td>
      <td class="contactInfoCell">
        <div class="fieldValue" data-fieldid="workPhone1"><span class="fieldValue">'.$_address.'</span></div>      </td>
    </tr>
	<tr id="cf_workPhone" class="Phone">
      <td class="leftLabel contactInfoCell">
        <div class="fieldLabel">
          Time       </div>
      </td>
      <td class="contactInfoCell">
        <div class="fieldValue" data-fieldid="workPhone1"><span class="fieldValue">'.$_comment.'</span></div>      </td>
    </tr>
                                                                                                                                  </tbody></table></div></div>';
																										
}
}