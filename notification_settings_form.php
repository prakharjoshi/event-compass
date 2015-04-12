<?php require_once("includes/base_main_settings.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("backend/ifnotlogin.php") ?>
<?php require_once("backend/notification_settings_formbackend.php") ?>

<?php
    $username = $_SESSION['currentuser'];
?>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/fixed_sidebar.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

<div id="main">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-center"><font face="Tangerine">Notification Settings</font></h1>
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
                                        <label><font face="Montserrat">Modes of Notification</font></label>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="email" name="email"><span class="fa fa-envelope"><font face="Montserrat"> Email</font>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="text" name="text"><span class="fa fa-mobile-phone"> <font face="Montserrat">Text Message</font>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="submit" value="submit"><font face="Montserrat">Submit</font></button>
                                    </div>
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
<!-- /#main -->

<?php require_once("includes/footer.php") ?>