
<form onsubmit="return contact_validate()" action="saving_contact.php" method="post" name="f2">
								<div class="top-margin">
									<label>Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="contact_name" id="contact_name">
									<span id="f_n" class="text-danger"></span>
								</div>
								<div class="top-margin">
									<label>Contact Number<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="contact_number" id="contact_nuber">
									<span id="m_n" class="text-danger"></span>
								</div>
								<div class="top-margin">
									<label>Email-Address</label>
									<input type="text" class="form-control" name="contact_email_address" id="contact_email_address">
									<span id="e_a" class="text-danger"></span>
								</div>
								<div class="top-margin">
									<label>Date Of Birth<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="d_date" id="d_date">
								</div>
								<div class="top-margin">
									<label>Address</label>
									<input type="text" class="form-control" name="contact_address" id="contact_address">
								</div>
								<div class="top-margin">
									<label>Comment</label>
									<textarea rows=5 col=80 class="form-control" name="contact_comment" id="contact_comment"></textarea>
								</div>
								<input type="hidden" class="form-control" name="hidden_uid" id="hidden_uid" value=<?php if(isset($_SESSION['user_id'])){echo $_SESSION['user_id'];} ?>>
								

								<hr>

								<div class="row">
									<div class="col-md-12 text-right">
										<button class="btn btn-action" type="submit" name="save_contact" id="save_contact">Save</button>
									</div>
								</div>
</form>