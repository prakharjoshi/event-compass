<?php require_once("includes/base.php") ?>

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
                                    <form role="form">
                                        <div class="form-group">
                                            <label><h3>Event Name</h3></label>
                                            <input class="form-control">
                                            <p class="help-block">Name of your event.</p>
                                        </div>
                                        <div class="form-group">
                                            <label><h3>Event Location</h3></label>
                                            <input class="form-control" placeholder="Enter text">
                                            <p class="help-block">Location of your event.</p>
                                        </div>
                                        <div class="form-group">
                                            <label><h3>Event Day and Date</h3></label>
                                                <input class="form-control" placeholder="Enter text">
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
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label><h3>Checkboxes</h3></label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 1
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 2
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 3
                                                </label>
                                            </div>
                                        </div>
                                        
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
                                            <label><h3>Type of event</h3></label>
                                            <select class="form-control">
                                                <option>Cat-1</option>
                                                <option>Cat-2</option>
                                                <option>Cat-3</option>
                                                <option>Cat-4</option>
                                                <option>Cat-5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <button type="submit" class="btn btn-">Submit Button</button>
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
