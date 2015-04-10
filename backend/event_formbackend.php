<?php
    //echo $username;
    if (isset($_POST['submit'])) 
    {
        if(empty($_POST['eventname']) || empty($_POST['eventlocation']) || empty($_POST['date']) || empty($_POST['description']) || empty($_POST['category']))
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
            $ticket_type=$_POST['ticket_type'];
            $ticket_price=$_POST['ticket_price'];
            $ticket_available=$_POST['ticket_available'];
            //echo "<br>" .$eventname . "<br>";
            //echo "<br>" .$eventlocation . "<br>";
            //echo "<br>" .$date . "<br>";
            //echo "<br>" .$time . "<br>";
            
            $date=(string)$date;
            $time=(string)$time;
            //echo "hello";
            //echo $date;
            //echo $time;
            //echo gettype($date);
            $desc = $_POST['description'];
           // $radio = $_POST['optionsRadios'];
            $category =  $_POST['category'];
            $subcategory =  $_POST['subcategory'];
            /*echo gettype($_POST['category']);
            foreach ($_POST['category'] as $select)
            {
                $category = $select;
            }*/
           // echo "<br>" .$desc . "<br>";
            //echo "<br>" .$category . "<br>";
            $query1 = mysql_query("SELECT * FROM Subcategory WHERE Sub_name = '$subcategory'");
            if(!$query1)
            {
                echo mysql_error();
            }
            $row = mysql_fetch_array($query1);
            $sub_id = $row['Sub_id'];
            //echo "<br>";

            //echo "<br>" . $sub_id . "<br>";
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
            /*echo "<br>";
            echo $type_id;
            echo "<br>";*/
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
            //echo $date;
            //echo $time;
            $query = mysql_query("INSERT INTO Event (Ev_name, Ev_location, Ev_date, Ev_time, Ev_description, Sub_id, Type_id,User_id)
                           VALUES ('{$eventname}','{$eventlocation}','{$date}','{$time}','{$desc}','{$sub_id}','{$type_id}','{$user_id}')");
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

            //tickets query
            $query = mysql_query("INSERT INTO Tickets (Ev_id, Tick_type, Tick_price, Tick_qty)
                           VALUES ('{$idew}','{$ticket_type}','{$ticket_price}','{$ticket_available}')");

            redirect_to("event_form2.php?user=$username&id=$idew");
        }
    }
?>