<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>

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
?>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/login.css" rel="stylesheet">

<body>
    <div class="collapse navbar-collapse navbar-left navbar-main-collapse">
      <ul class="nav navbar-nav">
            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
            <li>
                <!--<img src="image/logo.jpg" width="120px" height="120px"> -->
          </li>
        </ul>
     </div>      
</body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading"><strong class="">Forgot password (A default password will be sent to your mail)</strong>

                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-9">
                                <input class="form-control" placeholder="Username" required="" name="username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input class="form-control" placeholder="Email" required="" name='email'>
                            </div>
                            
                            
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-primary btn" value="submit" name="submit" id="submit"> Get password </button>
                                    
                            </div>

                        </div>
                        
                    </form>

                </div>
                <?php
                if(isset($_POST['submit']))
                {
                	$username=$_POST['username'];
                	$email=$_POST['email'];
                	if(mysql_num_rows(mysql_query("SELECT * FROM User WHERE User_username='$username' AND User_email='$email'"))==0)

                	{?>

                		<script type="text/javascript">
        				alert("Invalid username,email combination!!");
  

						</script>
                	<?php } 
                		else
                		{
                			$random_token=randomtoken();
                    mysql_query("UPDATE User SET User_token='$random_token' WHERE User_username='$username'");
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
            $mail->Body = "Here is your default password :<br><br>
                            '$random_token'.<br>
                            Use this to login and then change password.
                            ";
            $mail->AddAddress($email);
            
                mysql_query("UPDATE User SET User_pass='$random_token' WHERE User_username='$username'");?>
                

			<?php
			redirect_to("login.php");
            
                		}
                	}
                	?>
                
            </div>
        </div>
    </div>
</div>
</div>