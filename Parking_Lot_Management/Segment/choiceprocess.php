<?php 
	$con=mysqli_connect("localhost","root","1111","Parking_System");
	if(isset($_POST['park_btn'])){

			session_start();
			$segment=mysqli_real_escape_string($con,$_POST["area"]);

	}

	//echo $username;
		//$pword1=md5($pword1);
		if($segment=='Customer')
			header("location:http://localhost/Parking_Lot_Management/Login/loginpage.php");
		else
			header("location:http://localhost/Parking_Lot_Management/Segment/segmentui.php");
	
	
 ?>