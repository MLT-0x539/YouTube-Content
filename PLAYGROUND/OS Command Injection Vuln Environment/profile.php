<?php
session_start();
error_reporting(0);
require_once(
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title> User Profile </title>
</head>
  <body>
      <body>
    <a href="admin_login.php"> LOGIN TO ADMINCP </a>
   <br />
    <a href="user_logout.php"> LOG OUT OF ACCOUNT </a>
   <br />
    <a href="UserCP.php"> RETURN TO USER CONTROL PANEL </a>
   <br />
    <a href="user_profile.php"> RETURN TO USER PROFILE </a>
   <br />  
    <a href="reset.php"> RESET TO ALL DEFAULT VALUES </a>
   <br />  

  <center>
    <h1><b><u> User Profile: </u></b></h1>
  </center>
  <hr>
  <textarea id="profile-desc" name="profile-desc" rows="10" cols="50">
   <?pnp echo $output_desc; ?>
  </textarea>
  </body>
  
</html>
