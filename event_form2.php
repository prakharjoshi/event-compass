<?php require_once("includes/base.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
<?php
    $username = $_SESSION['username'];
?>
<?php
    if ($_POST['submit']) 
    {
        $eventname = $_POST['eventname'];
        $eventlocation = $_POST['eventlocation'];
        $date = $_POST['date'];
           
    }
?>
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center">Event Page</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h3>Upload Cover Photo of your cover page</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row col-md-offset-1">
                                <div class="col-lg-12">
                                    <form enctype="multipart/form-data" role="form" method="post" action="event_form.php?user<?php echo $username;?>">
                                        <div class="form-group">
                                            
                                        <div class="form-group">
                                            <label><h3>Cover Photo</h3></label>
                                            <input type="file">
                                        </div>
                                        <div class="form-group">
                                           
                                        
                                        <button type="submit" class="btn btn-" name="submit" value="submit">Proceed to next step</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
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
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    

    

    
</body>
<?php require_once("includes/footer.php") ?>

</html>