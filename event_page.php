<?php require_once("includes/base.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

<?php 
	$username = $_SESSION['currentuser'];
	$query = mysql_query("SELECT * FROM User WHERE User_username = '$username'");
	if(!$query)
	{
		echo mysql_error();
	}
	$numrows = mysql_num_rows($query);
	$row = mysql_fetch_array($query);
	$email = $row['User_email'];
?>

<?php
    $username = $_SESSION['currentuser'];
    $queryx = mysql_query("SELECT * FROM User WHERE User_username = '$username'");
	if(!$queryx)
	{
		echo mysql_error();
	}
	$numrows = mysql_num_rows($queryx);
	$row = mysql_fetch_array($queryx);
	$User_id = $row['User_id'];
	$User_address=$row['User_address'];
?>

<?php
	$id = $_GET['id'];
	
	$query = mysql_query("SELECT * FROM Event WHERE Ev_id = '$id'");
	if(!$query)
	{
		echo mysql_error();
	}
	$row = mysql_fetch_array($query);
	$image = $row['Ev_photo'];
	//$id = $row['Ev_id'];
	$Ev_location = $row['Ev_location'];
	$Ev_description = $row['Ev_description'];
	$Ev_date = $row['Ev_date'];
	$Ev_time = $row['Ev_time'];
	$Ev_auth = $row['Ev_auth'];
	$owner=$row['User_id'];
	$datee=$row['Ev_date'];
	$pieces = explode("-", $datee);
            $year1=$pieces[0];
            $year1=intval($year1);
            $month1=$pieces[1];
            $month1=intval($month1);
            $date1=$pieces[2];
            $date1=intval($date1);
	$q=mysql_query("SELECT * FROM User WHERE User_id='$owner'");
	$owner_name=mysql_result($q,0,'User_username');
	//echo $image;

	$to=$User_address;
	$from=$Ev_location;
    $from = urlencode($from);
    $to = urlencode($to);
    $data = file_get_contents("http://maps.googleapis.com/maps/api/distancematrix/json?origins=$from&destinations=$to&language=en-EN&sensor=false");
    $data = json_decode($data);
    $distance = 0;

	foreach($data->rows[0]->elements as $road)
	{
		$distance += $road->distance->value;
	}

  	$distance=$distance/1000;

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
    }
    $id = $_GET['id'];
	$query="SELECT * FROM Event WHERE Ev_id='$id'";
	$query_run=mysql_query($query);
	$Ev_name=mysql_result($query_run, 0,'Ev_name');
	$Ev_location=mysql_result($query_run, 0,'Ev_location');
	$Ev_time=mysql_result($query_run, 0,'Ev_time');
	$Ev_date=mysql_result($query_run, 0,'Ev_date');
	$Ev_description=mysql_result($query_run, 0,'Ev_description');
	$Ev_photo=mysql_result($query_run, 0,'Ev_photo');

	$query2="SELECT User_id FROM User WHERE User_username='$username'";
	$query_run2=mysql_query($query2);
	$User_id=mysql_result($query_run2,0,'User_id');
	$quer2="SELECT Sub_id FROM Event WHERE Ev_id='$id'";
	$quer_run2=mysql_query($quer2);
	$Sub_id=mysql_result($quer_run2,0,'Sub_id');

	$q="UPDATE Event SET Ev_page_count=Ev_page_count+1 WHERE Ev_id='$id'";
	mysql_query($q);
	$q11="SELECT * FROM Interested_in WHERE User_id='$User_id' AND Sub_id='$Sub_id'";
	$q1="INSERT INTO Interested_in (Sub_id,User_id,Count) VALUES ('{$Sub_id}','{$User_id}',1)";
	$q2="UPDATE Interested_in i,Event e SET i.Count=i.Count+1 WHERE i.User_id='$User_id' AND e.Ev_id='$id' AND e.Sub_id=i.Sub_id";

	if(mysql_num_rows(mysql_query($q11))==0)
	{
		mysql_query($q1);
	}
	else
	{
		mysql_query($q2);
	}

	$q11="SELECT * FROM Interested_in2 WHERE User_id='$User_id' AND Sub_id='$Sub_id'";
	$q1="INSERT INTO Interested_in2 (Sub_id,User_id,Count) VALUES ('{$Sub_id}','{$User_id}',1)";
	$q2="UPDATE Interested_in2 i,Event e SET i.Count=i.Count+1 WHERE i.User_id='$User_id' AND e.Ev_id='$id' AND e.Sub_id=i.Sub_id";
	
	if(mysql_num_rows(mysql_query($q11))==0)
	{
		mysql_query($q1);
	}
	else
	{
		mysql_query($q2);
	}
