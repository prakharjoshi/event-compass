<?php require_once("base.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
<?php
  $username = $_SESSION['currentuser'];
?>
<link href="../css/fixed_sidebar.css" rel="stylesheet">

<div class="row-offcanvas row-offcanvas-left">
  <div id="sidebar" class="sidebar-offcanvas">
      <div class="col-md-12">
        <h3>Options</h3>
        <ul class="nav nav-pills nav-stacked">
          <li><a href="/profile_settings_form.php?user=<?php echo $username; ?>">Profile Settings</a></li>
          <li><a href="interest_settings_form.php?user=<?php echo $username; ?>">Interest Settings</a></li>
          <li><a href="/notification_settings_form.php?user=<?php echo $username; ?>">Notification Settings</a></li>
        </ul>
      </div>
  </div>   

<script src="../js/fixed_sidebar.js"></script>