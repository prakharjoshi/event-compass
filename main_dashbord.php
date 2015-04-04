<?php require_once("includes/base.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("backend/ifnotlogin.php") ?>    
<?php
//This function will check whether the user is logged in or not. (Security fu)

//session_start();
if (!(isset($_SESSION['currentuser']) && $_SESSION['currentuser'] != '')) 
{
    redirect_to("login.php");
}

?>


<?php
    if (isset($_GET['user'])) 
    {
        $username = $_GET['user'];
    }
?>
    <!-- Page Content -->
    <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Hi, <?php echo $username;?></h1>
                <p>The events may interest you.</p>
            </div>
        </div>
        <div id="wrapper">

        
        <!-- Events Row -->

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Category - 1</h2>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Event Name
                    <small>Type</small>
                </h3>
                <p>Short description</p>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Event Name
                    <small>Type</small>
                </h3>
                <p>Short description</p>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Event Name
                    <small>Type</small>
                </h3>
                <p>Short description</p>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Event Name
                    <small>Type</small>
                </h3>
                <p>Short description</p>
            </div>
            <div class="row">
            <div class="col-md-10">
                
            </div>
            <div class="col-md-2">
                <a href="/more_events.php">More Events</a>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Category - 1</h2>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Event Name
                    <small>Type</small>
                </h3>
                <p>Short description</p>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Event Name
                    <small>Type</small>
                </h3>
                <p>Short description</p>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Event Name
                    <small>Type</small>
                </h3>
                <p>Short description</p>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Event Name
                    <small>Type</small>
                </h3>
                <p>Short description</p>
            </div>
            <div class="row">
            <div class="col-md-10">
                
            </div>
            <div class="col-md-2">
                <a href="/more_events.php">More Events</a>
            </div>
            </div>
            </div>

            <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Category - 1</h2>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Event Name
                    <small>Type</small>
                </h3>
                <p>Short description</p>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Event Name
                    <small>Type</small>
                </h3>
                <p>Short description</p>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Event Name
                    <small>Type</small>
                </h3>
                <p>Short description</p>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Event Name
                    <small>Type</small>
                </h3>
                <p>Short description</p>
            </div>
            </div>
            <div class="row">
            <div class="col-md-10">
                
            </div>
            <div class="col-md-2">
                <a href="/more_events.php">More Events</a>
            </div>
            </div>

            <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Category - 1</h2>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Event Name
                    <small>Type</small>
                </h3>
                <p>Short description</p>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Event Name
                    <small>Type</small>
                </h3>
                <p>Short description</p>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Event Name
                    <small>Type</small>
                </h3>
                <p>Short description</p>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Event Name
                    <small>Type</small>
                </h3>
                <p>Short description</p>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-10">
                
            </div>
            <div class="col-md-2">
                <a href="/more_events.php">More Events</a>
            </div>
            </div>
            </div>
        <hr>

     <?php require_once("includes/footer.php") ?>   

