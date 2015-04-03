<?php require_once("includes/base.php") ?>

<body>
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center">Create Event</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h3>Fill out the details for your event</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row col-md-offset-1">
                                <div class="col-lg-10">
                                    <form role="form">
                                        <div class="form-group">
                                            <label><h3>Event Name</h3></label>
                                            <input class="form-control" placeholder="Event Name">
                                        </div>
                                        <div class="form-group">
                                            <label><h3>Event Location</h3></label>
                                            <input class="form-control" placeholder="Event Location">
                                        </div>
                                        <div class="form-group">
                                            <label><h3>Event Date</h3></label>
                                                <input class="form-control" type="datetime-local">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><h3>Verification Document</h3></label>
                                            <input type="file">
                                        </div>
                                        <div class="form-group">
                                            <label><h3>Cover Photo</h3></label>
                                            <input type="file">
                                        </div>
                                        <div class="form-group">
                                            <label><h3>Short Description</h3></label>
                                            <textarea class="form-control" ></textarea>
                                        </div>
                                                                     
                                        <div class="form-group">
                                            <label><h3>Do you wish to sell tickets</h3></label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Yes
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">No
                                                </label>
                                            </div>
                                        </div>                                        
                                        <div class="form-group">
                                            <label><h3>Event Type</h3></label>
                                            <select class="form-control">
                                                <option>Concert or Performance</option>
                                                <option>Festival, Fair or Exhibition</option>
                                                <option>Game or Competition</option>
                                                <option>Party or Social Gathering</option>
                                                <option>Race or Tournament</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group last">
                                            <div class="col-sm-offset-9 col-sm-9">
                                                <button type="button" class="btn btn-link">Cancel</button>
                                                <button id="btn-signup" type="button" class="btn btn-success"></i>Create Event</button>
                                            </div>
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
