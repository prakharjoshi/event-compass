<?php require_once("includes/functions.php");?>
<?php
	//This function will check whether the user is logged in or not. (Security fu)
	if (!(isset($_SESSION['currentuser']) && $_SESSION['currentuser'] != '')) 
	{
	    redirect_to("login.php");
	}
?>