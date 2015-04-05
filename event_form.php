<?php
    ob_start();
    session_start();
?>
<?php require_once("includes/base.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("backend/ifnotlogin.php") ?>
<?php
    $username =  $_SESSION['currentuser'];
?>
<?php require_once("backend/event_pagebackend.php") ?>
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center">EVENT FORM</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h3>Fill the information in the form to create your own event page. :)</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row col-md-offset-1">
                                <div class="col-lg-12">
                                    <form enctype="multipart/form-data" role="form" method="post" action="event_form.php?user=<?php echo $username;?>">
                                        <div class="form-group">
                                            <label><h3>Event Name</h3></label>
                                            <input class="form-control" name="eventname" placeholder="Enter name of your event">
                                            <p class="help-block">Name of your event.</p>
                                        </div>
                                        <div class="form-group">
                                            <label><h3>Event Location</h3></label>
                                            <input class="form-control" placeholder="Enter location of your event" name="eventlocation">
                                            <p class="help-block">Location of your event.</p>
                                        </div>
                                        <div class="form-group">
                                            <label><h3>Event Date</h3></label>
                                                <input class="form-control" placeholder="DD / MM / YYYY" name="date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><h3>Event Time</h3></label>
                                                <input class="form-control" placeholder="HH : MM" name="time">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label><h3>Short Description</h3></label>
                                            <textarea class="form-control" rows="3" name="description"></textarea>
                                        </div>
                                        <div class="form-group">
                                        <div class="form-group">
                                            <label><h3>Want to sell tickets</h3></label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Yes
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">No
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><h3>Category of Event</h3></label>
                                            <select class="form-control" name="category[]">
                                                <option>Classical Music</option>
                                                <option>Rock Music</option>
                                                <option>Coding Contest</option>
                                                <option>Classical Dance</option>
                                                <option>Hiphop Dance</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label><h3>Type of Event</h3></label>
                                            <select class="form-control" name="type[]">
                                                <option>Competition</option>
                                                <option>Conecert</option>
                                                <option>type3</option>
                                                <option>type4</option>
                                                <option>type5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <button type="submit" class="btn btn-" name="submit" value="submit">Proceed To Next Step</button>
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
