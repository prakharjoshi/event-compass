<?php require_once("includes/base.php") ?>
	<body>
<div class="page-container">
  
	<!-- top navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-left" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <li>
                  <img src="../image/logo.jpg" width="60px" height="60px"> 
                </li>
                <li>
                  <a class="page-scroll" href="/main_settings.php">SETTINGS</a>
                </ul>               
                
            </div>

            
                           
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <li>
                <button type="button" class="btn btn-info" href="/event_form.php">POST An Event</button>
                </li>    
                    <li>
                        <a class="page-scroll" href="/user_timeline.php">UserName</a>
                    </li>
                </ul>  
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="/user_settings.php">User Settings</a></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </li>
            </ul>           
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <div>
        <!-- /.container -->
    </nav>
    
      
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-left">
        
        <!--sidebar-->
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div data-spy="affix" data-offset-top="45" data-offset-bottom="90">
            <ul class="nav" id="sidebar-nav">
              <li><a href="profile_settings_form.php">Profile Settings</a></li>
              <li><a href="interest_settings_form.php">Interests Settings</a></li>
              <li><a href="notification_settings_form.php">Notificaion Settings</a></li>
              
            </ul>
           </div>
        </div><!--/sidebar-->
  	
        <!--/main-->
        <div class="col-xs-12 col-sm-9" data-spy="scroll" data-target="#sidebar-nav">
          <div class="row">
           	 <div class="col-sm-10">
                
                    </div><!--/panel-body-->
                </div><!--/panel-->
            </div><!--/col-->
            
            
        
                 
          
          
          
          
	
	</body>
</html>