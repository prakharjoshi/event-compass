<!--<?php session_start();?>-->
<?php
	ob_start();
	$username = $_SESSION['currentuser'];
?>

<?php require_once("includes/functions.php");?>

<?php
	//This function will check whether the user is logged in or not. (Security fu)
	if (!(isset($_SESSION['currentuser']) && $_SESSION['currentuser'] != '')) 
	{
	    redirect_to("login.php");
	}
	$user = $_GET['user'];
	if($user != $username)
	{
		if($username == null)
		{
			redirect_to("login.php");
		}
		
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Event Compass</title>

	<!-- Bootstrap Core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="../css/round-about.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<!-- Navigation -->
	<nav class="navbar-wrapper navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- <button type="button" id="navbar1" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-side-collapse" style="float: left">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button> -->
				<a class="navbar-brand" href="/main_dashbord.php?user=<?php echo $username;?>" style="float:left"><span class="glyphicon glyphicon-home"></span> Event Compass</a>
			</div>
			<div class="collapse navbar-collapse navbar-main-collapse">
				<ul class="nav navbar-nav navbar-left">
					<?php
						$username = $_SESSION['currentuser'];
					?>
				</ul>
				<ul class="nav pull-right">
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a class="navbar-link" href="browse_event.php?user=<?php echo $username ?>"><span class="glyphicon glyphicon-globe"></span> Browse Events</a>
					</li>
					<li>
						<a class="navbar-link" href="event_form.php?user=<?php echo $username ?>"><span class="glyphicon glyphicon-plus"></span> Post Event</a>
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
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<!-- jQuery -->
	<script src="../js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/countries.js" type="text/javascript"></script>
	
</body>

</html>