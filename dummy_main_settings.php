<?php require_once("includes/base.php") ?>
	<body>
<div class="page-container">
  
	<!-- top navbar -->
  <nav class="navbar-wrapper navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"  href="/sample_dashbord.php"><span class="glyphicon glyphicon-home"></span>EVENT COMPASS</a>
          </div>
          <div class="collapse navbar-collapse navbar-ex1-collapse">
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-left">
            <li>
                <a href="/event_form.php" class="btn">POST An Event</a>
            </li>
        </ul>
            <ul class="nav pull-right">
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="/main_settings.php">User Settings</a></li>
                  <li><a href="/logout/">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
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