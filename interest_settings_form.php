<?php require_once("includes/base_main_settings.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("backend/ifnotlogin.php") ?>
<?php
    $username = $_SESSION['currentuser'];
?>

<?php require_once("backend/interest_settings_form_backend.php") ?>
<?php
$r=mysql_fetch_array(mysql_query("SELECT * FROM User WHERE User_username='$username'"));
$User_id=$r['User_id'];
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/fixed_sidebar.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

<div id="main" class="row">
    <div class="row">
        <div class="col-lg-11">
            <h1 class="page-header text-center"><font face="Tangerine">Interest Settings</font></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <form role="form" action="interest_settings_form.php?user=<?php echo $username;?>" method="post">
        <div class="col-md-12">
            <div class="well-lg panel panel-default" id="toggable_box">
                <div class="panel-body">
                    <!--    <p> here comes the navigation bar</p> -->
                    <div role="tabpanel">
                        <!-- Nav tabs -->
                        <div class="col-md-9 col-sm-6 col-xs-9 personal-info">
                            <?php
                                
                                $q_cat=mysql_query("SELECT * FROM Category");

                                for($i = 0; $i < mysql_num_rows($q_cat); $i++)
                                {
                                    $Cat_name=mysql_result($q_cat,$i,'Cat_name');
                                    $Cat_id=mysql_result($q_cat,$i,'Cat_id');
                            ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseP<?php echo $i+1 ?>"><font face="Montserrat"><?php echo $Cat_name ?></font></a>
                                    </h4>
                                </div>
                                <div id="collapseP<?php echo $i+1 ?>" class="panel-collapse collapse out">
                                    <div class="panel-body">
                                        <?php
                                            $q=mysql_query("SELECT * FROM Subcategory WHERE Cat_id='$Cat_id'");

                                            for($j = 0; $j < mysql_num_rows($q); $j++)
                                            {
                                                $Sub_Cat_name=mysql_result($q,$j,'Sub_name');
                                                $Sub_Cat_id=mysql_result($q,$j,'Sub_id');

                                        ?>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" name="<?php echo $Sub_Cat_id; ?>" 
                                                <?php
                                                $qw=mysql_query("SELECT * FROM Interested_in WHERE User_id='$User_id' AND Sub_id='$Sub_Cat_id'");
                                                if(mysql_num_rows($qw)>0)
                                                {
                                                    echo 'checked';
                                                }

                                                ?>
                                                ><font face="Montserrat"><?php echo $Sub_Cat_name; ?></font>
                                            </label>
                                        </div>
                                        <?php 
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                } 
                            ?>
                            <button type="submit" class="btn btn-primary" name="submit" value="submit"><font face="Montserrat">Submit</font></button>
                            <?php 
                                if("$username"=='admin')
                                { 
                            ?>
                            <form action="admin.php?user=<?php echo $username; ?>" method="post">
                                <a href="admin.php?user=<?php echo $username; ?>"><font face="Montserrat">Add category</font></button>
                            </form>
                            <?php 
                                } 
                            ?>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.tabpanel -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col -->
    </form>
</div>
<!-- /#main -->

<?php require_once("includes/footer.php") ?>
