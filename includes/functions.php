<?php
	//this file will be used to store all the functions.	
	//Use it as a standard function
	function mysql_prep($value)
	{
		$magic_quote_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists("mysql_real_escape_string");
		if($new_enough_php)
		{
			if($magic_quote_active)
			{
				$value = stripslashes($value);
			}
			$value = mysql_real_escape_string($value);
		}
		else
		{
			if(!$magic_quote_active)
			{
				$value=addslashes($value);
			}
		}
		return $value;
	}

	//function to redirect to a page
	function redirect_to($location)
	{
		if($location)
		{
			header("Location: {$location}");
			exit;
		}
	}
?>
