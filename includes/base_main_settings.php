<?php require_once("base.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>

<?php
  $username = $_SESSION['currentuser'];
?>

<link href="../css/fixed_sidebar.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

<nav class="navbar-wrapper navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <button type="button" id="navbar1" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-side-collapse" style="float: left">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"  href="/main_dashbord.php?user=<?php echo $username;?>" style="float: left"><span class="glyphicon glyphicon-home"></span> Event Compass</a>
            </div>
        <div class="collapse navbar-collapse navbar-main-collapse">
            <ul class="nav navbar-nav navbar-left">
                <?php
                            $username = $_SESSION['currentuser']; 
                ?>
                    
                <li>

                    <div class="col-sm-12 col-md-12 col-md-offset-4">
                        <form class="navbar-form" role="search" action="browse_event.php?Cat_id=0" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search by Name/Location" name="search">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit" name="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </form>
                    </div>       
                    
                </li>
            </ul>
            <ul class="nav pull-right">
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $username;?> <span class="glyphicon glyphicon-user"></span><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="user_profile_view.php?user=<?php echo $username ?>"><span class="glyphicon glyphicon-cog"></span> User Settings</a></li>
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
        <h3 class="text-center">Settings</h3>
        <ul class="nav nav-pills nav-stacked text-center">
          <li><a href="user_profile_view.php?user=<?php echo $username; ?>"><span class="fa fa-child"></span> Profile Settings</a></li>
          <li><a href="interest_settings_form.php?user=<?php echo $username; ?>"><span class="fa fa-heart"></span> Interest Settings</a></li>
          <li><a href="notification_settings_form.php?user=<?php echo $username; ?>"><span class="fa fa-bullhorn"></span> Notification Settings</a></li>
        </ul>
      </div>
  </div> 
</body  

<script src="../js/fixed_sidebar.js"></script>
<script type="text/javascript">
  $("#navbar1").click(function() {
      $(".row-offcanvas").toggleClass("active");
  });
</script>