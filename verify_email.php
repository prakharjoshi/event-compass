<?php require_once("includes/base_main_settings.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("backend/ifnotlogin.php") ?>
<?php $username = $_SESSION['currentuser']?>
<?php

    function randomtoken() {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
    $q=mysql_query("SELECT * FROM User WHERE User_username='$username'");
    $userid=mysql_result($q,0,'User_id');
    $fname=mysql_result($q,0,'User_fname');
    $lname=mysql_result($q,0,'User_lname');
    $email=mysql_result($q,0,'User_email');
    $address=mysql_result($q,0,'User_address');
    $phone=mysql_result($q,0,'User_phone');
    $token=mysql_result($q,0,'User_token');



    if($token!=1)
        {
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
            $mail->Subject = "Verify your eventcompass email id";
            $mail->Body = "Here is your verification token :<br><br>
                            '$token'.
                            ";
            $mail->AddAddress($email);
            if(!$mail->Send())
            {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
            else
            {
                //echo "Message has been sent";
            }
        }
?>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/fixed_sidebar.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">


<?php
if($token==1)
{
    echo "Email successfully verified.";
}
?>
<div id="main">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-center"><font face="Tangerine">Email verification</font></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="verify_email.php?user=<?php echo $username;?>" method="post">
                                    <div class="form-group">
                                      <label> <font face="Montserrat">Enter the verification code sent to your mail </font>(This may take few minutes):</label>
                                        <input type="text" id="token" class="form-control" name="token" />
                                    </div>
                                    <button type="submit" class="btn btn-danger" name="submit"><font face="Montserrat">Resend token</font></button>
                                    <button type="submit" class="btn btn-success" name="resend"><font face="Montserrat">Verify token</font></button>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            <div class="col-lg-12">
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
            <?php
                if(isset($POST['submit']))
                {
                    if($_POST['token']==$token)
                    {
                        mysql_query("UPDATE User SET User_token=1 WHERE User_username='$username'");

                    }
                }
                else if(isset($POST['resend']))
                {
                    $random_token=randomtoken();
                    mysql_query("UPDATE User SET User_token='$radom_token' WHERE User_username='$username'");
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
            $mail->Subject = "Verify your eventcompass email id";
            $mail->Body = "Here is your verification token :<br><br>
                            '$random_token'.
                            ";
            $mail->AddAddress($email);
            if(!$mail->Send())
            {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
            else
            {
                //echo "Message has been sent";
            }
                }
            ?>
        </div>
        <!-- /.row -->


    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#main -->

<?php require_once("includes/footer.php") ?>

