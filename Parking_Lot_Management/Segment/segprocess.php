<?php
	session_start();
	$flag="0";
	$_SESSION['flag']="0";
	if($_SESSION['flag']=="0")
	{
	$username=$_POST['user1'];
	$password=$_POST['pass1'];

	$username=stripcslashes($username);
	$password=stripcslashes($password);
	$con=mysqli_connect("localhost","root","1111","Parking_System");
	$username=mysqli_real_escape_string($con,$username);
	$password=mysqli_real_escape_string($con,$password);

	$_SESSION['username']=$username;

	$result=mysqli_query($con,"select * from admin where UID = '$username' and Password = '$password'") or die("Failed to execute query".mysqli_error($con));
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if($row['UID']==$username && $row['Password']==$password){
		header("location:http://localhost/Parking_Lot_Management/Segment/adminqueryui.php");
	}
	else
		header("location:http://localhost/Parking_Lot_Management/Segment/segmentui.php");

}
else
header("location:http://localhost/Parking_Lot_Management/trial2.php");
		 ?>