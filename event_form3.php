<?php
    ob_start();
?>

<?php require_once("includes/base.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat">

<?php
    $username = $_SESSION['currentuser'];
?>

<?php
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
    }
    $id = $_GET['id'];
    if(isset($_POST['submit1']))
    {   
        $query = mysql_query("SELECT * FROM Event WHERE Ev_id = '$id'");
        $row = mysql_fetch_array($query);
        $Sub_id = $row['Sub_id'];
        $query1=mysql_query("SELECT DISTINCT User_id FROM Interested_in WHERE Sub_id='$Sub_id'");
        $qe=mysql_query("SELECT * FROM Subcategory WHERE Sub_id='$Sub_id'");
        $tup=mysql_fetch_array($qe);
        $Sname=$tup['Sub_name'];
        while($row=mysql_fetch_array($query1))
        {
            $uid=$row['User_id'];
            $query2=mysql_query("SELECT * FROM User WHERE User_id='$uid'");
            $row1 = mysql_fetch_array($query2);
            $uname=$row1['User_username'];
            $uemail=$row1['User_email'];
            $fname=$row1['User_fname'];
            $lname=$row1['User_lname'];
            require_once("PHPMailer_5.2.4/class.phpmailer.php");
            $mail = new PHPMailer(); // create a new object
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465; // or 587
            $mail->IsHTML(true);
            $mail->Username = "eventcompass22@gmail.com";
            $mail->Password = "eventcom22";
            $mail->SetFrom("eventcompass22@gmail.com");
            $mail->Subject = "New Event Posted";
            $mail->Body = "Hello Mr.$fname $lname.<br>A new event of '$Sname' has been posted which you are following.<br><br> Here is the event link : http://eventcompass.orgfree.com/event_page.php?user=$uname&id=$id <br><br> Register for the event to receive further notifications from <b>EVENT COMPASS</b>.";
            $mail->AddAddress($uemail);
            if(!$mail->Send())
            {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
            else
            {
                //echo "Message has been sent";
            }
        }
            require_once("PHPMailer_5.2.4/class.phpmailer.php");
            $mail = new PHPMailer(); // create a new object
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465; // or 587
            $mail->IsHTML(true);
            $mail->Username = "eventcompass22@gmail.com";
            $mail->Password = "eventcom22";
            $mail->SetFrom("eventcompass22@gmail.com");
            $mail->Subject = "New Event Posted";
            $mail->Body = "Hello Mr.$fname $lname.<br>A new event of '$Sname' has been posted which you are following.<br><br> Here is the event link : http://eventcompass.orgfree.com/event_page.php?user=$uname&id=$id <br><br> Register for the event to receive further notifications from <b>EVENT COMPASS</b>.";
            $qq=mysql_query("SELECT * FROM User WHERE User_username='admin'");
            $rr=mysql_fetch_array($qq);
            $mail->AddAddress($rr['User_email']);
            if(!$mail->Send())
            {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
            else
            {
                //echo "Message has been sent";
            }

        redirect_to("event_page.php?user=$username&id=$id");
    }
    elseif (isset($_POST['submit']))
    {
        //echo $id;
        $uploadDir = 'img/';
        //chmod("img/",0600);
        $image_name = $_FILES['image']['name'];
        $image_type = $_FILES['image']['type'];
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];   
        $ext = pathinfo($image_name, PATHINFO_EXTENSION);
        //echo $ext;
        //echo type($ext);
        if($ext == "pdf")
        {
            $filePath = $uploadDir . $id . '.pdf';
        }
        if($ext == "PDF")
        {
            $filePath = $uploadDir . $id . '.PDF';
        }
        $result = move_uploaded_file($image_tmp_name, $filePath);
        if (!$result) 
        {
            echo "Error uploading file";
            exit;
        }
        
        $query = mysql_query("UPDATE Event SET Ev_mou = '$filePath' WHERE Ev_id = '$id'"); 
        if(!$query)
        {
            echo mysql_error();
        }




        $query = mysql_query("SELECT * FROM Event WHERE Ev_id = '$id'");
        $row = mysql_fetch_array($query);
        $Sub_id = $row['Sub_id'];
        $query1=mysql_query("SELECT DISTINCT User_id FROM Interested_in WHERE Sub_id='$Sub_id'");
        $qe=mysql_query("SELECT * FROM Subcategory WHERE Sub_id='$Sub_id'");
        $tup=mysql_fetch_array($qe);
        $Sname=$tup['Sub_name'];
        while($row=mysql_fetch_array($query1))
        {
            $uid=$row['User_id'];
            $query2=mysql_query("SELECT * FROM User WHERE User_id='$uid'");
            $row1 = mysql_fetch_array($query2);
            $uname=$row1['User_username'];
            $uemail=$row1['User_email'];
            $fname=$row1['User_fname'];
            $lname=$row1['User_lname'];
            require_once("PHPMailer_5.2.4/class.phpmailer.php");
            $mail = new PHPMailer(); // create a new object
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465; // or 587
            $mail->IsHTML(true);
            $mail->Username = "eventcompass22@gmail.com";
            $mail->Password = "eventcom22";
            $mail->SetFrom("eventcompass22@gmail.com");
            $mail->Subject = "New Event Posted";
            $mail->Body = "Hello Admin,<br>A new event of '$Sname' has been posted just now.<br><br> Here is the event link : http://eventcompass.orgfree.com/event_page.php?user=$uname&id=$id <br><br>";

            $mail->AddAddress($uemail);
            if(!$mail->Send())
            {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
            else
            {
                //echo "Message has been sent";
            }
        }
        redirect_to("event_page.php?user=$username&id=$id");
    }
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center"><font face="Montserrat">Event Form</font></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h1><font face="Tangerine">Upload MOU document for your event(.pdf format)</font></h1>
                </div>
                <div class="panel-body">
                    <div class="row col-md-offset-1">
                        <div class="col-lg-12">
                            <form enctype="multipart/form-data" role="form" method="post" action="event_form3.php?user=<?php echo $username;?>&id=<?php echo $id; ?>">
                                <div class="form-group">
                                    <label><h3><font face="Montserrat">MOU</font></h3></label>
                                    <input type="file" name="image">          
                                    <br>
                                    <button type="submit" class="btn btn-primary" name="submit" value="submit"><font face="Montserrat">Proceed to next step</font></button>
                                    <button type="submit" class="btn btn-link" name="submit1" value="submit1"><font face="Montserrat">Skip</font></button>
                                </div>
                            </form>
                        </div>
                        <!-- /.col-lg-12 (nested) -->
                    </div>  
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/sb-admin-2.js"></script>

<?php require_once("includes/footer.php") ?>