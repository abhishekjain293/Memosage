<form name="f3" onsubmit="return reminder_validation()" action="saving_reminder.php" method="post">
								<div class="top-margin">
									<label>Give Your Reminder a Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="event_name" id="event_name">
									<span id="f_n" class="text-danger"></span>
								</div>
								<div class="top-margin">
									<label>Select the Date of Reminder<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="event_date" id="event_date">
									<span id="e_a" class="text-danger"></span>
								</div>
								<div class="top-margin">
									<label>Select the time of The Reminder<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="event_time" id="event_time">
								</div>
								<div class="top-margin">
									<label>How often Should this be displayed</label>
									  <select name="frequency" id="frequency" class="form-control">
										<option value="1" selected>one-time</option>
										<option value="2">Every Day</option>
										<option value="3">Every Week</option>
										<option value="4">Each Month</option>
										<option value="5">Once a Year</option>
									  </select>
								</div>
								<span id="m_n" class="text-danger"></span>
								
								<div class="top-margin">
									<label>Message</label>
									<textarea rows=5 col=80 class="form-control" name="event_comment" id="event_comment"></textarea>
								</div>
								
								<input type="hidden" class="form-control" name="hidden_reminder_uid" id="hidden_reminder_uid" value=<?php if(isset($_SESSION['user_id'])){echo $_SESSION['user_id'];} ?>>

								<hr>

								<div class="row">
									<div class="col-md-12 text-right">
										<button class="btn btn-action" type="submit" name="save_reminder1" id="save_reminder1">Save Reminder</button>
									</div>
								</div>
							</form>