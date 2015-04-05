<?php require_once("includes/base_main_settings.php") ?>

<link href="/css/fixed_sidebar.css" rel="stylesheet">

<div id="main">
  <div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           </br>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">User Name</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                
                <div class=" col-md-12 col-lg-12 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>First Name:</td>
                        <td>User.fname</td>
                      </tr>
                      <tr>
                        <td>Last Name:</td>
                        <td>User.lname</td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><a href="mailto:info@support.com">User.email</a></td>
                      </tr>      
                      <tr>
                        <td>Address</td>
                        <td>User.address</td>
                      </tr>
                      <td>Phone Number</td>
                        <td>User.Phone_number
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="user_profile_edit.php" class="btn btn-primary col-md-offset-6"><i class="glyphicon glyphicon-edit"></i> Edit Profile</a>
                </div>
              </div>
            </div>          
          </div>
        </div>
      </div>
    </div>
</div>
<script src="/js/fixed_sidebar.js"></script>
  