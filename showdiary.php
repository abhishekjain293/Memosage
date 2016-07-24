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
	<link rel="stylesheet" href="assets/css/showdiary.css">
	<script src="assets/js/diary_validate.js"></script>
	
	<script>
	$(function() 
	{
		$('#event_date').datepick({dateFormat: 'yyyy-mm-dd'});
		
	})
	</script>
	<script>
	$(function() 
	{
		$('#d_time').wickedpicker();
		
	})
	</script>
	<script>
	function checktime() {
	jQuery.ajax({
	url: "check_time.php",
	data:'username='+$("#d_date").val(),
	type: "POST",
	success:function(value){
             var data = value.split(",");
			 document.getElementById("_time").innerHTML="";
			// i=1;
			 //document.getElementById("d_time").value=data[6];
			// $("#d_time").val("hiii");
			 for(i=0;i<data.length;i++)
			 {
				 
				// $("#d_time").val(data[$i]);
				if(i==0)
				{
					document.getElementById("_time").innerHTML="<option value="+i+">Select Time</option>";
				}
				else
				{
					//alert(i);
				 document.getElementById("_time").innerHTML=document.getElementById("_time").innerHTML+"<option value="+data[i]+">"+data[i]+"</option>";
				}
            //$("#d_time").val(data[$i]);
           // $('#course_credit').val(data[1]);
			 }
        },
	error:function (){}
	});
}
	

	
	</script>

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
			<li class="active">Your Diary</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Daily Diary</h1>
				</header>
  <div class="table-responsive">
  <table class="table table-bordered" style="table-layout: fixed;width: 1200px;">
    <tbody>
      <tr>
        <td>
		<div id=heading_addcontact>
			<!--<div style="float:left">Select All</div>-->
		<div id=all_contacts>All Diary Pages</div>
		<a id=add_reminder href="showdiary.php?click=add_diary" name="add_diary" >Add Diary Page</a>
		</div>
		</td>
        <td class="contactListViewTd contactListViewTdLast" id="contactColumn">
		<div class="headerDiv contactListHeader" id="viewing_top_links">
      <div class="headerLink editContact">
        <ul>
          <li class="action edit" id="edit_reminder" onclick="location.href ='showdiary.php?edit_diary_update=<?php if(isset($_POST["show_diary_page"]))
			echo $_POST["d_date"];
		?>&edit_time=<?php if(isset($_POST["show_diary_page"]))
			echo $_POST["_time"];
		?>'">Edit Diary Page</li>
          <li class="action single delete active" id="delete_reminder" onclick="location.href ='delete_diary_update.php?delete_diary_update=<?php if(isset($_POST["show_diary_page"]))
			echo $_POST["d_date"];
		?>&delete_time=<?php if(isset($_POST["show_diary_page"]))
			echo $_POST["_time"];
		?>'">Delete Diary Page</li>
        </ul>
      </div>
    </div>
		</td>
       
      </tr>
	   <tr>
			<td>
			<div id="contactsContainer" style="position: relative; height:auto;">
			<div id="group_-1"> 
				<form action="showdiary.php" method="post">
								<div class="top-margin">
									<label>Date<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="d_date" id="d_date"onblur="checktime()" placeholder="yyyy-mm-dd">
								</div>
								
								<div class="top-margin">
									<label>Time</label>
										<select id="_time" name="_time">
										</select>
								</div>
								
								<hr>

								<div class="row">
									<div class="col-md-12 text-right">
										<button class="btn btn-action" name="show_diary_page" id="show_diary_page" type="submit">Show Diary Page</button>
									</div>
								</div>
				</form>
       
			</div>
		</div>
		</td>
       <td>
	   <?php
	   if(isset($_POST['show_diary_page']))
		{
			require_once('Connection.php');
			$d_date=$_POST['d_date'];
			$d_time=$_POST['_time'];
			$SQL1 = "SELECT * FROM diary_data where diary_date='".$d_date."' AND diary_time='".$d_time."'";
			//echo "<p>".$SQL1."</p>";
			//echo $SQL1;
			$res = mysql_query($SQL1);
			//echo "<p>".$res."</p>";
			$num_rec = mysql_num_rows($res);
			if($num_rec > 0)
			{
				while($row1 = mysql_fetch_assoc($res))
				{
					$_time=$row1['diary_time'];
					$_date=$row1['diary_date'];
					$_note=$row1['diary_note'];
					
					echo '<div style="margin-top: 40px;margin-left: 30px;margin-right: 30px;">'.$_note.'</div>';
				}
			}
		}
		elseif(isset($_GET['click']))
		{
			require_once('diary_form.php');
		}
		elseif(isset($_GET['edit_diary_update']))
		{
			//echo "<p>".$_GET['edit_contact_update']."</p>";
			require_once('edit_diary.php');
		}
		?>
	   </td>
      </tr>
    </tbody>
  </table>
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