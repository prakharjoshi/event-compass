<?php
    //echo $username;
    if (isset($_POST['submit'])) 
    {
        if(empty($_POST['eventname']) || empty($_POST['eventlocation']) || empty($_POST['date']) || empty($_POST['time']) || empty($_POST['description']) || empty($_POST['optionsRadios']) || empty($_POST['category']))
        {
            echo "Some fields are empty which should not be empty";
        }
        else
        {
            $eventname = $_POST['eventname'];
            $eventlocation = $_POST['eventlocation'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $desc = $_POST['description'];
            $radio = $_POST['optionsRadios'];
            foreach ($_POST['category'] as $select)
            {
                $category = $select;
            }
            $query1 = mysql_query("SELECT * FROM Subcategory WHERE Sub_name = '$category'");
            if(!$query1)
            {
                echo mysql_error();
            }
            $row = mysql_fetch_array($query1);
            $sub_id = $row['Sub_id'];

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
          //  echo $type_id;

            //echo $username;
            $query3 = mysql_query("SELECT * FROM User WHERE User_username = '$username'");
            if(!$query3)
            {
                echo mysql_error();
            }
            $row3 = mysql_fetch_array($query3);
            //echo $row3;
            $user_id = $row3['User_id'];
            //echo $user_id;
            $query = mysql_query("INSERT INTO Event (Ev_name, Ev_location, Ev_date, Ev_time, Ev_description, Sub_id, Type_id,User_id)
                           VALUES ('$eventname','$eventlocation','$date','$time','$desc','$sub_id','$type_id','$user_id')");
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
            //echo $idew;
            redirect_to("event_form2.php?user=$username&id=$idew");
        }
    }
?>

