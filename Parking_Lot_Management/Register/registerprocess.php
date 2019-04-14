<?php 

	session_start();
	$con=mysqli_connect("localhost","root","1111","Parking_System");

	if(isset($_POST['register_btn'])){

		session_start();
		$fname=mysqli_real_escape_string($con,$_POST["fname"]);
		$lname=mysqli_real_escape_string($con,$_POST["lname"]);
		$mobile=mysqli_real_escape_string($con,$_POST["mobileno"]);
		$uid=mysqli_real_escape_string($con,$_POST["email"]);
		$pword1=mysqli_real_escape_string($con,$_POST["Password"]);
		$pword2=mysqli_real_escape_string($con,$_POST["Password2"]);
		$vname=mysqli_real_escape_string($con,$_POST["vname"]);
		$vtype=mysqli_real_escape_string($con,$_POST["vtype"]);
		$vnumber=mysqli_real_escape_string($con,$_POST["vnumber"]);

	}

/*
	function validate_email($email)
	{
		return preg_match("^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]    {2,6}$", $email);
	}

	function validate_mobile($mobile)
	{
    return preg_match('/^[0-9]{10}+$/', $mobile);
	}*/


	if(empty($fname) || empty($lname) ||empty($mobile) || empty($uid) || empty($pword1)|| empty($vname) || empty($vtype) || empty($vnumber))
	{
		$_SESSION["error"]="Error!!Blank Data Not Accepted";
		header("location:http://localhost/Parking_Lot_Management/Register/registerpage.php");
	}
	


	if($pword1 == $pword2 && ($vtype=='2' ||$vtype=='4') &&  strlen($mobile)>=9 && strlen($mobile)<=14 && ctype_digit($mobile)  /*&& preg_match('/[^A-Za-z0-9]/', $vnumber) */&& ctype_alpha($fname) && ctype_alpha($lname) && ctype_alnum($vnumber))
	{
		$pword1=md5($pword1);
		$sql="INSERT INTO `customer` (`UID`, `First_Name`, `Last_Name`, `Mobile_No`, `Password`, `Vehicle_Type`, `Vehicle_No`, `Vehicle_Name`, `Area_Name`, `Parking_Status`, `Slot_Id`) VALUES ('$uid', '$fname', '$lname', '$mobile', '$pword1', '$vtype', '$vnumber', '$vname', '', '0', '0');";
		mysqli_query($con,$sql) or die("Client listed in database");

		header("location:http://localhost/Parking_Lot_Management/Login/loginpage.php");
	}

	elseif(strcmp($pword2,$pword1)!=0)
	{
		$_SESSION["error"]="Error!! Passwords Do Not match";
		header("location:http://localhost/Parking_Lot_Management/Register/registerpage.php");
	}

	elseif(is_numeric($mobile)==false || strlen($mobile)<=9)
	{
		$_SESSION["error"]="Error!! Invalid Mobile Number Entered";
		header("location:http://localhost/Parking_Lot_Management/Register/registerpage.php");
	}


	elseif (!preg_match('/[^A-Za-z0-9]/', $fname)) 
		{
		$_SESSION["error"]="Error!! Invalid Name Entered";
		header("location:http://localhost/Parking_Lot_Management/Register/registerpage.php");
	}
		elseif (!preg_match('/[^A-Za-z0-9]/', $lname)) 
		{
		$_SESSION["error"]="Error!! Invalid Name Entered";
		header("location:http://localhost/Parking_Lot_Management/Register/registerpage.php");
	}

	else
		header("location:http://localhost/Parking_Lot_Management/Register/registerpage.php");
 ?>