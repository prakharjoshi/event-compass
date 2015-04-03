<?php require_once("includes/base_main_settings.php") ?>

<div id="main">
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-11">
                    <h1 class="page-header">PROFILE SETTINGS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-11">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-11">
                                    <form role="form">
                                        <div class="form-group">
                                                <label for="disabledSelect">Username</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder= "$pp" disabled>
                                        </div>

                                        <div class="form-group">
                                          <label>Password</label>
                                            <input type="password" id="pass" class="form-control" name="password" />
                                          
                                        </div>

                                        <div class="form-group">
                                            <label>Retype password</label>
                                              <input type="password" id="cpass" class="form-control" name="confirmPassword" />
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>

                                        
                                        
                                        <div class="form-group">
                                            <label>State</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>City</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-11">
                                    
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

<script>
$('form').on('submit',function(){
   if($('#pass').val()!=$('#cpass').val()){
       alert('Password not matches');
       return false;
   }
   return true;
});
</script>

<?php require_once("includes/footer.php") ?>
