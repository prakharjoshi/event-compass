<?php require_once("includes/base_main_settings.php") ?>
<?php require_once("backend/ifnotlogin.php") ?>
<?php $username1 = $_GET['user']; ?>
<?php
    $q=mysql_query("SELECT * FROM User WHERE User_username='$username1'");
    $userid=mysql_result($q,0,'User_id');
    $fname=mysql_result($q,0,'User_fname');
    $lname=mysql_result($q,0,'User_lname');
    $email=mysql_result($q,0,'User_email');
    $address=mysql_result($q,0,'User_address');
    $phone=mysql_result($q,0,'User_phone');
    $query_run=mysql_query("SELECT * FROM Interested_in WHERE User_id='$userid'");
    if(!$query_run)
    {
        echo mysql_error();
    }

    /*while ($row = mysql_fetch_array($query_run)) 
    {
        echo $row['Sub_id'];
    }*/
?>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/fixed_sidebar.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

<div id="main" class="row">
    <div class="container">
        <div class="row">
            <div class="col-lg-11">
                <h1 class="page-header text-center">Profile Settings</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
                </br>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad" >
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $username1; ?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class=" col-md-12 col-lg-12 "> 
                                <table class="table table-user-information">
                                    <tbody>
                                        <tr>
                                            <td>First Name:</td>
                                            <td><?php echo $fname; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Last Name:</td>
                                            <td><?php echo $lname; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></td>
                                        </tr>      
                                        <tr>
                                            <td>Address</td>
                                            <td><?php echo $address; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number</td>
                                             <td><?php echo $phone; ?></td>     
                                            </tr>
                                        <tr>
                                            <td>Interests:</td>
                                            <td>
                                                <?php
                                                    while ($row = mysql_fetch_array($query_run)) 
                                                    {
                                                        $ide = $row['Sub_id'];
                                                        $query_run2 = mysql_query("SELECT * FROM Subcategory WHERE Sub_id = $ide");
                                                        $row2 = mysql_fetch_array($query_run2);
                                                        $cat = $row2['Cat_id'];
                                                        $query_run3 = mysql_query("SELECT * FROM Category WHERE Cat_id = $cat");
                                                        $row3 = mysql_fetch_array($query_run3);
                                                        echo $row2['Sub_name'] ."(".$row3['Cat_name'] . ")" . ", &nbsp;";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <?php 
                                    if($username==$username1)
                                    { 
                                ?>
                                <a href="user_profile_edit.php?user=<?php echo $username;?>" class="btn btn-primary col-md-offset-6"><i class="glyphicon glyphicon-edit"></i> Edit Profile</a>
                                <?php 
                                    } 
                                ?> 
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->    
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#main -->

<script src="/js/fixed_sidebar.js"></script>
  