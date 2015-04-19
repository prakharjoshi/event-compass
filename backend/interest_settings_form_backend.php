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

    $q=mysql_query("SELECT * FROM Subcategory");
    //print_r($q);
    $Count=0;
    while($row = mysql_fetch_array($q)) 
    {
        $subid=$row['Sub_id'];
        if(isset($_POST[$subid]))
        {
            echo $subid;
            $qc=mysql_query("SELECT * FROM Interested_in2 WHERE User_id = '$user_id' AND Sub_id='$subid'");
            if(mysql_num_rows($qc)!=0)
            {
                $Count=mysql_result($qc,0,'Count');
            }
            $query1="INSERT INTO Interested_in (User_id,Sub_id,Visible,Count)
                           VALUES ('$user_id','$subid','0','$Count')";
            $query_run2=mysql_query($query1);
            if(mysql_num_rows($qc)==0)
            {              
            $query2=mysql_query("INSERT INTO Interested_in2 (User_id,Sub_id,Visible,Count)
                           VALUES ('$user_id','$subid','0','0')");
            }
            
            if(!$query_run2)
            {
                echo mysql_error();
            }

        }
    }
    redirect_to("main_dashbord.php?user=$username");
}
?>