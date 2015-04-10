<?php require_once("includes/base_main_settings.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("backend/ifnotlogin.php") ?>
<?php
    $username = $_SESSION['currentuser'];
?>
<?php require_once("backend/notification_settings_formbackend.php") ?>

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

<div id="main">
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center">Notification Settings</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="notification_settings_form.php?user=<?php echo $username;?>" method="post">
                                        <div class="form-group">
                                            <label>Modes of Notification</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="email" name="email"><span class="fa fa-envelope"> Email
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="text" name="text"><span class="fa fa-mobile-phone"> Text Message
                                                </label>
                                            </div>
                                        </div>
                                      <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                                      
                                </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-12">
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
  
</div>
</body>
<?php require_once("includes/footer.php") ?>
</html>
