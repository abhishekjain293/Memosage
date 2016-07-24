<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	
	<title>MemoSage</title>

	<link rel="shortcut icon" href="assets/images/fav2.ico">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/profile.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script>
	function switch_contact()
	{
		 document.location.href = 'contact_page.php';
	}
	function switch_diary()
	{
		 document.location.href = 'showdiary.php';
	}
	function switch_reminder()
	{
		 document.location.href = 'showreminder.php';
	}
	</script>
	
</head>

<body class="home">

	<?php
		session_start();
		if(isset($_SESSION['login_user']))
		{
			require_once('login_header.php');
		}
		else
		{
			require_once('header.php');
		}
	?>
	<?php
		if(isset($_SESSION['login_user']))
		{
			require_once('main_profile.php');
		}
		else
		{
			require_once('main_index.php');
		}
	?>
	
	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+91-8233325322<br>
								<a href="mailto:#">dashdash@dash.com</a><br>
								<br>
								Codexinfo solutions near reliance fresh
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

				</div> 
			</div>
		</div>
		<?php
		if(isset($_SESSION['login_user']))
		{
			require_once('login_footer.php');
		}
		else
		{
			require_once('footer.php');
		}
		?>
		




	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>