?>    
<head>
		<script src="code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="js/jquery.countdown.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/countdown.demo.css" type="text/css">
        <link rel="stylesheet" href="css/starrr.min.css" type="text/css">
        <link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">   
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">   
</head>

<body>		
	<div class="container">
		<div align="center">
			<?php
				$time=strtotime($Ev_date);
				$month=date("m",$time);
				$year=date("Y",$time);
				$day = date("d", $time);
				$time1 = $Ev_time;
				$result = $year."-".$month."-".$day."T".$time1.":00+0100";
				//echo $result;
			?>
			<?php
			$check=0;
			$mydate=getdate(date("U"));
			if($year1<$mydate['year'])
			{?>
				<h3>Event is finished.</h3>

			<?php  $check=1;   } 
			 
			if($year1==$mydate['year'])
			{
				if($month1<$mydate['mon'])
				{?>
					<h3>Event has finished.</h3>
				<?php   
				$check=1; 
				} 
				 if($month1==$mydate['mon'])
				{
					if($date1<$mydate['mday'])
					{?>
						<h3>Event has finished.</h3>
					<?php $check=1; } 
				}
				

			}
			
			if($check==0) { ?>
			<time><?php echo $result; ?></time>
		</div>

		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.countdown.js"></script>
		<script>
			window.jQuery(function ($) {
				"use strict";

				$('time').countDown({
					with_separators: false
				});
			});
		</script>
		<?php } ?>
	<div class="row">
		<div class="col-md-offset-9">
		<?php 
		if($Ev_auth == 1)
			{ ?>
		<h1><font face="Tangerine"><span class="fa fa-check-circle"></span> Verified</font></h1>
		<?php } ?>
		</div>
	</div>	
		<div class="row" id="static_profile_box">
	    	<div class="col-md-10 col-md-offset-1" >
	      		<div class="well-lg panel panel-default" id="profile_box">
	        		<div class="panel-body" >
				 		<div class="row">
	            			<?php 
                    if(!is_null($Ev_photo))
		                    {
		                ?>
		                <a href="event_page.php?user=<?php echo $username;?>&id=<?php echo $Ev_id;?>"><img class="img-responsive img-responsive img-center" width="900px" height="300px" src="<?php echo $Ev_photo;?>" alt="" style="width:400px;height:200px;"></a>
		                <?php
		                    }
		                    else
		                    {
		                ?>
		                <a href="event_page.php?user=<?php echo $username;?>&id=<?php echo $Ev_id;?>"><img class="img-responsive img-responsive img-center" src="image/imagenotfound.jpg" alt="" style="width:400px;height:200px;"></a>
		                <?php 
		                    }
		                ?>
		               </div>
 	            			<form action="event_page.php?user=<?php echo $username;?>&id=<?php echo $id; ?>" method="post">
 	            				<?php 
 	            					$query = mysql_query("SELECT * FROM user_event_rating WHERE User_id = $User_id AND Ev_id = $id");
 	            					$tup=mysql_fetch_array($query);
 	            					$going=$tup['Going'];
 	            					if($check==0&&$going!=1){
 	            				?>

	            				<button type="submit" id="attend_btn" class="btn btn-primary col-md-offset-5" name="submi">Attend Event</button>
	            				<?php } 
	            				else
	            				{
	            					if($check==0 && $going==1)
	            					{?>
	            						<h3> You are going </h3>
	            					<?php } 
	            					
	            					 
	            					else if($check==1 && $going==1)
	            					{ ?>
	            						<h3> You went </h3>
	            					<?php }  
	            					

	            				}
	            				?>
	            				<hr>
	            				<?php 
	            				if($username == 'admin')
	            					{?>
	            				<button type="submit" id="attend_btn" class="btn btn-primary col-md-offset-5" name="auth">Authorize this event</button>
	            				<?php } ?>
	            			</form>
	            			<?php
	            			if(isset($_POST['auth'])){
	            				$query=mysql_query("UPDATE Event SET Ev_auth=1 WHERE Ev_id='$id'");
	            			}
	            			?>
            				<?php
								if(isset($_POST['formGender']) && isset($_POST['submit']))
								{
									$choice = $_POST['formGender'];
									//echo $choice;
									if($choice != null)
									{
										$query = mysql_query("SELECT * FROM user_event_rating WHERE User_id = $User_id AND Ev_id = $id");
										if(!$query)
										{
											echo mysql_error();
										}
										$num = mysql_num_rows($query);
										$row = mysql_fetch_array($query);
										if($num == 0)
										{
											$query = mysql_query("INSERT INTO user_event_rating (User_id,Ev_id,user_rating) VALUES ('$User_id','$id','$choice')");
											if(!$query)
											{
												echo mysql_error();
											}
										}
										else
										{
											$query = mysql_query("UPDATE user_event_rating SET user_rating = '$choice' WHERE User_id = $User_id AND Ev_id = $id");
											if(!$query)
											{
												echo mysql_error();
											}	
										}
									}	
								}
							?>
				            <?php 
					            if(isset($_POST['submi']))
					            {
					             	//echo 'hello';
					             	$query3="INSERT INTO Past_Events (Ev_id,User_id) VALUES ('{$id}','{$User_id}')";
									$query_run3=mysql_query($query3);
									$q=mysql_query("SELECT * FROM user_event_rating WHERE User_id='$User_id' AND Ev_id='$id'");
									if(mysql_num_rows($q)==0)
									{
										mysql_query("INSERT INTO user_event_rating (User_id,Ev_id,Going) VALUES ('$User_id','$id','1')");
									}
									else
									{
										mysql_query("UPDATE user_event_rating SET Going =1 WHERE User_id = $User_id AND Ev_id = $id");
									}


					             }
				            ?>
          				</div>
						<!-- row -- >
        			</div>
        			<!--/panel-body-->
      			</div>
      			<!--/panel-->
    		</div>
    		<!--/col--> 
  		</div>
  		<!--/row--> 
  		<?php
  		$qe=mysql_query("SELECT * FROM user_event_rating WHERE Ev_id='$id'");
  		if(mysql_num_rows($qe)==0)
  		{
  			$attendance=0;
  		}
  		else
  		{
  		 $q=mysql_query("SELECT COUNT(*) as attendance FROM user_event_rating WHERE Ev_id='$id' AND Going='1'");
  		 $attendance=mysql_result($q, 0,'attendance');
  		}
  		?>
  		<?php if($check==0){?>
  		&nbsp;&nbsp;&nbsp;&nbsp;<b><h4><?php echo $attendance;?> people are going</h4></b>
  		<?php } ?>
  		<?php if($check==1){?>
  		&nbsp;&nbsp;&nbsp;&nbsp;<b><h4><?php echo $attendance;?> people have gone</h4></b>
  		<?php } ?>
  		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad" >
          	<div class="panel panel-info">
            	<div class="panel-heading">
              		<h3 class="panel-title"><font face="Montserrat">Event details</font></h3>
            	</div>
            	<div class="panel-body">
              		<div class="row">
                		<div class=" col-md-12 col-lg-12 "> 
                  			<table class="table table-user-information">
                    			<tbody>
                      				<tr>
                        				<td><font face="Montserrat">Event name: </font></td>
                        				<td><font face="Montserrat"><?php echo $Ev_name ?></font></td>
                      				</tr>
                      				<tr>
                        				<td><font face="Montserrat">Event Description: </font></td>
                        				<td><font face="Montserrat"><?php echo $Ev_description ?></font></td>
                      				</tr>
                      				<tr>
                        				<td><font face="Montserrat">Organizer: </font></td>
                        				<td><a href="user_profile_view.php?user=<?php echo $owner_name;?>"><font face="Montserrat"><?php echo $owner_name;?></font></a></td>
                      				</tr>      
                      				<tr>
                        				<td><font face="Montserrat">Location: </font></td>
                        				<td><font face="Montserrat"><?php echo $Ev_location ?></font></td>
                      				</tr>
                      				<tr>
                      					<td><font face="Montserrat">Distance: </font></td>
                        				<td><font face="Montserrat"><?php echo $distance;?> KM fom you.</font></td>     
                      				</tr>
                  					<tr>
	                      				<td><font face="Montserrat">Date: </font></td>
	                        			<td><font face="Montserrat"><?php echo $Ev_date;?></font></td>     
                      				</tr>
                      				<tr>
                      					<td><font face="Montserrat">Time: </font></td>
                        				<td><font face="Montserrat"><?php echo $Ev_time;?></font></td>     
                      				</tr>
					  				<tr>
                      					<td><font face="Montserrat">Current rating :</font></td>
                        				<td>
	                        				<?php
						    					$q=mysql_query("SELECT AVG(user_rating) as rating FROM user_event_rating WHERE Ev_id='$id'");
						    					$rating=mysql_result($q,0,'rating');
						    					$rating=intval($rating);
					    					?>
					    					<?php 
					    					if($check==1)
					    					echo $rating.'/5';
					    					?>
					    					<?php
					    					if($check==0)
					    					{
					    						echo 'Rating will be displayed after the event has finished.';
					    					} 
					    					?>
					    				</td>     
                      				</tr>                     
                      				<tr>
                      					<td><font face="Montserrat">Your rating :</font></td>
                      					<?php 
                      						if($check==1){
                      					?>
                    					<td>
                    						<form action="event_page.php?user=<?php echo $username; ?>&id=<?php echo $id;?>" method="post">
												<select name="formGender">
								  					<option value="">Select Rating</option>
								  					<option value="1">1</option>
								  					<option value="2">2</option>
							  						<option value="3">3</option>
							  						<option value="4">4</option>
							  						<option value="5">5</option>
												</select>
												<br>
												<br>
												<button type="submit" name="submit" value="submit" class="btn-btn-default col-md-offset-6">Rate</button>
											</form>
										</td>   
										<?php } ?>  
										<?php 
										if($check==0)
										{ ?>
										<td>
											<h5>You can rate after the event has finished.</h5>
										</td>
										<?php } ?>
										
                      				</tr>
                    			</tbody>
                  			</table>
                  			<?php 
                  				if($owner==$User_id)
                  				{
        					?>
            				<form action="event_form_edit.php?user=<?php echo $username;?>&id=<?php echo $id; ?>" method="post">
            					<button type="submit" id="attend_btn" class="btn btn-primary col-md-offset-5" name="submit1">Edit Event Details</button>
            				</form>
            				<?php 
            					}
            				?>
                		</div>
                		<!-- /.col -->
              		</div>
              		<!-- /.row -->
        		</div>
        		<!-- /.panel-body -->        
          	</div>
          	<!-- /.panel -->
        </div>
        <!-- /.col -->
  		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="well-lg panel panel-default" id="toggable_box">
					<div class="panel-body" >
						<!--	<p> here comes the navigation bar</p> -->
						<div role="tabpanel">
							<div class="tab-content">
								<!--About tab-->
				    			<div role="tabpanel" class="tab-pane active" id="about">
									<script src="jsjquery.min.js"></script>
									<script src="js/starrr.min.js"></script>
					    		</div>
						  		<script>
									$('.starrr:eq(0)').on('starrr:change', function(e, value){
									  if (value) {
										$('.your-choice-was').show();
										$('.choice').text(value);
									  } else {
										$('.your-choice-was').hide();
									  }
									});
						  		</script>
					     		</form>
				    			<div role="tabpanel" class="tab-pane fade" id="tickets">
									<div class="col-md-10 col-sm-6 col-xs-12 personal-info">
				      					<!-- Ticket Info --> 
			      						<div class="panel panel-default">
					            			<div class="panel-heading">
				                				<h4 class="panel-title"></h4>
				            				</div>
				                			<div class="panel-body">
				                				<table class="table table-hover">
									              	<thead>
								                		<tr>
									                  		<th><font face="Montserrat">Ticket Type</font></th>
									                  		<th><font face="Montserrat">Available Tickets</font></th>
									                  		<th><font face="Montserrat">Price</font></th>
									                  		<th></th>
									                  		<th></th> 
									                	</tr>
									              	</thead>
										            <tbody>
										            	<tr>
										                  	<th><font face="Montserrat">Ticket Type</font></th>
										                  	<th><font face="Montserrat">Available Tickets</font></th>
										                  	<th><font face="Montserrat">Price</font></th>
										                  	<th><input></input></th>
										                  	<th><button type="button" class="btn btn-success">Buy</button></th> 
										                </tr>
	    											</tbody>
    											</table>
			            					</div>
			            					<!-- /.panel-body -->
				       					</div>
				       					<!-- /.panel -->
				       				</div>
				       				<!-- /.col -->
				       			</div>
				       			<!-- /.tabpanel -->
							</div>
							<!-- /.tab-content -->
						</div>
			       			<!-- /.tabpanel -->
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col -->	
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="detailBox">
				    <div class="titleBox">
			      		<label><h2>Reviews</h2></label>
		        		<button type="button" class="close" aria-hidden="true">&times;</button>
			    	</div>
			    	<div class="actionBox">
				       	<!-- <ul class="commentList">
				            <li>
				                <div class="commentText">
				                    <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>

				                </div>
				            </li>
				        </ul>-->
				        <?php
				        	$q=mysql_query("SELECT * FROM user_event_rating WHERE Ev_id='$id'");
				        	if(!$q)
				        	{
				        		echo mysql_error();
				        	}
				        	for ($i=0; $i < mysql_num_rows($q); $i++) 
				        	{ 
				        		$user1=mysql_result($q,$i,'User_id');
				        		$q2=mysql_query("SELECT * FROM User WHERE User_id='$user1'");
				        		$user2=mysql_result($q2,0,'User_username');
				        		$userfname=mysql_result($q2,0,'User_fname');
				        		$review1=mysql_result($q,$i,'Review');
		        		?>
	        			<a href="user_profile_view.php?user=<?php echo $user2;?>"><b><h1><font face="Tangerine"><?php echo $username ?></font></h1></b></a>
		        		<?php 
			        		//echo "<br>";
			        		echo $review1;
			        		echo "<br>";
		        		?>
		        		<hr>
			        	<?php 
			        	}
			        	?>
				        <form class="form-inline" role="form" action="event_page.php?user=<?php echo $username ;?>&id=<?php echo $id;?>" method="post">
				            <div class="form-group col-md-offset-1">
				                <input class="form-control" placeholder="Your comments" name="review"></input> 
				            </div>
				            <div class="form-group">
				                <button class="btn btn-default" type="submit" name="reviews" value="reviews">Add review</button>
				            </div>
				        </form>
			        </div>
			        <?php
						if(isset($_POST['review']) && isset($_POST['reviews']))
						{
							$rev = $_POST['review'];
							//echo $choice;
							if($rev != null)
							{
								$query = mysql_query("SELECT * FROM user_event_rating WHERE User_id = $User_id AND Ev_id = $id");
								if(!$query)
								{
										echo mysql_error();
								}
								$num = mysql_num_rows($query);
								$row = mysql_fetch_array($query);
								if($num == 0)
								{
									$query = mysql_query("INSERT INTO user_event_rating (User_id,Ev_id,Review) VALUES ('$User_id','$id','$rev')");
									if(!$query)
									{
										echo mysql_error();
									}
								}
								else
								{
									$query = mysql_query("UPDATE user_event_rating SET Review = '$rev' WHERE User_id = $User_id AND Ev_id = $id");
									if(!$query)
									{
										echo mysql_error();
									}	
								}
							}	
						}
					?>
				</div>
				<!-- /.detailBox -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!--/container-->
</body>

<?php require_once("includes/footer.php") ?>
