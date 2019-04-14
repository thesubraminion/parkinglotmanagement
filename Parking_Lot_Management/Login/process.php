<?php
	session_start();
	$username=$_POST['user'];
	$password=$_POST['pass'];

	$username=stripcslashes($username);
	$password=stripcslashes($password);
	$con=mysqli_connect("localhost","root","1111","Parking_System");
	$username=mysqli_real_escape_string($con,$username);
	$password=mysqli_real_escape_string($con,$password);

	$_SESSION['username']=$username;
	$password=md5($password);

	$result=mysqli_query($con,"select * from customer where UID = '$username' and Password = '$password'") or die("Failed to execute query".mysqli_error($con));
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if($row['UID']==$username && $row['Password']==$password){

		$flag="1";	
		$_SESSION['flag']=$flag;
		$result2=mysqli_query($con,"select Parking_Status from customer where UID = '$username'");
		$row2=$result2->fetch_assoc();
		$status=(int)$row2['Parking_Status'];
		if($status==0)
		{	
		
		header("location:http://localhost/Parking_Lot_Management/Parking/areaenter.php");
		}
		else
		header("location:http://localhost/Parking_Lot_Management/Leave/leaveui.php");	
	}
	else
		header("location:http://localhost/Parking_Lot_Management/Login/loginpage.php");
		 ?>