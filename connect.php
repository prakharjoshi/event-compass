<?php

    $server_name = 'localhost';
    $host_name = 'root';
    $password = '';
    $database ='sen';
    
    
    if(!mysql_connect($server_name , $host_name , $password)||!mysql_select_db($database)){
        mysql_error();
       }
     
   
?>