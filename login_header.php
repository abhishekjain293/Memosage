
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/logo4.png"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-top: 5px;"><span class="profile-ava">
                                <img alt="" src="<?php if($_SESSION['photo']=='assets/images/'){echo 'assets/images/avatar.png';}else{ echo $_SESSION['photo'];} ?>"></img>
							
                            <?php if(isset($_SESSION['login_user'])){echo $_SESSION['name'];} ?><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="active"><a href="contact_page.php">Contacts</a></li>
							<li><a href="showreminder.php">Reminder</a></li>
							<li><a href="showdiary.php">Daily Diary</a></li>
							<li><a href="logout.php">Log Out</a></li>
						</ul>
					</li>

					<!--<li><a class="btn" href="profile.php">Hello  <br><?php if(isset($_SESSION['login_user'])){echo $_SESSION['name'];} ?></a></li>
					<li><a class="btn" href="logout.php">Log Out</a></li>-->
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 