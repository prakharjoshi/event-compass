<?php
    if (isset($_POST['submit'])) 
    {
        $x = 0;
        $y = 0;
        if (isset($_POST['email'])) 
        {
            $email = $_POST['email'];
            $x = 1;
        }
        if (isset($_POST['text'])) 
        {
            $text = $_POST['text'];
            $y = 1;
        }
        
        $query1  = mysql_query("UPDATE User SET User_notifyemail = '$x',User_notifyphone = '$y' WHERE User_username = '$username'");
            if(!$query1)
            {
                echo mysql_error();
            }
            redirect_to("main_dashbord.php?user=$username");
    }
    if (isset($_POST['none'])) 
    {
        $x = 0;
        $y = 0;
        $query1  = mysql_query("UPDATE User SET User_notifyemail = '$x',User_notifyphone = '$y' WHERE User_username = '$username'");
            if(!$query1)
            {
                echo mysql_error();
            }
            redirect_to("main_dashbord.php?user=$username");
    }
?>