<?php
session_start();
?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("backend/signupbackend.php") ?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/login.css" rel="stylesheet">
<link href="css/bootstrap-social.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div id="signupbox" style="margin-top:25px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="panel panel-info" >
<div class="panel-heading">
<div class="panel-title">Sign Up</div>
</div>
<div style="padding-top:30px" class="panel-body" >
<form role="form" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return checkForm(this);">
<div id="signupalert" style="display:none" class="alert alert-danger">
<p>Error:</p>
<span></span>
</div>
<div class="form-group">
<label for="firstname" class="col-md-3 control-label">First Name</label>
<div class="col-md-9">
<input type="text" class="form-control" name="firstname" placeholder="First Name" required>
</div>
</div>
<div class="form-group">
<label for="lasttname" class="col-md-3 control-label">Last Name</label>
<div class="col-md-9">
<input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
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
<input type="password" id="cpass" class="form-control" name="repassword" placeholder="Please enter your password again" required>
</div>
</div>
<div class="form-group">
<label for="email" class="col-md-3 control-label">E-mail</label>
<div class="col-md-9">
<input type="text" class="form-control" name="email" placeholder="E-mail Address" required>
</div>
</div>
<div class="form-group-last">
<div class="col-sm-offset-8 col-sm-9">
<a href="login.php" class="btn btn-link btn"><strong class="">Cancel</strong></a>
<button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
</div>
</div>
<!-- Facebook and Google+ Login
<div class="panel-footer"><strong class="">Sign In with Facebook or Google+
<div style="border-top: 1px ; padding-top:20px" class="form-group">
<div class="col-md-offset-3 col-md-6">
<a class="btn btn-block btn-social btn-facebook">
<i class="fa fa-facebook"></i> Facebook
</a>
<a class="btn btn-block btn-social btn-google-plus">
<i class="fa fa-google-plus"></i> Google+
</a>
</div>
</div>
</div>
-->
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<!-- Script to check password !-->
<script type="text/javascript">
function checkForm(form)
{
if(form.password.value.length < 8)
{
alert("Error: Password must be at least 8 characters long");
form.password.focus(); return false;
}
}
}
</script>
<script>
$('form').on('submit',function(){
if($('#pass').val()!=$('#cpass').val()){
alert('Password not matches');
return false;
}
return true;
});
</script><?php
session_start();
?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("backend/signupbackend.php") ?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/login.css" rel="stylesheet">
<link href="css/bootstrap-social.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div id="signupbox" style="margin-top:25px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="panel panel-info" >
<div class="panel-heading">
<div class="panel-title">Sign Up</div>
</div>
<div style="padding-top:30px" class="panel-body" >
<form role="form" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return checkForm(this);">
<div id="signupalert" style="display:none" class="alert alert-danger">
<p>Error:</p>
<span></span>
</div>
<div class="form-group">
<label for="firstname" class="col-md-3 control-label">First Name</label>
<div class="col-md-9">
<input type="text" class="form-control" name="firstname" placeholder="First Name" required>
</div>
</div>
<div class="form-group">
<label for="lasttname" class="col-md-3 control-label">Last Name</label>
<div class="col-md-9">
<input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
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
<input type="password" id="cpass" class="form-control" name="repassword" placeholder="Please enter your password again" required>
</div>
</div>
<div class="form-group">
<label for="email" class="col-md-3 control-label">E-mail</label>
<div class="col-md-9">
<input type="text" class="form-control" name="email" placeholder="E-mail Address" required>
</div>
</div>
<div class="form-group-last">
<div class="col-sm-offset-8 col-sm-9">
<a href="login.php" class="btn btn-link btn"><strong class="">Cancel</strong></a>
<button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
</div>
</div>
<!-- Facebook and Google+ Login
<div class="panel-footer"><strong class="">Sign In with Facebook or Google+
<div style="border-top: 1px ; padding-top:20px" class="form-group">
<div class="col-md-offset-3 col-md-6">
<a class="btn btn-block btn-social btn-facebook">
<i class="fa fa-facebook"></i> Facebook
</a>
<a class="btn btn-block btn-social btn-google-plus">
<i class="fa fa-google-plus"></i> Google+
</a>
</div>
</div>
</div>
-->
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<!-- Script to check password !-->
<script type="text/javascript">
function checkForm(form)
{
    if(form.password.value.length < 8)
    {
        alert("Error: Password must be at least 8 characters long");
        form.password.focus(); return false;
    }
}

</script>
<script>
$('form').on('submit',function(){
if($('#pass').val()!=$('#cpass').val()){
alert('Password not matches');
return false;
}
return true;
});
</script>