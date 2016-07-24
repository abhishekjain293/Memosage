<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	
	<title>Sign up - MemoSage</title>

	<link rel="shortcut icon" href="assets/images/fav2.ico">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	<script src="assets/js/validate.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script language="javascript" type="text/javascript">
$(function () {
    $("#fileupload").change(function () {
        $("#dvPreview").src("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#dvPreview").show();
                $("#dvPreview")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    //$("#dvPreview").show();
                    //$("#dvPreview").append("<img />");
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#dvPreview").attr("src", e.target.result);
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            }
        } else {
            alert("Please upload a valid image file.");
        }
    });
});
</script>
	</script>
	<style>
	.status-available{color:#2FC332;}
	.status-not-available{color:#D60202;}
	</style>
<script>
	$(document).ready(function(){
    $('_password').popover();
});
</script>
</head>

<body>
	<!-- Fixed navbar -->
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
					<li class="active"><a class="btn" href="signin.php">SIGN IN / SIGN UP</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Registration</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Registration</h1>
				</header>
				<form method=post name="f1" onsubmit="return validate()" action="registration.php" enctype="multipart/form-data">
				<div class="col-md-6 col-sm-4">
					  <div class="text-center">
						<img src="assets/images/avatar.png" onclick="photo_display()" class="avatar img-circle img-thumbnail" alt="avatar" id=""dvPreview"" name="picture">
						<h6>Upload a photo...</h6>
						<input type="file" name="file" id="file" class="text-center center-block well well-sm">
					  </div>
					</div>
				<div class="col-md-6 col-sm-8">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Register a new account</h3>
							<hr>

							
								
								<div class="top-margin">
									<label>First Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="first_name" id="first_name">
									<span id="f_n" class="text-danger"></span>
								</div>
								<div class="top-margin">
									<label>Last Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="last_name" id="last_name">
									<span id="l_n" class="text-danger"></span>
								</div>
								
								<div class="top-margin">
									<label>Username <span class="text-danger">*</span><span id="u_n_a" class="status-available"></span></label>
									<input type="text" class="form-control" name="user_name" id="user_name" onBlur="checkAvailability()">
									<span id="u_n" class="text-danger"></span>
									
								</div>

								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Password <span class="text-danger">*</span></label>
										<input type="password" class="form-control" name="_password" id="_password" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Some content inside the popover">
										<span id="p_s" class="text-danger"></span>
									</div>
									<div class="col-sm-6">
										<label>Confirm Password <span class="text-danger">*</span></label>
										<input type="password" class="form-control" name="confirm_password" id="confirm_password">
										<span id="c_p_s" class="text-danger"></span>
									</div>
								</div>
									<div class="top-margin">
									<label>Email Address <span class="text-danger">*</span><span id="e_a_a"></span></label>
									<input type="text" class="form-control" name="email_address" id="email_address" onBlur="checkEmailAvailability()">
									<span id="e_a" class="text-danger"></span>
								</div>
								<div class="top-margin">
									<label>Mobile Number <span class="text-danger">*</span></span><span id="m_n_a"></span></label>
									<input type="text" class="form-control" name="mobile_number" id="mobile_number" onBlur="checkPhoneAvailability()">
									<span id="m_n" class="text-danger"></span>
								</div>
								<div class="top-margin">
									<label>Address</label>
									<input type="text" class="form-control" name="address" id="address">
								</div><br><br>
								
								<div class="row top-margin">
								<div class="col-sm-3">
									<label>Date Of Birth :</label>
									
								</div>
								<div class="col-sm-3">
									<label>Month</label>
										<select id="_month" name="_month" onfocus=_month1()>
										</select>
									
								</div>
								<div class="col-sm-3">
									<label>Date</label>
										<select id="_date" name="_date" onfocus=_date1()>
										</select>
									
								</div>
								<div class="col-sm-3">
									<label>Year</label>
										<select id="_year" name="_year" onfocus=_year1()>
										</select>
									
								</div>
								</div>
								<span id="d_b" class="text-danger"></span>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<label class="checkbox">
											<input type="checkbox" name="terms_condition" id="terms_condition"> 
											I've read the <a href="page_terms.php">Terms and Conditions</a>
										</label> 
										<span id="t_c" class="text-danger"></span>
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit" name="Register">Register</button>
									</div>
								</div>
							
						</div>
					</div>

				</div>
				
			</article>
			</form>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	
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

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Home</a> | 
								<a href="about.php">About</a> |
								<a href="contact.php">Contact</a> |
								<b><a href="signup.php">Sign up</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2016,Designed by <a href="#" rel="designer">Abhishek</a> 
							</p>
						</div>
					</div>

				</div> 
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>