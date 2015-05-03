<?php 
require("constants.php");
// create a database connection.
	$connection = mysql_connect(DB_SERVER,DB_USER);
	if(!$connection)
	{
		die("Database connection failed: " . mysql_error());
	}

//Selecting a database to use
	$db_select	= mysql_select_db(DB_NAME,$connection);
	if(!$db_select)
	{
		die("Database connection failed: ". mysql_error());
	}
?>
