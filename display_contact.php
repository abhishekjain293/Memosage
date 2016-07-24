<?php
require_once('Connection.php');
$c_id=$_GET['select_contact'];
$SQL1 = "SELECT * FROM contact_data where contact_id=".$c_id;
//echo "<p>".$SQL1."</p>";
$res = mysql_query($SQL1);
//echo "<p>".$res."</p>";
$num_rec = mysql_num_rows($res);
if($num_rec > 0)
{
	while($row1 = mysql_fetch_assoc($res))
	{
		$_name=$row1['contact_name'];
		$_email=$row1['contact_email_address'];
		$_phone=$row1['contact_number'];
		$_comment=$row1['contact_comment'];
		$_address=$row1['contact_address'];
		$_date=$row1['contact_date'];
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
          Email        </div>
      </td>
      <td class="contactInfoCell">
        <div class="fieldValue" data-fieldid="workEmail1"><span class="fieldValue"><a rel="nofollow" href="mailto:'.$_email.'" title="Email '.$_email.'" target="_blank">'.$_email.'</a></span></div>      </td>
    </tr>
                <tr id="cf_workPhone" class="Phone">
      <td class="leftLabel contactInfoCell">
        <div class="fieldLabel">
          Phone        </div>
      </td>
      <td class="contactInfoCell">
        <div class="fieldValue" data-fieldid="workPhone1"><span class="fieldValue">'.$_phone.'</span></div>      </td>
    </tr>
	 </tr>
                <tr id="cf_workPhone" class="Phone">
      <td class="leftLabel contactInfoCell">
        <div class="fieldLabel">
          Date Of Birth       </div>
      </td>
      <td class="contactInfoCell">
        <div class="fieldValue" data-fieldid="workPhone1"><span class="fieldValue">'.$_date.'</span></div>      </td>
    </tr>
	  <tr id="cf_workPhone" class="Phone">
      <td class="leftLabel contactInfoCell">
        <div class="fieldLabel">
          Address       </div>
      </td>
      <td class="contactInfoCell">
        <div class="fieldValue" data-fieldid="workPhone1"><span class="fieldValue">'.$_address.'</span></div>      </td>
    </tr>
	<tr id="cf_workPhone" class="Phone">
      <td class="leftLabel contactInfoCell">
        <div class="fieldLabel">
          Comment       </div>
      </td>
      <td class="contactInfoCell">
        <div class="fieldValue" data-fieldid="workPhone1"><span class="fieldValue">'.$_comment.'</span></div>      </td>
    </tr>
                                                                                                                                  </tbody></table></div></div>';
																										
}
}