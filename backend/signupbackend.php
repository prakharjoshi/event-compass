<?php
ob_start();
?>
<?php
 function randomPas() 
 {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
 }
	$x = 0;
	if(isset($_POST['submit']))
	{
		//echo "hello word";
		if(strlen($_POST['password']) < 8)
		{
			$x = 11;
		}
		if($_POST['password']!=$_POST['repassword'])
		{
			$x=10;
			
		}
		if(empty($_POST['username']))
		{
			$usernameErr = "Username is required";
			$x = 1;
		}
		else
		{
			$t = $_POST['username'];
			$query = mysql_query("SELECT * FROM User WHERE User_username = '$t'");
			if (!$query) {
				echo mysql_error();
			}
			$numrows = mysql_num_rows($query);
			if($numrows == 0)
			{
				$username = trim(mysql_prep($_POST['username']));
			}
			else
			{
				$x = 6;
			}
		}

		if(empty($_POST["firstname"]))
		{
			$firstnameErr = "First Name is required";
			$x = 2;
		}
		else
		{
			$firstname = trim(mysql_prep($_POST['firstname']));
		}

		$lastname = trim(mysql_prep($_POST['lastname']));

		if(empty($_POST["email"]))
		{
			$emailErr = "Email is required";
			$x = 4;
		}
		else
		{
			$a = strpos($_POST['email'], '.');
			$b = strpos($_POST['email'], '@');
			if($a !== false && $b !== false)
			{
				$z = $_POST["email"];
				$query = mysql_query("SELECT * FROM User WHERE (User_email = '$z')");
				$numrows = mysql_num_rows($query);
				if($numrows == 0)
				{
					$email = trim(mysql_prep($_POST['email']));	
				}
				else
				{
					$x = 7;
				}
			}
			else
			{
				$x = 4;
			}
		}

		if(empty($_POST["password"]))
		{
			$passwordErr = "Password is required";
			$x = 5;
		}
		else
		{
			$password = trim(mysql_prep($_POST['password']));	
		}

		//The test_input function is been defined in the functions.php. It will check that whether some one has tried to enter some alien
		//script and if someone has tried it, it will protect it.
		if($x == 1)
		{
			echo "User Name field can't be empty";
		}
		if($x == 2)
		{
			echo "First Name can't be empty";
		}
		if($x == 4)
		{
			echo "Invalid email";
		}
		if($x == 5)
		{
			echo "Invalid password";
		}
		if($x == 6)
		{
			echo "Username already exists";
		}
		if($x == 7)
		{
			echo "Email aready exists";
		}
		if($x==10)
		{
			echo "Passwords do not match";
		}
		if($x == 11)
		{
			echo "Password is short ( >= 8)";
		}
		if($x == 0)
		{
			//test_input($username);
			//test_input($firstname);
			//test_input($lastname);
			//test_input($email);
			//test_input($password);
			//echo $username;
			//echo $firstname;
			//echo $lastname;
			//echo $email;
			//echo $password;
			$hashed_password = md5($password);
			$randompass=randomPas();
			$query = "INSERT INTO User (User_fname, User_lname,User_email, User_username,User_pass,User_token) VALUES ('{$firstname}','{$lastname}','{$email}','{$username}','{$hashed_password}','{$randompass}')";
			$result = mysql_query($query,$connection);
			if($result)
			{
				//echo "hello";
				// Account is successfully created
				redirect_to("login.php");
			}
			else
			{
				//echo "hello world";
				//An error occured during entring values in the database.
				//if it comes here, shame on me. :P
			}
		}
	}
	else
	{

	}
?>