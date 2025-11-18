<!DOCTYPE html>
<html>

 <?php
  session_start();
  error_reporting(0);
 ?>

 <head>
   <meta charset="UTF-8">
   <title> Change Profile Description </title>
 </head>

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
    <h1><b><u>Page to change your user profile dsecription:</u></b></h1>
   </center>
  <hr>
  <br />
  <br />

<?php
$new_desc = $_POST['profile-desc'];
$_SESSION['new_desc'] = $new_desc;
?>

<!-- BONUS: Blind XSS can be demonstrated via this input -->
  <form action="user_profile.php">
    <p><label for="profile-desc">Change user profile description here:</label></p>
    <textarea id="profile-desc" name="profile-desc" rows="4" cols="50">UPDATE THE CONTENTS OF THIS FORM IF YOU WANT TO CHANGE YOUR PROFILE DESCRIPTION</textarea>
   <br>
    <input type="submit" value="Submit">
  </form>
  <br />

 </body>
</html>
