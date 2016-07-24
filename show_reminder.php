<?php
//require_once('session.php');
require_once('Connection.php');

if(isset($_SESSION['user_id']))
{
	$uid = $_SESSION['user_id'];
} 
$SQL = "SELECT * FROM reminder_data where uid=".$uid;
//echo "<p>".$SQL."</p>";
$rs = mysql_query($SQL);
$rs1 = mysql_query($SQL);
$date = date('Y/m/d', time());
$date3 = strtotime("+1 day", strtotime($date));
$date33=date("Y-m-d", $date3);
		
$count=0;
$counter=0;
//echo "<p>".$SQL."</p>";
$num_records = mysql_num_rows($rs);
//echo "<p>".$num_records."</p>";
if($num_records>0)
{
	
	while($row = mysql_fetch_array($rs))
	{
		$e_name=$row['event_name'];
		$e_id=$row['event_id'];
		$e_date=$row['event_date'];
		$e_time=$row['event_time'];
		$e_frequency=$row['frequency'];
		$e_comment=$row['event_comment'];
		//echo $e_time;
		//date_default_timezone_set("India/Dili");
		$time=date("H:i");
		//$e_time=date("H:i", strtotime($e_time));
		//echo $e_time;
		//echo "The time is " . $e_time."<br>";
//echo date("H:i", strtotime($e_time))."<br>";
//echo $e_time."<br>";
		//$date = date('Y/m/d', time());
		//$date3 = strtotime("+1 day", strtotime($date));
		//$date33=date("Y-m-d", $date3);
		//$e_date = date('d/m/Y', strtotime($e_date));
		//echo $date3."<br>";
		//echo $date33."<br>";
		
		//echo $e_date."<br>";
		//echo $date_tm."<br>";
		$date1=strtotime($date);
		//$date3=strtotime($date_tm);
		$date2=strtotime($e_date);
		$dateofmonth1=date('d', strtotime($e_date));
		$dateofmonth2=date('d', strtotime($date));
		//echo $date1."<br>";
		//echo $date2."<br>";
		if($e_frequency==1)
		{	
			if($date1==$date2)
			{
				$count=1;
				//echo date('F d Y', strtotime($date));
				if($e_time!="")
				{
					if(strtotime($time)<=strtotime("+4 hour" , strtotime($e_time)) && strtotime($time)>=strtotime($e_time))
					{
					echo '<div class="day">
								<div class="preview_header">
									<span>Today</span> -'.date('F d Y', strtotime($date)).'    
								</div>

							
								  <div class="day_items"><div class="event"><div class="event_graphic calEvent"></div><div class="event_text">'.$e_name.' at '.$e_time.'</a></div><!--div class="event_title"--><!--/div--><div class="clear"></div></div></div>
								</div>';
					//$count=1;
					}
				}
				else
				{
					echo '<div class="day">
								<div class="preview_header">
									<span>Today</span> -'.date('F d Y', strtotime($date)).'    
								</div>

							
								  <div class="day_items"><div class="event"><div class="event_graphic calEvent"></div><div class="event_text">'.$e_name.'</a></div><!--div class="event_title"--><!--/div--><div class="clear"></div></div></div>
								</div>';
				}
			}
		}
		elseif($e_frequency==2)
		{
				$count=1;
				if($e_time!="")
				{	
					//echo strtotime('+1 hour' , strtotime($e_time));
					//echo "<br>";
					//echo strtotime($time);
					if(strtotime($time)<=strtotime("+4 hour" , strtotime($e_time)) && strtotime($time)>=strtotime($e_time))
					{
						
						echo '<div class="day">
								<div class="preview_header">
									<span>Today</span> -'.date('F d Y', strtotime($date)).'    
								</div>

							
								  <div class="day_items"><div class="event"><div class="event_graphic calEvent"></div><div class="event_text"> '.$e_name.' at '.$e_time.'</a></div><!--div class="event_title"--><!--/div--><div class="clear"></div></div></div>
								</div>';
					}
					
				}
				else
					{
						echo '<div class="day">
								<div class="preview_header">
									<span>Today</span> -'.date('F d Y', strtotime($date)).'    
								</div>

							
								  <div class="day_items"><div class="event"><div class="event_graphic calEvent"></div><div class="event_text"> '.$e_name.'</a></div><!--div class="event_title"--><!--/div--><div class="clear"></div></div></div>
								</div>';
					}
		}
		elseif($e_frequency==3)
		{
			$dayofweek1 = date('w', strtotime($e_date));
			$dayofweek2 = date('w', strtotime($date));
				//echo $dayofweek1."<br>";
				//echo $dayofweek1;
			if($dayofweek1==$dayofweek2)
			{
				$count=1;
				if($e_time!="")
				{
					if(strtotime($time)<=strtotime("+4 hour" , strtotime($e_time)) && strtotime($time)>=strtotime($e_time))
					{
						echo '<div class="day">
										<div class="preview_header">
											<span>Today</span> -'.date('F d Y', strtotime($date)).'    
										</div>

									
										  <div class="day_items"><div class="event"><div class="event_graphic calEvent"></div><div class="event_text"> '.$e_name.' at '.$e_time.'</a></div><!--div class="event_title"--><!--/div--><div class="clear"></div></div></div>
										</div>';
					}
				}
				else
				{
					echo '<div class="day">
										<div class="preview_header">
											<span>Today</span> -'.date('F d Y', strtotime($date)).'    
										</div>

									
										  <div class="day_items"><div class="event"><div class="event_graphic calEvent"></div><div class="event_text"> '.$e_name.'</a></div><!--div class="event_title"--><!--/div--><div class="clear"></div></div></div>
										</div>';
				}
			}
		}
		elseif($e_frequency==4)
		{
			$dateofmonth1=date('d', strtotime($e_date));
			$dateofmonth2=date('d', strtotime($date));
			if($dateofmonth1==$dateofmonth2)
			{
				$count=1;
				if($e_time!="")
				{
					if(strtotime($time)<=strtotime("+4 hour" , strtotime($e_time)) && strtotime($time)>=strtotime($e_time))
					{
						echo '<div class="day">
										<div class="preview_header">
											<span>Today</span> -'.date('F d Y', strtotime($date)).'    
										</div>

									
										  <div class="day_items"><div class="event"><div class="event_graphic calEvent"></div><div class="event_text"> '.$e_name.' at '.$e_time.'</a></div><!--div class="event_title"--><!--/div--><div class="clear"></div></div></div>
										</div>';
					}
				}
				else
				{
					echo '<div class="day">
										<div class="preview_header">
											<span>Today</span> -'.date('F d Y', strtotime($date)).'    
										</div>

									
										  <div class="day_items"><div class="event"><div class="event_graphic calEvent"></div><div class="event_text"> '.$e_name.'</a></div><!--div class="event_title"--><!--/div--><div class="clear"></div></div></div>
										</div>';
					
				}
			}
		}
		elseif($e_frequency==5)
		{
			$month1=date('m', strtotime($e_date));
			$month2=date('m', strtotime($date));
			//echo $month1;
			//echo $month2;
			if($month1==$month2)
			{
				$dateofmonth1=date('d', strtotime($e_date));
				$dateofmonth2=date('d', strtotime($date));

				//echo $e_time;
				if($dateofmonth1==$dateofmonth2)
				{
					$count=1;
					if($e_time!="")
					{
						if(strtotime($time)<=strtotime("+4 hour" , strtotime($e_time)) && strtotime($time)>=strtotime($e_time))
						{
							echo '<div class="day">
											<div class="preview_header">
												<span>Today</span> -'.date('F d Y', strtotime($date)).'    
											</div>

										
											  <div class="day_items"><div class="event"><div class="event_graphic calEvent"></div><div class="event_text"> '.$e_name.' at '.$e_time.'</a></div><!--div class="event_title"--><!--/div--><div class="clear"></div></div></div>
											</div>';
						}
					}
					else
					{
						echo '<div class="day">
											<div class="preview_header">
												<span>Today</span> -'.date('F d Y', strtotime($date)).'    
											</div>

										
											  <div class="day_items"><div class="event"><div class="event_graphic calEvent"></div><div class="event_text"> '.$e_name.'</a></div><!--div class="event_title"--><!--/div--><div class="clear"></div></div></div>
											</div>';
						
					}
				}
			}
			
		}
	}
	if($count==0)
	{
		echo '<div class="day">
											<div class="preview_header">
												<span>Today</span> -'.date('F d Y', strtotime($date)).'    
											</div>

										
											  <div class="day_items"><div class="event"><div class="event_graphic calEvent"></div><div class="event_text"> no events</a></div><!--div class="event_title"--><!--/div--><div class="clear"></div></div></div>
											</div>';
	}
	while($row1 = mysql_fetch_array($rs1))
	{
		$e_name=$row1['event_name'];
		$e_id=$row1['event_id'];
		$e_date=$row1['event_date'];
		$e_time=$row1['event_time'];
		$e_frequency=$row1['frequency'];
		$e_comment=$row1['event_comment'];
		//date_default_timezone_set("India/Dili");
		$time=date("h:i");
		//echo "The time is " . $time."<br>";
//echo date("G:i", strtotime($time))."<br>";
		$date = date('Y/m/d', time());
		$date3 = strtotime("+1 day", strtotime($date));
		$date33=date("Y-m-d", $date3);
		//$e_date = date('d/m/Y', strtotime($e_date));
		
		
		//echo $e_date."<br>";
		//echo $date_tm."<br>";
		$date1=strtotime($date);
		//$date3=strtotime($date_tm);
		$date2=strtotime($e_date);
		$dateofmonth1=date('d', strtotime($e_date));
		$dateofmonth2=date('d', strtotime($date));
		//echo $date1."<br>";
		//echo $date2."<br>";
		//echo $date3."<br>";
		//echo $date33."<br>";
		if($e_frequency==1)
		{
			if($date3==$date2)
			{
				$counter=1;
				//echo date('F d Y', strtotime($date));
					echo '<div class="day">
								<div class="preview_header">
									<span>Tomorrow</span> -'.date('F d Y', strtotime($date33)).'    
								</div>

							
								  <div class="day_items"><div class="event"><div class="event_graphic calEvent"></div><div class="event_text"> '.$e_name.'</a></div><!--div class="event_title"--><!--/div--><div class="clear"></div></div></div>
								</div>';
					//$count=1;
			}
		}
		elseif($e_frequency==2)
		{	
						$counter=1;
				
						echo '<div class="day">
								<div class="preview_header">
									<span>Tomorrow</span> -'.date('F d Y', strtotime($date33)).'    
								</div>

							
								  <div class="day_items"><div class="event"><div class="event_graphic calEvent"></div><div class="event_text"> '.$e_name.'</a></div><!--div class="event_title"--><!--/div--><div class="clear"></div></div></div>
								</div>';
		}
		elseif($e_frequency==3)
		{
			$dayofweek1 = date('w', strtotime($e_date));
			$dayofweek2 = date('w', strtotime($date33));
				//echo $dayofweek1."<br>";
				//echo $dayofweek1;
			if($dayofweek1==$dayofweek2)
			{
				$counter=1;
				
						echo '<div class="day">
										<div class="preview_header">
											<span>Tomorrow</span> -'.date('F d Y', strtotime($date33)).'    
										</div>

									
										  <div class="day_items"><div class="event"><div class="event_graphic calEvent"></div><div class="event_text"> '.$e_name.'</a></div><!--div class="event_title"--><!--/div--><div class="clear"></div></div></div>
										</div>';
					
				}
				
		}
		elseif($e_frequency==4)
		{
			$dateofmonth1=date('d', strtotime($e_date));
			$dateofmonth2=date('d', strtotime($date33));
			if($dateofmonth1==$dateofmonth2)
			{
				$counter=1;
						echo '<div class="day">
											<div class="preview_header">
												<span>Tomorrow</span> -'.date('F d Y', strtotime($date33)).'    
											</div>

										
											  <div class="day_items"><div class="event"><div class="event_graphic calEvent"></div><div class="event_text"> '.$e_name.'</a></div><!--div class="event_title"--><!--/div--><div class="clear"></div></div></div>
											</div>';
				}
				
		}
		elseif($e_frequency==5)
		{
			$month1=date('m', strtotime($e_date));
			$month2=date('m', strtotime($date33));
			if($month1==$month2)
			{
				$dateofmonth1=date('d', strtotime($e_date));
				$dateofmonth2=date('d', strtotime($date33));
				if($dateofmonth1==$dateofmonth2)
				{
					$counter=1;
							echo '<div class="day">
											<div class="preview_header">
												<span>Tomorrow</span> -'.date('F d Y', strtotime($date33)).'    
											</div>

										
											  <div class="day_items"><div class="event"><div class="event_graphic calEvent"></div><div class="event_text"> '.$e_name.'</a></div><!--div class="event_title"--><!--/div--><div class="clear"></div></div></div>
											</div>';
				}
					
			}
			
		}
		
		//echo $e_date."<br>";
		
		/*echo $e_name."<br>";
		echo $e_id."<br>";
		echo $e_date."<br>";
		echo $e_time."<br>";
		echo $e_frequency."<br>";
		echo $e_comment."<br>"."<br>";*/
		
   
	}
	if($counter==0)
		{
			echo '<div class="day">
											<div class="preview_header">
												<span>Tomorrow</span> -'.date('F d Y', strtotime($date33)).'    
											</div>

										
											  <div class="day_items"><div class="event"><div class="event_graphic calEvent"></div><div class="event_text"> no events</a></div><!--div class="event_title"--><!--/div--><div class="clear"></div></div></div>
											</div>';
			
		}
}
else
	echo '<div class="day">
											<div class="preview_header">
												<span>Today</span> -'.date('F d Y', strtotime($date)).'    
											</div>

										
											  <div class="day_items"><div class="event"><div class="event_graphic calEvent"></div><div class="event_text"> no events</a></div><!--div class="event_title"--><!--/div--><div class="clear"></div></div></div>
											</div><div class="day">
											<div class="preview_header">
												<span>Tomorrow</span> -'.date('F d Y', strtotime($date33)).'    
											</div>

										
											  <div class="day_items"><div class="event"><div class="event_graphic calEvent"></div><div class="event_text"> no events</a></div><!--div class="event_title"--><!--/div--><div class="clear"></div></div></div>
											</div>';
?>