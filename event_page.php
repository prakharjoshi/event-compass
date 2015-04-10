<?php require_once("includes/base.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
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
	/*if($_POST['submit'] != null)
	{
		
	}*/
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
	//echo $User_id;
?>
<?php
	$id = $_GET['id'];
	$query = mysql_query("SELECT * FROM Event WHERE Ev_id = '$id'");
	if(!$query)
	{
		echo mysql_error();
	}
	//$numrows = mysql_num_rows($query);
	$row = mysql_fetch_array($query);
	$image = $row['Ev_photo'];
	//$id = $row['Ev_id'];
	$Ev_location = $row['Ev_location'];
	$Ev_description = $row['Ev_description'];
	$Ev_date = $row['Ev_date'];
	$Ev_time = $row['Ev_time'];
	//echo $image;
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
	else{
		mysql_query($q2);
	}


	$q11="SELECT * FROM Interested_in2 WHERE User_id='$User_id' AND Sub_id='$Sub_id'";
	$q1="INSERT INTO Interested_in2 (Sub_id,User_id,Count) VALUES ('{$Sub_id}','{$User_id}',1)";
	$q2="UPDATE Interested_in2 i,Event e SET i.Count=i.Count+1 WHERE i.User_id='$User_id' AND e.Ev_id='$id' AND e.Sub_id=i.Sub_id";
	
	if(mysql_num_rows(mysql_query($q11))==0)
	{
		mysql_query($q1);
	}
	else{
		mysql_query($q2);
	}

?>    
<head>
		<script src="code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="js/jquery.countdown.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/countdown.demo.css" type="text/css">
        <link rel="stylesheet" href="css/starrr.min.css" type="text/css">
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		
        
</head>	
<body>

				
<div class="container">
	<br>
	<br>
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
				<!--
				<time>2015-04-17T14:00:00+0100</time>
				-->
				<time><?php echo $result; ?></time>
				</div>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
			<script src="js/jquery.countdown.js"></script>
			<script>
			window.jQuery(function ($) {
				"use strict";

				$('time').countDown({
					with_separators: false
				});
			});
			</script>
		

  <div class="row" id="static_profile_box">
    <div class="col-md-10 col-md-offset-1" >
      <div class="well-lg panel panel-default" id="profile_box">
        <div class="panel-body" >
			 <div class="row">
            
            <img src="<?php echo $Ev_photo;?>" width = 900 height = 300>
            <form action="event_page.php?user=<?php echo $username;?>&id=<?php echo $id; ?>" method="post">
            <button type="submit" id="attend_btn" class="btn btn-primary col-md-offset-5" name="submi">Attend Event</button>
            </form>
            <?php 
            if(isset($_POST['submi'])){
             	//echo 'hello';
             	$query3="INSERT INTO Past_Events (Ev_id,User_id) VALUES ('{$id}','{$User_id}')";
				$query_run3=mysql_query($query3);
				require_once("PHPMailer_5.2.4/class.phpmailer.php");
				$mail = new PHPMailer(); // create a new object
				$mail->IsSMTP(); // enable SMTP
				$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
				$mail->SMTPAuth = true; // authentication enabled
				$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
				$mail->Host = "smtp.gmail.com";
				$mail->Port = 465; // or 587
				$mail->IsHTML(true);
				$mail->Username = "eventcompass22@gmail.com";
				$mail->Password = "eventcom22";
				$mail->SetFrom("eventcompass22@gmail.com");
				$mail->Subject = "New Event";
				$mail->Body = "A new event has been posted which you are following";
				echo $email;
				$mail->AddAddress($email);
				if(!$mail->Send())
				{
				   echo "Mailer Error: " . $mail->ErrorInfo;
				}
				else
				{
				   //echo "Message has been sent";
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
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
		<div class="well-lg panel panel-default" id="toggable_box">
			<div class="panel-body" >
			<!--	<p> here comes the navigation bar</p> -->
				<div role="tabpanel">
					<div class="tab-content">
						<!--About tab-->
					    <div role="tabpanel" class="tab-pane active" id="about">
					    <div class="row">
					    	<p> <?php echo $Ev_description ?></p>
					    </div>

					    <div class="row">
					    	<div class="col-md-3 "><strong>Venue</strong></div>
					    	<div class="col-md-9 "> <?php echo $Ev_location ?></div>
					    </div>

					    <div class="row">
					    	<div class="col-md-3 "></div>
					    	<div class="col-md-9 "></div>
					    </div>

					    <div class="row">
					    	<div class="col-md-3 "></div>
					    	<div class="col-md-9 "></div>
					    </div>

					    <div class="row">
					    	<div class="col-md-3 "><strong>Date</strong></div>
					    	<div class="col-md-9 "> <?php echo $Ev_date ?></div>
					    </div>

					    <div class="row">
					    	<div class="col-md-3 "></div>
					    	<div class="col-md-9 "></div>
					    </div>

					    <div class="row">
					    	<div class="col-md-3 "></div>
					    	<div class="col-md-9 "></div>
					    </div>

					    <div class="row">
					    	<div class="col-md-3 "><strong>Time</strong></div>
					    	<div class="col-md-9 "> <?php echo $Ev_time ?></div>
					    </div>

					    <div class="row">
					    	<div class="col-md-3 "></div>
					    	<div class="col-md-9 "></div>
					    </div>

					    <div class="row">
					    	<div class="col-md-3 "></div>
					    	<div class="col-md-9 "></div>
					    </div>

					    <div class="row">
					    	<div class="col-md-3 "><strong>Current Rating</strong></div>
					    	<?php
					    	$q=mysql_query("SELECT AVG(user_rating) as rating FROM user_event_rating WHERE Ev_id='$id'");
					    	$rating=mysql_result($q,0,'rating');

					    	?>
					    	<div class="col-md-9 "> <?php echo $rating; ?></div>
					    </div>

					    <div class="row">
					    	<div class="col-md-3 "></div>
					    	<div class="col-md-9 "></div>
					    </div>

					    <div class="row">
					    	<div class="col-md-3 "></div>
					    	<div class="col-md-9 "></div>
					    </div>
					    <div class="row">
					    <!--	<form role="form" action="user=$username&id=$id">
					    	<div class="col-md-3 "><strong>Your Rating</strong></div>
					    	<div class="starrr"></div>
							<div align = "center">&nbsp;
							<span class='your-choice-was' style='display: none;'>-->

							<p>
							<form action="event_page.php?user=<?php echo $username; ?>&id=<?php echo $id;?>" method="post">
							&nbsp;&nbsp;&nbsp;&nbsp;<strong>Rate this Event:   </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<select name="formGender">
								  <option value="">Select...</option>
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  <option value="4">4</option>
								  <option value="5">5</option>
								</select>
								<br >
								<br >
								<button type="submit" name="submit" value="submit" class="btn-btn-default col-md-offset-6">Rate</button>
							</form>
							</p>
							<?php //$choice="<span class='choice'></span>"?>
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
							
							</span>
							</div>
							

							<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
				                			<h4 class="panel-title">
				                    		
				                			</h4>
				            			</div>
				                			<div class="panel-body">
				                				<table class="table table-hover">
									              <thead>
									                <tr>
									                  <th>Ticket Type</th>
									                  <th>Available Tickets</th>
									                  <th>Price</th>
									                  <th></th>
									                  <th></th> 
									                </tr>
									              </thead>
									            <tbody>
									            	<tr>
									                  <th>Ticket Type</th>
									                  <th>Available Tickets</th>
									                  <th>Price</th>
									                  <th><input></input></th>
									                  <th><button type="button" class="btn btn-success">Buy</button></th> 
									                </tr>
												      
												        
    											</tbody>
    										</table>
				          						
				        					
				            			
				            			</div>
				       				</div>
				       			</div>
				       		</div>

				      
					    



					    


			 <!--Comments tab-->
					    

				</div>

			</div>
		</div>
	</div>
  </div>
</div>

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
        		$review1=mysql_result($q,$i,'Review');
        		?>
        			<a href="user_profile_view.php?user=<?php echo $user2;?>"><?php echo $user2;?></a>;
        		<?php 
	        		echo "<br>";
	        		echo $review1;
	        		echo "<br>";
        		?>
        		<hr>
        	<?php }
        	


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
</div>
</div>
<!--/container-->
</body>
<script>

</script>
<?php require_once("includes/footer.php") ?>   
