<?php
    if (isset($_POST['submit'])&&!empty($_POST['old_password'])&&!empty($_POST['new_password']) 
        && !empty($_POST['confirmPassword'])&&!empty($_POST['email'])&&!empty($_POST['address'])) 
    {
        $x = 0;
       // echo empty($_POST['password']);
        
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $old_password = $_POST['old_password'];
            $new_password=$_POST['new_password'];
            $confirmPassword=$_POST['confirmPassword'];
            $old_hashed = md5($old_password);
            $query="SELECT User_pass FROM User WHERE User_username='$username'";
            $query_run=mysql_query($query);
            $old_pass=mysql_result($query_run,0,'User_pass');
            if($old_pass!=$old_hashed)
            {
                $x = 10;
                //echo $x;
                //redirect_to("user_profile_edit.php?user=$username");
            }
        
        
           
            
            $hashed_password = md5($new_password);
            if($new_password!=$confirmPassword)
            {
                $x=3;
            }
            
        
        
            $a = strpos($_POST['email'], '.');
            $b = strpos($_POST['email'], '@');
            if($a !== false && $b !== false)
            {
                $email = $_POST['email'];
            }
            else
            {
                $x = 2;
            }
        
        
            $address = $_POST['address'];
            
        
       // echo strcmp($_POST['state'];
        //echo $x;
        if ($x == 2) 
        {
            echo "Invalid email";   
        }
        
        if($x == 10)
        {
            echo "Enter Correct Old password";
        }
        if($x == 3)
        {
            echo "Passwords do not macth";
        }
        if($x==0)
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
               $query1  = mysql_query("UPDATE User SET User_fname='$firstname',User_lname='$lastname',User_address = '$address', 
                        User_email = '$email', User_pass = '$hashed_password' WHERE User_id = $ide");
                if(!$query1)
                {
                    echo mysql_error();
                }
            }
        }
    }
    else if(isset($_POST['submit']))
    {
        echo 'Some fields are empty';
    }
?>