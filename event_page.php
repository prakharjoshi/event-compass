<?php require_once("includes/base.php") ?>
    
<head>
		<script src="code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="js/jquery.countdown.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/countdown.demo.css" type="text/css">
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        
</head>	
<body>

				
<div class="container">
	<br>
	<br>
				<div align="center">
				<?php
				$year = '2015';
				$month = '04';
				$day = '12';
				$time1 = '14:00';
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
            
            <h1> Insert Event Poster </h1>

            <button type="submit" id="attend_btn" class="btn btn-primary col-md-offset-5" name="submit">Attend Event</button>
            
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
					    	<p> Event Description </p>
					    </div>

					    <div class="row">
					    	<div class="col-md-3 "><strong>Venue</strong></div>
					    	<div class="col-md-9 "> DA-IICT</div>
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
					    	<div class="col-md-9 "> April,7,2015</div>
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
					    	<div class="col-md-9 "> 14:00</div>
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
					    	<div class="col-md-9 "> 4.0</div>
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
					    	<form role="form">
					    	<div class="col-md-3 "><strong>Your Rating</strong></div>
					    	<div class="col-md-9">
					    		            <select >
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                            <button type="button" class="btn btn-primary col-md-offset-1">Submit</button>
                            </div>
					</div>
				    	
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
<!--/container-->
</body>
<script>

</script>
<?php require_once("includes/footer.php") ?>   
