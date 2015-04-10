<?php
session_start();
?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("backend/loginbackend.php") ?>


<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/login.css" rel="stylesheet">
<body>
    <div class="collapse navbar-collapse navbar-left navbar-main-collapse">
      <ul class="nav navbar-nav">
            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
            <li>
                <!--<img src="image/logo.jpg" width="120px" height="120px"> -->
          </li>
        </ul>
     </div>      
</body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading"><strong class="">Login</strong>

                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-9">
                                <input class="form-control" placeholder="Username" required="" name="username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="inputPassword3" placeholder="Password" required="" type="password" name='password'>
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="reset" class="btn btn-default btn">Reset</button>
                                <button type="submit" class="btn btn-primary btn" value="submit" name="submit">Sign in</button>
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label class="">
                                        <input class="" type="checkbox">Remember me</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer"><strong class="">Not Registered?</strong><a href="signup.php" class="btn btn-link btn"><strong class="">Register Here</strong></a>
                </div>
            </div>
        </div>
    </div>
</div>
