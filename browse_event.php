<?php require_once("includes/base.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("backend/ifnotlogin.php") ?>
<?php
    $username = $_SESSION['currentuser'];
?>
<?php
$Cat_id=0;
    if (isset($_GET['Cat_id'])) 
    {
        $Cat_id = $_GET['Cat_id'];
    }
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/fixed_sidebar.css" rel="stylesheet">
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $username;?><span class="glyphicon glyphicon-user"></span><b class="caret"></b></a>
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
        <h3 class="text-center">Categories</h3>
        <ul class="nav nav-pills nav-stacked text-center">
         <li><a href="browse_event.php?user=<?php echo $username;?>&Cat_id=1"><span class="fa fa-film"></span> Film & Entertainment</a></li>
            <li><a href="browse_event.php?user=<?php echo $username;?>&Cat_id=2"><span class="fa fa-cube"> Hobbies & Special-Interest</a></li>
            <li><a href="browse_event.php?user=<?php echo $username;?>&Cat_id=3"><span class="fa fa-music"> Music</a></li>
            <li><a href="browse_event.php?user=<?php echo $username;?>&Cat_id=4"><span class="fa fa-paint-brush"> Visual Arts</a></li>
            <li><a href="browse_event.php?user=<?php echo $username;?>&Cat_id=5"><span class="fa fa-flask"> Science & Technology</a></li>
            <li><a href="browse_event.php?user=<?php echo $username;?>&Cat_id=6"><span class="fa fa-soccer-ball-o"> Sports & Fitness</a></li>
        </ul>
      </div>
  </div>   
  <div id="main">

    <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3>Browse through categories of events here</h3>
            </div>
          <?php 
            if($Cat_id < 1)
            {
          ?>
          <img src="image/browse_image.jpeg" class="col-lg-offset-4" style="width:400px;height:400px;">
          <?php } ?>
            
        </div>
        <div id="wrapper">

        
        <!-- Events Row -->
        <?php 
        $query="SELECT Ev_id,Ev_name, Ev_description,Sub_id,Ev_photo FROM Event NATURAL JOIN Subcategory WHERE Cat_id = '$Cat_id'";
        $query_run=mysql_query($query);
        $row = mysql_fetch_array($query_run);
        //echo mysql_num_rows($query_run);
        /*if(mysql_num_rows($query_run)==0)
        {
          echo 'Oops! No categories in this event';
        }*/
         for ($i = 0; $i <mysql_num_rows($query_run) ; $i++) 
        {
          
          $Ev_id=mysql_result($query_run, $i,'Ev_id');
          $Ev_name=mysql_result($query_run, $i,'Ev_name');
          $Ev_description=mysql_result($query_run, $i,'Ev_description');
          $Ev_img=mysql_result($query_run,$i,'Ev_photo');
          //echo $Ev_description;
          //echo $Ev_img;
          //$Ev_img = $row['Ev_photo'];
         /* $Sub_id=mysql_result($query_run, $i,'Sub_id');*/

        ?>

        <?php 
        //echo $Cat_id;
          if($Cat_id == 0)
          {?>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-responsive img-responsive img-center" src="image/browse_image.jpeg">
            </div> 
          <?php }
          else
          {
        ?>
            <div class="col-lg-3 col-sm-6 text-center">
                <a href="/event_page.php?user=<?php echo $username;?>&id=<?php echo $Ev_id;?>"><img class="img-responsive img-responsive img-center" src="<?php echo $Ev_img;?>" alt=""></a>
                <a href="/event_page.php?user=<?php echo $username;?>&id=<?php echo $Ev_id;?>"><h3><?php echo $Ev_name ?></h3></a>
                   <!-- <small><?php $Sub_id ?></small>-->
                </h3>
                <p><?php echo $Ev_description ?></p>
            </div>
        
        <?php }} 
        ?>
        
            
            
           
            
            
        <hr>

        
    </div>
    <!-- /.container -->
  </div>
  <?php
                if(isset($_POST['submit']))
                {
                  
                  $search_key =  htmlentities($_POST['search']);?>

                  <!--echo 'Search Results :<br>';
                  //echo mysql_real_escape_string($search_key);-->
                  <center><h2><b>Search Results:</b></h2></center>
                  <?php
                  echo '<br>';
                  $query = "SELECT * FROM Event WHERE ((Ev_name LIKE '%".mysql_real_escape_string($search_key)."%' ) OR (Ev_location LIKE '%".mysql_real_escape_string($search_key)."%' ))";
                  $query_run = mysql_query($query);


                  if(mysql_num_rows($query_run)>0)
                  {

                    while($row = mysql_fetch_array($query_run))
                    {
                      //echo 'hello';
                      ?>
                      <a href="/event_page.php?user=<?php echo $username;?>&id=<?php echo $row['Ev_id'];?>"><h3><?php echo $row['Ev_name'] ?></h3></a>
                      <?php

                    } 

                  }
                  else
                  {
                      echo 'Sorry! No such events';
                  } 
                }
                
                
                ?>

        
                <script type="text/javascript">
                    $("#navbar1").click(function() {
                        $(".row-offcanvas").toggleClass("active");
                    });
                </script>

</body>

<?php require_once("includes/footer.php") ?>   

</html>
