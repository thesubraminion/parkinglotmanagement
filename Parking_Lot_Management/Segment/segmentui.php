<?php
  session_start();
 	$flag="0";
	$_SESSION['flag']="0";
  if($_SESSION['flag']=="0")
  {
 
  }
  else
    header("location:http://localhost/Parking_Lot_Management/trial2.php");  
?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin Login page</title>
	<link rel="stylesheet" type="text/css" href="draft2.css">
</head>
<body>

	<div id="frm">
		<form action="segprocess.php" method="POST">
			<p>
				<label>Admin Email ID:</label>
				<input type="text" id="user1" name="user1">
			</p>
			<p>
				<label>Password:</label>
				<input type="password" id="pass1" name="pass1">
			</p>		
			<p>
				
				<input type="submit" id="btn" name="Login">
			</p>	
		</form>
	</div>	
</body>
</html>