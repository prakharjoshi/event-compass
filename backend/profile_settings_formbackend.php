<?php
    if (isset($_POST['submit'])) 
    {
        $x = 0;
       // echo empty($_POST['password']);
        if(isset($_POST['old_password']))
        {
            $old_password = $_POST['old_password'];
            $old_hashed = md5($old_password);
            $query="SELECT User_pass FROM User WHERE User_username='$username'";
            $query_run=mysql_query($query);
            $old_pass=mysql_result($query_run,0,'User_pass');
            if($old_pass!=$old_hashed)
            {
                redirect_to("../profile_settings_form.php");
            }
        }
        if (isset($_POST['password']) && isset($_POST['confirmPassword']) && !empty($_POST['password'])) 
        {
           
            $password = $_POST['password'];
            $hashed_password = md5($password);
            $x = 1;
        }
        if(isset($_POST['email']) && !empty($_POST['email']) && $x == 1)
        {
            $a = strpos($_POST['email'], '.');
            $b = strpos($_POST['email'], '@');
            if($a !== false && $b !== false)
            {
                $email = $_POST['email'];
                $x = 1;
            }
            else
            {
                $x = 2;
            }
        }
        if (isset($_POST['address']) && !empty($_POST['address']) && $x == 1) 
        {
            $address = $_POST['address'];
            $x = 1;
        }
       // echo strcmp($_POST['state'];
        if (isset($_POST['state']) && !empty($_POST['state']) && $x == 1)
        {
            $state = $_POST['state'];
            $x = 1;
        }
        if (isset($_POST['city']) && !empty($_POST['city']) && $x == 1) 
        {
            $city = $_POST['city'];
            $x = 1;
        }
        $address = $address . " " . $state . " " . $city;
        if ($x == 2) 
        {
            echo "Invalid email";   
        }
        if($x == 0)
        {
            echo "Some fields empty, please fill them again";
        }
        else
        {
            //echo $username;
            $query = mysql_query("SELECT * FROM User WHERE User_username = '$username'");
            if(!$query)
            {
                echo mysql_error();
            }
            $numrows = mysql_num_rows($query);
            $row = mysql_fetch_array($query);
            //echo $row['0'];
            $ide = $row['User_id'];
            if($numrows!=0)
            {
               $query1  = mysql_query("UPDATE User SET User_address = '$address', 
                        User_email = '$email', User_pass = md5($password) WHERE User_id = $ide");
                if(!$query1)
                {
                    echo mysql_error();
                }
            }
        }
    }
?>