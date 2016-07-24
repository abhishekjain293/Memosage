<form action="save_diary.php" method="post">
								<div class="top-margin">
									<label>Date<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="d_date" id="d_date "onblur="checktime()">
								</div>
								<div class="top-margin">
									<label>Time<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="d_time" id="d_time">
								</div>
								<hr>

								<div class="row">
									<div class="col-md-12 text-right">
										<button class="btn btn-action" name="save_diary" id="save_diary" type="submit">Show Diary Page</button>
									</div>
								</div>
</form>