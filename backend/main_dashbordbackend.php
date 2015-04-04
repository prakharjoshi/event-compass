<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php ob_start(); ?>
<?php require_once("backend/signupbackend.php");?>
<?php
session_start();
?>
<?php
if(isset($_SESSION['currentuser'])){
    $bsid = 1;
    $bsid = trim(mysql_prep(urldecode($_GET['user'])));
    //echo $bsid;
}
else{
    redirect_to("login1.php");
}
?>