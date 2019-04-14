<?php
	session_start();
	if($_SESSION['flag']=="0")
	{
		

		$query=$_POST['query'];
	$con=mysqli_connect("localhost","root","1111","Parking_System");

	$result=mysqli_query($con,$query) or die("Failed to execute query".mysqli_error($con));
	$row= mysqli_fetch_array($result);
	$str = implode(',', $row);
	echo $str;

	}

	header("location:http://localhost/Parking_Lot_Management/trial2.php");
		 ?>