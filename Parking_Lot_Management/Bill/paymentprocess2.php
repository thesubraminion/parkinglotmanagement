<?php
	session_start();	
	$con=mysqli_connect("localhost","root","1111","Parking_System");
	$username=$_SESSION['username'];
	$_SESSION['username']=$username;
	mysqli_query($con,"INSERT INTO `payment` (`UID`,`Mode`) VALUES ('$username','Paytm Payment');");

	header("location:https://paytm.com/");
		 ?>