<?php
ob_start();
?>
<?php
    if(isset($_POST['submit']))
    {
        $username = trim(mysql_prep($_POST['username']));
        $password = trim(mysql_prep($_POST['password']));
        // echo "string";
        //echo $_POST['username'];    
        $hashed_password = md5($password);
        $query = mysql_query("SELECT * FROM User WHERE User_username='$username' AND User_pass='$hashed_password'");
        if(!$query)
        {
             //   echo "hello world";
            //if query is not successfull then return error message.
            echo mysql_error();
        }
        $row = mysql_fetch_array($query);
        //echo $row[0];
        //echo "hello";
        if(empty($row)){
            $msg="wrong username or password";
            echo $msg;
        }
        else
        {
            //echo "hello world";
            $_SESSION['currentuser'] = $username;
            $bsid = $row['User_username'];
            //redirect_to("index.php");
            //header(main_dashbord.php?user=$bsid)
            redirect_to("main_dashbord.php?user=$bsid");
        }
    }
?>
