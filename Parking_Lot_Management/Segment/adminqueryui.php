<?php
  session_start();
 
  if($_SESSION['flag']=="0")
  {
 
  }
  else
    header("location:http://localhost/Parking_Lot_Management/trial2.php");  
?>



<!DOCTYPE html>
<html>
<head>
	<title>Query page</title>
	<link rel="stylesheet" type="text/css" href="draft3.css">
</head>
<body>

	<div id="frm">
		<form action="adminonlyquery.php" method="POST">
			<p>
				<input type="submit" id="btn" name="Query" value="Query">
			</p>	
		</form>
		<form action="alltables.php" method="POST">
			<p>
			<input type="submit" type="submit" name="register_btn" value="View data" >
		</p>
		</form>
		<form action="../Logout/logoutpage.php" method="POST">
					<p>
			<input type="submit" type="submit" name="logout_btn" value="Logout" >
		</p>
		</form>
		
	</div>	
</body>
</html>