<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	
	<title>Contact us - MemoSage</title>

	<link rel="shortcut icon" href="assets/images/fav2.ico">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	<script src="assets/js/contactus_validate.js"></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
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
	
	<!--<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Contact Us</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contact us</h1>
				</header>
				
				<p>
					We’d love to hear from you. Interested in working together? Fill out the form below with some info about you
				</p>
				<br>
					<form action="contact.php" method="post" name="f5" onsubmit="return contactus_validate()">
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Name" name="query_name" id="query_name">
								<span id="f_n" class="text-danger"></span>
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Email" name="query_email" id="query_email">
								<span id="e_a" class="text-danger"></span>
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Phone" name="query_phone" id="query_phone">
								<span id="m_n" class="text-danger"></span>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea placeholder="Type your message here..." class="form-control" rows="9" name="query_msg" id="query_msg"></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<label class="checkbox"><input type="checkbox" name="query_check" id="query_check"> Sign up for more Information</label>
							</div>
							<div class="col-sm-6 text-right">
								<input class="btn btn-action" type="submit" value="Send message" name="query_send" id="query_send">
							</div>
						</div>
						<div class="row">
						<div class="col-sm-12">
						<?php
						require_once('Connection.php');
						if(isset($_POST['query_send']))
						{

						$_name = $_POST['query_name'];
						$_check = $_POST['query_check'];
						//$user_name = $_POST['user_name'];
						//$password = $_POST['_password'];
						$email_address = $_POST['query_email'];
						$mobile_number = $_POST['query_phone'];
						$address = $_POST['query_msg'];
						$SQL = "INSERT INTO contactus_data VALUES (NULL,'$_name','$email_address',$mobile_number,'$address','$_check')";
						//echo $SQL;
						$r = mysql_query($SQL);
						if($r)
						{
						echo "<h4 class='text-danger'>Thank You ! We'll Contact you Shortly </h4>";
						}
						else
						{
						echo "<h4 class='text-danger'>Please Write Again </h4>";
						}
						}
						?>
						</div>
						</div>
					</form>

			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Address</h4>
					<address>
						Codex near reliance fresh
					</address>
					<h4>Phone:</h4>
					<address>
						+91-8233325322
					</address>
				</div>

			</aside>
			

		</div>
	</div>	
	
	<section class="container-full top-space">
		<div id="map"></div>
	</section>

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
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="assets/js/google-map.js"></script>
	

</body>
</html>