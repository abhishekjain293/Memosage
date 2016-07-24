<form action="save_diary.php" method="post" onsubmit="return diary_validate()" name="f4">
								<div class="top-margin">
									<label>Time<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="d_time" id="d_time">
								</div>
								<span id="f_n" class="text-danger"></span>
								<div class="top-margin">
									<label>Date<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="d_date" id="d_date" readonly value='<?php echo date("Y/m/d", time());?>'>
								</div>
								<div class="top-margin">
									<label>Your Day<span class="text-danger">*</span></label>
									<textarea rows=30 col=100 class="form-control" name="d_diary" id="d_diary"></textarea>
								</div>
								<span id="e_a" class="text-danger"></span>
								
								<input type="hidden" class="form-control" name="hidden_diary_uid" id="hidden_diary_uid" value=<?php if(isset($_SESSION['user_id'])){echo $_SESSION['user_id'];} ?>>
								
								<hr>

								<div class="row">
									<div class="col-md-12 text-right">
										<button class="btn btn-action" name="save_diary1" id="save_diary1" type="submit">Save Diary</button>
									</div>
								</div>
							</form>