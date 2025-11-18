<!DOCTYPE html>
<html>

 <?php
  session_start();
  error_reporting(0);
 ?>

 <head>
   <meta charset="UTF-8">
   <title> Command Injection - UserCP </title>
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
    <h1><u>Web User Control Panel:</u></h1>
  </center>

  <p>
	This is a basic user control panel (for the sake of a Command Injection demo...
	<br />
	Via this User Control Pabel, we have the ability to download and install specific files to teh server
	<br />
	in order to download and install a file, we simply select the file that we want to install via a drop-down menu.
	<br />
	<br />
	Once we have selected the file of our choice from the drop-down menu, we click "Submit"
	<br />
	when the "Submit" button has been clicked, it will automatically attempt to download and install the file.
	<br />
	For downloading and installation, it takes the file that we have selected from teh drop-down menu and assigns
	<br />
	it to a variable within PHP.. the value of this variable is then passed into a system call.
	<br />
	Specifically, it passes the variable containing the name of the file we chose into a "wget" command within a system call, like so:
	<br />
	<font color="red"><b>system("wget -o " . $filename);</b></font>
	<br />
	<br />
  </p>
  <hr>
  <h6><b><u>Select the file you wish to download and install from the drop-down menu below:</u></b></h6>
  <form action="UserCP.php">
     <label for="filename">Choose a program:</label>
     <select id="filename" name="filename">
      <option value="chrome">Google Chrome</option>
      <option value="visual-studio">Microsoft Visual Studio</option>
      <option value="jre">Java Runtime Environment</option>
      <option value="edge">Microsoft Edge</option>
	  <option value="firefox">Mozilla Firefox</option>
	  <option value="brave">Brave Browser</option>
	  <option value="teamviewer">TeamViewer</option>
	  <option value="norton">Norton AntiVirus</option>
     </select>
   <input type="submit">
  </form>

	  <?php

       $filename = $_POST['filename'];
	  
	   if (!empty($_POST['filename']) && if (isset($filename))) {
	   	$dl = system("wget -o ".$filename);
	   	echo "<p><b>File Download Successful... installing now";
	    system("./".$filename);
	    }
		
	   else if (empty($_POST['filename']) && if (!isset($filename))) {
	    echo "<p><b><u>ERROR:</u> No filename supplied as input!</b></p>";
	    }
		
	   else {
	    echp "<p><b><u>ERROR: Invalid user input selected, or some other error took place. Please try again!</u></b></p>";
	    }
		
	  ?>

	<hr>
	<br />
	<h6><b><u>Change User Account Settings:</u></b></h6>
	<hr>
	<a href="change_pass.php"> CHANGE USER ACCOUNT PASSWORD< </a>
	<br />
	<a href="change_pic.php"> CHANGE PROFILE PICTURE </a>
	<br />
	<a href="change_description.php"> CHANGE PROFILE DESCRIPTION </a>
	<br />
	<br />
	<hr>
	<br />

 </body>
</html>
