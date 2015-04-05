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

        
<!-- ************************Starting here *********************************************** -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Recommended for you</h2>
            </div>

<?php
//$query="SELECT Ev_name, Ev_description,Sub_id FROM Event NATURAL JOIN Interested_in WHERE Count IN(SELECT MAX(Count) FROM Interested_in))";
//$query2="SELECT Ev_name, Ev_description,Sub_id FROM Event NATURAL JOIN Interested_in WHERE User_id=2 ORDER BY Count DESC";

$query2="SELECT User_id FROM User WHERE User_username='$username'";
$query_run2=mysql_query($query2);
$User_id=mysql_result($query_run2,0,'User_id');     
$query="SELECT * FROM Event e,Interested_in i where e.Sub_id=i.Sub_id AND i.User_id=$User_id ORDER BY Count DESC";
$query_run=mysql_query($query);

         for ($i = 0; $i <4 ; $i++)
        {
          
            
          $Ev_name=mysql_result($query_run, $i,'Ev_name');
          $Ev_description=mysql_result($query_run, $i,'Ev_description');
          $Sub_id=mysql_result($query_run, $i,'Sub_id');

   ?>     
        
            <div class="col-lg-3 col-sm-6 text-center">
                <a href="/event_page.php"><img class="img-circle img-responsive img-center" src="img/.jpg" alt=""></a>
                <a href="/event_page.php"><h3><?php echo $Ev_name ?></h3></a>
                    <small><?php echo $Sub_id ?></small>
                <p><?php echo $Ev_description ?></p>
            </div>

            <?php } ?>

            
            </div>

<!--   ******************************************************************************************* -->


            <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Near You</h2>
            </div>


<?php

$query2="SELECT User_address FROM User WHERE User_username = '$username'";
$query_run2=mysql_query($query2);
$User_address=mysql_result($query_run2,0,'User_address');

$query="SELECT * FROM Event where Ev_location ='$User_address' ";
$query_run=mysql_query($query);

         for ($i = 0; $i <1 ; $i++)
        {
          
            
          $Ev_name=mysql_result($query_run, $i,'Ev_name');
          $Ev_description=mysql_result($query_run, $i,'Ev_description');
          $Sub_id=mysql_result($query_run, $i,'Sub_id');

   ?>     
        
            <div class="col-lg-3 col-sm-6 text-center">
                <a href="/event_page.php"><img class="img-circle img-responsive img-center" src="img/.jpg" alt=""></a>
                <a href="/event_page.php"><h3><?php echo $Ev_name ?></h3></a>
                    <small><?php echo $Sub_id ?></small>
                <p><?php echo $Ev_description ?></p>
            </div>

            <?php } ?>

            </div>

<!--  **********************************************************************************8 -->

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Trending</h2>
            </div>

<?php
//$query="SELECT Ev_name, Ev_description,Sub_id FROM Event NATURAL JOIN Interested_in WHERE Count IN(SELECT MAX(Count) FROM Interested_in))";
//$query2="SELECT Ev_name, Ev_description,Sub_id FROM Event NATURAL JOIN Interested_in WHERE User_id=2 ORDER BY Count DESC";

$query2="SELECT User_id FROM User WHERE User_username='$username'";
$query_run2=mysql_query($query2);
$User_id=mysql_result($query_run2,0,'User_id');     
$query="SELECT * FROM Event e,Interested_in i where e.Sub_id=i.Sub_id AND i.User_id=$User_id ORDER BY Count DESC";
$query_run=mysql_query($query);

         for ($i = 0; $i <4 ; $i++)
        {
          
            
          $Ev_name=mysql_result($query_run, $i,'Ev_name');
          $Ev_description=mysql_result($query_run, $i,'Ev_description');
          $Sub_id=mysql_result($query_run, $i,'Sub_id');

   ?>     
        
            <div class="col-lg-3 col-sm-6 text-center">
                <a href="/event_page.php"><img class="img-circle img-responsive img-center" src="img/.jpg" alt=""></a>
                <a href="/event_page.php"><h3><?php echo $Ev_name ?></h3></a>
                    <small><?php echo $Sub_id ?></small>
                <p><?php echo $Ev_description ?></p>
            </div>

            <?php } ?>

            
            </div>

<!--************************************************************************************************* -->

<div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Most Popular</h2>
            </div>

<?php
//$query="SELECT Ev_name, Ev_description,Sub_id FROM Event NATURAL JOIN Interested_in WHERE Count IN(SELECT MAX(Count) FROM Interested_in))";
//$query2="SELECT Ev_name, Ev_description,Sub_id FROM Event NATURAL JOIN Interested_in WHERE User_id=2 ORDER BY Count DESC";

$query2="SELECT User_id FROM User WHERE User_username='$username'";
$query_run2=mysql_query($query2);
$User_id=mysql_result($query_run2,0,'User_id');     
$query="SELECT * FROM Event e,Interested_in i where e.Sub_id=i.Sub_id AND i.User_id=$User_id ORDER BY Count DESC";
$query_run=mysql_query($query);

         for ($i = 0; $i <4 ; $i++)
        {
          
            
          $Ev_name=mysql_result($query_run, $i,'Ev_name');
          $Ev_description=mysql_result($query_run, $i,'Ev_description');
          $Sub_id=mysql_result($query_run, $i,'Sub_id');

   ?>     
        
            <div class="col-lg-3 col-sm-6 text-center">
                <a href="/event_page.php"><img class="img-circle img-responsive img-center" src="img/.jpg" alt=""></a>
                <a href="/event_page.php"><h3><?php echo $Ev_name ?></h3></a>
                    <small><?php echo $Sub_id ?></small>
                <p><?php echo $Ev_description ?></p>
            </div>

            <?php } ?>

            
            </div>      
<!-- ********************************************************************************** -->      
            
            </div>
            </div>
        <hr>

     <?php require_once("includes/footer.php") ?>   

