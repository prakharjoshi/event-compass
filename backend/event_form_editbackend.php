<?php
    //echo $username;
    if (isset($_POST['submit'])) 
    {
        if(empty($_POST['eventname']) || empty($_POST['eventlocation']) || empty($_POST['date']) || empty($_POST['description']))
        {
            echo "Some fields are empty which should not be empty";
        }
        else
        {
            $eventname = $_POST['eventname'];
            $eventlocation = $_POST['eventlocation'];
            $dateandtime = $_POST['date'];
            $pieces = explode(" ", $dateandtime);
            $date=$pieces[0];
            $time=$pieces[1];
            
            $date=(string)$date;
            $time=(string)$time;
           
            $desc = $_POST['description'];
           
            $select1 = $_POST['type'];
            //this foreach should not be removed
            foreach ($_POST['type'] as $select1)
            {
                $type = $select1;
            }
            $query2 = mysql_query("SELECT * FROM Event_Type WHERE Type_name = '$type'");
            if(!$query2)
            {
                echo mysql_error();
            }
            $row2 = mysql_fetch_array($query2);
            $type_id = $row2['Type_id'];
            
            $query=mysql_query("UPDATE Event SET Ev_name='$eventname' , Ev_location='$eventlocation',Ev_date='$date' ,Ev_time='$time' ,Ev_description='$desc',Type_id='$type_id' WHERE Ev_id='$id'");
            //$query = mysql_query("INSERT INTO Event (Ev_name, Ev_location, Ev_date, Ev_time, Ev_description, Sub_id, Type_id,User_id)
               //            VALUES ('{$eventname}','{$eventlocation}','{$date}','{$time}','{$desc}','{$sub_id}','{$type_id}','{$user_id}')");
            if(!$query)
            {
                echo mysql_error();
            }
            $query4 = mysql_query("SELECT * FROM Event WHERE Ev_name = '$eventname'");
            if(!$query4)
            {
                echo mysql_error();
            }
            $row4 = mysql_fetch_array($query4);
            $idew = $row4['Ev_id'];
            

            redirect_to("event_page.php?user=$username&id=$idew");
        }
    }
?>