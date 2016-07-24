
	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<div class="row">
			
			<!-- Article main content -->
				<div class="col-md-1">&nbsp </div>
				<div class="col-md-2 col-xs-12 col-sm-12">
				
				<div class="tiles">
				<div class="tile contactTile" onclick="switch_contact()">
					<div class="tileHeader">My Contacts</div>
					<?php require_once('show_contact.php'); ?>
				</div>
				</div>
				</div>
				<div class="col-md-1">&nbsp </div>
				<div class="col-md-4 col-xs-12 col-sm-12">
				<div class="tiles">
				<div class="tile1 contactTile" onclick="switch_diary()" >
					<div class="tileHeader">My Notes</div>
					<?php require_once('show_diary.php'); ?>
				</div>
				</div>
				</div> <!-- 2nd div md4 -->
				<div class="col-md-1">&nbsp </div>
				<div class="col-md-3 col-xs-12 col-sm-12">
				<div class="tile eventTile tooltipstered" onclick="switch_reminder()">
					<div class="tileHeader">Events</div>
					<div class="tileBody">
						<div class="boxContent" id="upcomingList">
							<?php require_once('show_reminder.php'); ?>
      </div>


</div>



</div>
				</div>
				
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	</div>
