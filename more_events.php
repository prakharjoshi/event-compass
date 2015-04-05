<?php require_once("includes/base.php") ?>


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

    <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-header">Hi, Username
                </h1>
                <p>These events may interest you.</p>
            </div>
            
        </div>
        <div id="wrapper">

        
        <!-- Events Row -->

            <div class="col-lg-12">
                <h2 class="page-header">Category - 1</h2>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>{Event.name}
                    <small>{Event.type}</small>
                </h3>
                <p>Short description</p>
            </div>
        
            
            
           
            
            
        <hr>

        
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

<?php require_once("includes/footer.php") ?>   

</html>
