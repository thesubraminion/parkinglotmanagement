<?php
	session_start();	
	$con=mysqli_connect("localhost","root","1111","Parking_System");
	$rating=mysqli_real_escape_string($con,$_POST["rating"]);
	
	$username=$_SESSION['username'];
	//$rating='4';
	$sql="INSERT INTO `ratings` (`UID`,`Rating`) VALUES ('$username','$rating')";
	$result=mysqli_query($con,$sql);
	session_destroy();
	header("location:http://localhost/Parking_Lot_Management/Login/loginpage.php");
		 ?>

		 