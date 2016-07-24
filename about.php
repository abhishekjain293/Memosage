<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	
	<title>About - MemoSage</title>

	<link rel="shortcut icon" href="assets/images/fav2.ico">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">


	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	
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
	

	<!--<header id="head" class="secondary"></header>-->

	
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">About</li>
		</ol>

		<div class="row">
			
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">About MemoSage</h1>
				</header>
				
				<p>In 2016, we set out to solve a difficult problem - how can we help  personal diaries so that they never become out-of-date?<br>

We've made great strides in this endeavor, powering a unique diary system that consolidates all your contacts,Reminders ,Diary page and cleans and updates contact information, and syncs your pristine address book everywhere you need it - all securely backed-up in the cloud.</p>

<p>MemoSage is going to become the world's leading online diary.</p>
				<p>And as new devices, online services, and social networks arise, the people you know and their contact information will only become increasingly fragmented and unreliable. We remain dedicated to evolving and supporting our products and helping our members navigate the shifting communications landscape to ensure that MemoSage truly is and remains, your personal diary for life.</p>
				
			</article>
			<aside class="col-sm-4 sidebar sidebar-right">

				<div class="widget">
					
				</div>

			</aside>

		</div>
	</div>	
	

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