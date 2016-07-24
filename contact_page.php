<?php
require_once('session.php');
?>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.datepick.css"> 
	<link rel="stylesheet" href="assets/css/wickedpicker.css">
	<link rel="stylesheet" href="assets/css/contact_page.css">
	<script src="assets/js/contact_validate.js"></script>
	

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<?php
		{
			require_once('login_header.php');
		}
?>
<header id="head" class="secondary"></header>
<div class="container">
<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Contacts</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Your Contacts</h1>
				</header>
  <div class="table-responsive responsive">
  <table class="table table-bordered responsive" style="table-layout: fixed;width:100%;">
    <tbody>
      <tr>
        <td>
		<div id=heading_addcontact>
			<!--<div style="float:left">Select All</div>-->
		<div id=all_contacts>All Contacts</div>
		<a id=add_contact href="contact_page.php?click=add_contact" name="add_contact" >add_contact</a>
		</div>
		</td>
        <td class="contactListViewTd contactListViewTdLast" id="contactColumn">
		<div class="headerDiv contactListHeader" id="viewing_top_links">
      <div class="headerLink editContact">
        <ul>
          <li class="action edit" id="edit_reminder" onclick="location.href ='contact_page.php?edit_contact_update=<?php if(isset($_GET["edit_contact"]))
			echo $_GET["edit_contact"];
		?>'">Edit Contact</li>
          
          <li class="action single delete active" id="delete_reminder" onclick="location.href ='delete_contact_update.php?delete_contact_update=<?php if(isset($_GET["edit_contact"]))
			echo $_GET["edit_contact"];
		?>'">Delete Contact</li>
        </ul>
      </div>
    </div>
		</td>
       
      </tr>
	   <tr>
			<td>
			<div id="contactsContainer" style="position: relative; height: 800px; overflow-y: auto;">
			<div id="group_-1"> 
				<?php
				require_once('fetch_contacts.php');
				?>
       
</div>
</div>
		</td>
       <td>
	   <?php
	   if(isset($_GET['click']))
		{
			require_once('contact_form.php');
		}
		
		elseif(isset($_GET['select_contact']))
		{
			//echo "<p>".$_GET['select_contact']."</p>";
			require_once('display_contact.php');
		}
		elseif(isset($_GET['edit_contact_update']))
		{
			//echo "<p>".$_GET['edit_contact_update']."</p>";
			require_once('edit_contact.php');
		}
		
		?>
	   </td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
</article>
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
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	<script type="text/javascript" src="assets/js/jquery.plugin.js"></script> 
	<script type="text/javascript" src="assets/js/jquery.datepick.js"></script>
	<script type="text/javascript" src="assets/js/wickedpicker.js"></script>
</body>
</html>