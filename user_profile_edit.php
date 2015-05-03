<?php require_once("includes/base_main_settings.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("backend/profile_settings_formbackend.php") ?>
<?php require_once("backend/ifnotlogin.php") ?>
<?php $username = $_SESSION['currentuser']?>
<?php
    $q=mysql_query("SELECT * FROM User WHERE User_username='$username'");
    $userid=mysql_result($q,0,'User_id');
    $fname=mysql_result($q,0,'User_fname');
    $lname=mysql_result($q,0,'User_lname');
    $email=mysql_result($q,0,'User_email');
    $address=mysql_result($q,0,'User_address');
    $phone=mysql_result($q,0,'User_phone');
    $token=mysql_result($q,0,'User_token');
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
                <h1 class="page-header text-center"><font face="Tangerine">Edit Profile</font></h1>
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
                                <form role="form" action="user_profile_edit.php?user=<?php echo $username;?>" method="post">
                                    <div class="form-group">
                                        <label for="disabledSelect"><font face="Montserrat">Username</font></label>
                                        <input class="form-control" id="disabledInput" type="text" value= "<?php echo $username;?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label> <font face="Montserrat">First Name</font></label>
                                        <input type="text" id="old_pass" value= "<?php echo $fname;?>" class="form-control" name="firstname" />
                                      
                                    </div>
                                    <div class="form-group">
                                      <label> <font face="Montserrat">Last Name</font></label>
                                        <input type="text" id="old_pass" value= "<?php echo $lname;?>" class="form-control" name="lastname" />
                                    </div>
                                    <div class="form-group">
                                      <label> <font face="Montserrat">Old Password</font></label>
                                        <input type="password" id="old_pass" class="form-control" name="old_password" />
                                    </div>
                                    <div class="form-group">
                                      <label><font face="Montserrat">New Password</font></label>
                                        <input type="password" id="pass" class="form-control" name="new_password" />
                                    </div>
                                    <div class="form-group">
                                        <label><font face="Montserrat">Retype password</font></label>
                                          <input type="password" id="cpass" class="form-control" name="confirmPassword" />
                                    </div>
                                    <div class="form-group">
                                        <label><font face="Montserrat">Mobile no:</font></label>
                                        <input class="form-control" value= "<?php echo $phone;?>" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label><font face="Montserrat">Email</font></label>
                                        <?php
                                        if($token!=1){?>
                                        <a href="verify_email.php?user=<?php echo $username;?>">(Verify your email here  </a>to receive email notifications.)
                                        
                                        <?php } ?>
                                       <input class="form-control" value= "<?php echo $email;?>" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label><font face="Montserrat">Address</font></label>
                                        <input class="form-control" value= "<?php echo $address;?>" name="address">
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submit"><font face="Montserrat">Submit Button</font></button>
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
<script>
    $('form').on('submit',function(){
       if($('#pass').val()!=$('#cpass').val()){
           alert('Passwords do not match');
           return false;
       }

       return true;
    });
</script>

<?php require_once("includes/footer.php") ?>

