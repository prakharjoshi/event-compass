<?php
    
    ob_start();
    session_start();
 ?>
 <?php  
    $current_file = $_SERVER['SCRIPT_NAME'];
    
    
    function loggedin(){
        
        if(isset($_SESSION['userid'])&&!empty($_SESSION['userid'])){
            return true;
        }
        else {
            return false;
    }

}
?>