<?php
	session_start();
	$con=mysqli_connect("localhost","root","1111","Parking_System");

	$username=$_SESSION['username'];
	if($_SESSION['flag']=="1")
	{
	$resultx=mysqli_query($con,"select * FROM `customer` where `UID`='$username'");
	$rowx=$resultx->fetch_assoc();
	$areaname=$rowx['Area_Name'];
	$slot=$rowx['Slot_Id'];

	$sql="UPDATE `customer` SET `Area_Name`='',`Parking_Status`=0,`Slot_Id`=0 WHERE UID='$username'";
	mysqli_query($con,$sql);

	$resultx=mysqli_query($con,"select `No_Of_Lots` FROM `area` where `Area_Name`='$areaname'");
	$rowx=$resultx->fetch_assoc();
	$slotno=(int)$rowx['No_Of_Lots'];

	$slotno=$slotno+1;

	$sql="UPDATE `area` SET `No_of_Lots`='$slotno' WHERE `Area_Name`='$areaname'";
	mysqli_query($con,$sql);

	$sql="UPDATE `parking_slot` SET `Occupancy`=0,`Parking_Type`='N' WHERE `Area_Name`='$areaname' and `Number`='$slot' ";
	mysqli_query($con,$sql);

	$leavingtime=date("h:i:sa");

	$sql="UPDATE `parking_fee` SET `Leaving_Time`='$leavingtime' WHERE `UID`='$username' and `UID`='$username' order by `Sr_No` desc limit 1";
	mysqli_query($con,$sql);

	$sql2="select Entry_time from parking_fee where UID='$username'";
	$result=mysqli_query($con,$sql2);
	$row=$result->fetch_assoc();
	$entrytime=$row['Entry_time'];

	$entrytime=substr($entrytime,0,2);
	$leavingtime=substr($leavingtime,0,2);

	
	$interval = (int)$entrytime-(int)$leavingtime;
	$interval=30.0*$interval;
	$interval=30.25+$interval;
	$interval=0.85*$interval;

	$_SESSION['username']=$username;

	mysqli_query($con,"UPDATE `parking_fee` SET `Parking_Charge`='$interval' WHERE `UID`='$username' and `Leaving_Time`='$leavingtime'");
	header("location:http://localhost/Parking_Lot_Management/Bill/payment.php");

	}

	else
	header("location:http://localhost/Parking_Lot_Management/trial2.php");	
	
		 ?>	}
