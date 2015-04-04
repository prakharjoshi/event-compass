<?php

if(isset($_POST['submit']))
{
    
    $query = "SELECT * FROM User WHERE User_username = '$username'";
    $query_run=mysql_query($query);
    $num_rows=mysql_num_rows($query_run);
            
            if($num_rows==0)
            {
                echo mysql_error();
            }
            else
            {
                $user_id = mysql_result($query_run,0,'User_id');
            }

    $query3="DELETE FROM Interested_in WHERE User_id = '$user_id'";

    $query_run3 = mysql_query($query3);
            if(!$query_run3)
            {
                echo mysql_error();
            }

     if(isset($_POST['checkbox2']))
        {

            $query1="INSERT INTO Interested_in (User_id,Sub_id,Visible,Count)
                           VALUES ('$user_id','2','0','0')";
            $query_run2=mysql_query($query1);
            if(!$query_run2)
            {
                echo mysql_error();
            }

        }

     if(isset($_POST['checkbox1']))
        {

            $query1="INSERT INTO Interested_in (User_id,Sub_id,Visible,Count)
                           VALUES ('$user_id','1','0','0')";
            $query_run2=mysql_query($query1);
            if(!$query_run2)
            {
                echo mysql_error();
            }

        }


     if(isset($_POST['checkbox6']))
        {

            $query1="INSERT INTO Interested_in (User_id,Sub_id,Visible,Count)
                           VALUES ('$user_id','6','0','0')";
            $query_run2=mysql_query($query1);
            if(!$query_run2)
            {
                echo mysql_error();
            }

        }
    
    /*for ($subid = 1; $subid <= 50; $subid++) 
    {

        if(isset($_POST['checkbox'.$subid]))
        {

            $query1="INSERT INTO Interested_in (User_id,Sub_id,Visible,Count)
                           VALUES ('$user_id','$subid','0','0')";
            $query_run2=mysql_query($query1);
            if(!$query_run2)
            {
                echo mysql_error();
            }

        }
    }*/
    redirect_to("main_dashbord.php?user=$username");
}
?>