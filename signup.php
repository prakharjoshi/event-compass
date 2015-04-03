<link href="css/login.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet"> 
<link href="css/bootstrap-social.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <div class="container">    
        <div id="signupbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign Up</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >                            
                        <form role="form" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>                                   
                                <div class="form-group">
                                    <label for="lasttname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username" class="col-md-3 control-label">Username</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="username" placeholder="Desired Username" required>
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" id="pass" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                </div>                           
                            <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Retype Password</label>
                                    <div class="col-md-9">
                                        <input type="password" id="cpass" class="form-control" name="password" placeholder="Please enter your password again" required>
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">E-mail</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="E-mail Address">
                                    </div>
                                </div>
                                   
                                <div class="form-group last">
                                    <div class="col-sm-offset-8 col-sm-9">
                                        <button type="button" class="btn btn-link">Cancel</button>
                                        <button type="submit" class="btn btn-success"></i>Sign Up</button>
                                    </div>
                                </div>
                                
                                <div style="border-top: 1px ; padding-top:20px"  class="form-group">                                   
                                    <div class="col-md-offset-3 col-md-6">
                                        <a class="btn btn-block btn-social btn-facebook">
                                            <i class="fa fa-facebook"></i> Sign in with Facebook
                                        </a>
                                        
                                        <a class="btn btn-block btn-social btn-google-plus">
                                            <i class="fa fa-google-plus"></i> Sign in with Google+
                                        </a>                            
                                    </div>                                     
                                </div>
                        </form>    
                        </div>                     
                    </div>  
                </div>
            </div>
        </div>

<!-- Script to check password !-->
<script>
$('form').on('submit',function(){
   if($('#pass').val()!=$('#cpass').val()){
       alert('Password not matches');
       return false;
   }
   return true;
});
</script>
