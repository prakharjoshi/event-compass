<?php
$msg = "";
if(isset($_GET['logout'])){
	session_unset();
	session_destroy();
	$msg = "you have successfully logged out";
	redirect_to("index.php");
}
?>