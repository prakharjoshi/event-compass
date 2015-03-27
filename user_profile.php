
<?php
require 'core.inc.php';

if(loggedin())
{

    echo 'Welcome!You are logged into your profile..........';
    echo 'Your profile is yet to build';
}
else
{
    header("Location:index.php");
}

?>
</br></br>
<!DOCTYPE HTML>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Event Compass</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/style3.css" rel="stylesheet">
     <link rel="stylesheet" href="css/demo.css">
     <link rel="stylesheet" href="css/sky-forms.css">
   <link href="css/common.css" rel="stylesheet">

    <link href="css/fontello.css" type="text/css" rel="stylesheet">
    <!--[if lt IE 7]>
            <link href="css/fontello-ie7.css" type="text/css" rel="stylesheet">
        <![endif]-->
    <!-- Google Web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    


<div class="navbar-wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
                    <h1 class="brand"><a href="#top"  style="text-decoration: none">Event Compass</a></h1>
                    <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
                    <nav class="pull-right nav-collapse collapse">
                        <ul id="menu-main" class="nav">
                            <li><a title="contact" href="create_event.php"><b>Create Event</b></a></li>
                            <li><a title="Rules" href="user_settings.php"><b>Settings</b></a></li>
                            <li><a title="Conduct Events" href="logout.php"><b>Logout</b></a></li>
                         <!--   <li><?php echo 'Welcome,Mr. '.$user_id ?></li>-->
                            
                        </ul>
                    </nav>
                </div>
            <!-- /.container -->
            </div>
            <!-- /.navbar-inner -->
        </div>
      <!-- /.navbar -->
    </div>

</html>