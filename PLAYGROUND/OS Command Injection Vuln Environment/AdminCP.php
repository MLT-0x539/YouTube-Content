<!DOCTYPE html>
<html>

 <?php
  session_start();
  error_reporting(0);
 ?>

 <head>
   <meta charset="UTF-8">
   <title> Command Injection - AdminCP </title>
 </head>
 
 <body>
  <a href="UserCP.php"> NAVIGATE TO USERCP </a>
  <center>
    <h1><u>Web Admin Panel:</u></h1>
  </center>
	<p>
	This is a basic administrative panel (for the sake of a Command Injection demo...
	<br />
	Within this panel, you will see some basic administrative functions. One will be a ping function
	<br />
	whereas the other will be a page that shows you which files the user attempted to download via the UserCP 
    <br />
    a regular user is not able to access or view the admin panel, however an admin can access and view both	
	<br />
	the admin panel and also the User Control Panel.
	<br />
	<br />
	The reason for this is so that I can demonstrate both a regular Command Injection vulnerability, as well
	<br />
	as being able to demonstrate a Blind/OOB Command Injection vulnerability which is triggered via the UserCP
	<br />
	but has its results outputted via the admin panel (so the user cannot see the resulst of the command that
	<br />
	they have chosen to execute.
	</p>
	<br />
	<br />
	
	<h5>Basic Adminstrative Functionality:</h5>
	<p><b>View history of which resources the user attempted to download:</b></p>
	<br />
	
 <?php
 if (!empty($_POST['dl']; && isset($_POST['dl'])) {
   $_SESSION['dl'] = $_POST['dl'];
   $user_download = $_SESSION['dl'];
   echo $user_download;
 }
 ?>
 
  <center>  
<table>
 <tbody>
 <hr>
   <tr><b><u>FILES WHICH THE USER HAS ATTEMPTED TO DOWNLOAD:</u></b></tr>
 </hr>
  <td>
  
  <!-- YUP, I KNOW USING <FONT> TAGS LIKE THIS FOR FORMATTING (AS OPPOSED TO CSS) IS ABSOLUTELY DISGUSTING...
       I SIMPLY DON'T CARE. THIS IS FOR DEMONSTATION PURPOSES ONLY -->
	   
   <font color="red" size="14"><b>|</b></font>
   <font color="green"><b><font color="red"> ></font>Chrome_Installer.exe<font color="red"><</font></b></font> 
   <b><font color="red" size="14">|</font></b>
  </td> 
  <td>
   <font color="green"><b><font color="red"> ></font>JRE_Setup.msi<font color="red"><</font></b></font> 
   <b><font color="red" size="14">|</font></b> 
  </td> 
    <td>
   <font color="green"><b><font color="red"> ></font>WinUpdate.bat<font color="red"><</font></b></font> 
   <b><font color="red" size="14">|</font></b> 
  </td> 
  <td>
   <font color="green"><b><font color="red"> ></font>discord.exe<font color="red"><</font></b>
   </font> <b><font color="red" size="14">|</font></b> 
  </td> 
</tr>
 </tbody>
</table>
 </center>
<br />
<br />

	<hr>
	<p><b>Check if a third-party website is online or not (via PING request):</b></p>
	<br />
	<hr>
	 <form action="AdminCP.php" method="POST">
       <input type="text" name=url-to-ping">
       <input type="submit">
     </form>

 <?php $url_to_ping = $_POST['url-to-ping']; ?>
 
 <?php if (!empty($_POST['url-to-ping'];) && isset($url_to_ping)): ?>
   <br />
   <p><b>Ping Results:</b></p><br />
 <?php endif; ?>

 <?php
  $ping_resultz = system(echo "Outputting results now: ; " "ping ".$url_to_ping);
  echo $ping_resultz;
 ?>
 
 </body>
</html>
