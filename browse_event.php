<?php require_once("includes/base.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("backend/ifnotlogin.php") ?>
<?php
    $username = $_SESSION['currentuser'];
?>

<link href="../css/fixed_sidebar.css" rel="stylesheet">

    <nav class="navbar-wrapper navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"  href="/main_dashbord.php"><span class="glyphicon glyphicon-home"></span> Event Compass</a>
          </div>
          <div class="collapse navbar-collapse navbar-ex1-collapse">
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-left">
        <?php 
                    $username = $_SESSION['currentuser']; 
        ?>
            
        <li>

            <div class="col-sm-12 col-md-12 col-md-offset-4">
            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Event" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>       
            
        </li>
        </ul>
            <ul class="nav pull-right">
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a class="navbar-link"  href="browse_event.php?user=<?php echo $username ?>"><span class="glyphicon glyphicon-globe"></span> Browse Events</a>
              </li>
              
              <li>
                <a class="navbar-link"  href="event_form.php?user=<?php echo $username ?>"><span class="glyphicon glyphicon-plus"></span> Post Event</a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                   <li><a href="main_settings_page.php?user=<?php echo $username ?>"><span class="glyphicon glyphicon-cog"></span> User Settings</a></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
              </li>

            </ul>
          </div>
        </div>
      </nav>

      <div class="row-offcanvas row-offcanvas-left">
  <div id="sidebar" class="sidebar-offcanvas">
      <div class="col-md-12">
        <h3 class="text-center">Options</h3>
        <ul class="nav nav-pills nav-stacked text-center">
          <li><a href="#">Film & Entertainment</a></li>
          <li><a href="interest_settings_form.php?user=<?php echo $username; ?>">Hobbies & Special-Interest</a></li>
          <li><a href="/notification_settings_form.php?user=<?php echo $username; ?>">Music</a></li>
           <li><a href="/notification_settings_form.php?user=<?php echo $username; ?>">Visual Arts</a></li>
            <li><a href="/notification_settings_form.php?user=<?php echo $username; ?>">Science & Technology</a></li>
             <li><a href="/notification_settings_form.php?user=<?php echo $username; ?>">Sports & Fitness</a></li>
        </ul>
      </div>
  </div>   

  <div id="main">

    <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-header">Hi, <?php echo $username ?>
                </h1>
                <p>These events may interest you.</p>
            </div>
            
        </div>
        <div id="wrapper">

        
        <!-- Events Row -->
        <?php 
        $query="SELECT Ev_name, Ev_description,Sub_id FROM Event NATURAL JOIN Subcategory WHERE Cat_id = 1";
        $query_run=mysql_query($query);
        //echo mysql_num_rows($query_run);
        
         for ($i = 1; $i <mysql_num_rows($query_run) ; $i++) 
        {
          
            
          $Ev_name=mysql_result($query_run, $i,'Ev_name');
          $Ev_description=mysql_result($query_run, $i,'Ev_description');
         /* $Sub_id=mysql_result($query_run, $i,'Sub_id');*/

        ?>


        
            
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3><?php echo $Ev_name ?>;
                   <!-- <small><?php echo $Sub_id ?></small>-->
                </h3>
                <p><?php echo $Ev_description ?></p>
            </div>
        
        <?php } ?>
        
            
            
           
            
            
        <hr>

        
    </div>
    <!-- /.container -->
  </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

<?php require_once("includes/footer.php") ?>   

</html>
