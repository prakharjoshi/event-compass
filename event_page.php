<?php require_once("includes/base.php") ?>
    

<body>

<div class="container">
	<br>
	<br>

  <div class="row" id="static_profile_box">
    <div class="col-md-10 col-md-offset-1" >
      <div class="well-lg panel panel-default" id="profile_box">
        <div class="panel-body" >
          <div class="row">
            
            <h1> Insert Event Poster </h1>
           
            
          </div>
          <!--/row-->
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
                                                <option>1.0</option>
                                                <option>2.0</option>
                                                <option>3.0</option>
                                                <option>4.0</option>
                                                <option>5.0</option>
                                            </select>
                            </div>
					    </div>
					    	<div class="col-sm-offset-9 col-sm-9">
                                                <button type="button" class="btn btn-success">Submit</button>
                           	</div>
					    </form>

					    <div class="col-md-2 col-md-offset-4">
               				<button type="submit" id="attend_btn" class="btn btn-success" name="submit">Attend Event</button>
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
