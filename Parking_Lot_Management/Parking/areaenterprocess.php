<?php 
	$con=mysqli_connect("localhost","root","1111","Parking_System");

	if(isset($_POST['park_btn'])){

			session_start();
    		$username=$_SESSION['username'];
			$areaname=mysqli_real_escape_string($con,$_POST["area"]);

	}
		//$pword1=md5($pword1);
		if($_SESSION['flag']=="1")
		{
		$result=mysqli_query($con,"select * FROM `customer` where `Area_Name`='$areaname' order by `Slot_Id` desc limit 1");
		$row=$result->fetch_assoc();
		$slot=(int)$row['Slot_Id'];
		$vnumber=$row['Vehicle_No'];

		$result2=mysqli_query($con,"select `Vehicle_Type` FROM `customer` where UID='$username'");
		$result_max=mysqli_query($con,"select `Max_Slots` FROM `area` where Area_Name='$areaname'");
		$row_max=$result_max->fetch_assoc();

		$resultname=mysqli_query($con,"select * FROM `customer` where UID='$username'");
		$rowname=$resultname->fetch_assoc();
		$firstname=$rowname['First_Name'];
		$lastname=$rowname['Last_Name'];

		$max_slots=(int)$row_max['Max_Slots'];
		$row2=$result2->fetch_assoc();
		$vtype=$row['Vehicle_Type'];

		$slot=$slot+1;
		if($slot>$max_slots)
		{
		for($i=11;$i <=$max_slots;$i+=1)
		{
			$result4=mysqli_query($con,"select * from `customer` where `Slot_Id`='$i' and `Area_Name`='$areaname'");
			if($result4->num_rows == 0)
				{$slot=$i;
				break;
			}
		}
		}

		echo (string)$slot;

		if($slot<=$max_slots)
		{
		$sql="UPDATE `customer` SET `Area_Name`='$areaname',`Parking_Status`=1,`Slot_Id`='$slot' WHERE UID='$username'";
		mysqli_query($con,$sql);

		$resultx=mysqli_query($con,"select `No_Of_Lots` FROM `area` where `Area_Name`='$areaname'");
		$rowx=$resultx->fetch_assoc();
		$slotno=(int)$rowx['No_Of_Lots'];
		$slotno=$slotno-1;

		$sql="UPDATE `area` SET `No_of_Lots`='$slotno' WHERE `Area_Name`='$areaname'";
		mysqli_query($con,$sql);
		
		$sql="UPDATE `parking_slot` SET `Occupancy`=1,`Parking_Type`='$vtype' WHERE `Area_Name`='$areaname' and `Number`='$slot' ";
		mysqli_query($con,$sql);

		if($slotno==0)
		{
			$sql="UPDATE `area` SET `Occupancy`=0 WHERE `Area_Name`='$areaname' ";
			mysqli_query($con,$sql);
		}

		$entry_time=date("h:i:sa");
		$entrydate=date("m.d.y");  


		$sql="INSERT INTO `parking_slip` (`UID`, `Area_Name`,`Slot_Id`, `Parking_Time`, `Parking_Date`, `First_Name`, `Last_Name` ) VALUES ('$username', '$areaname','$slot', '$entry_time', '$entrydate','$firstname', '$lastname');";
		mysqli_query($con,$sql);
		$pay_unit=30.0;
		
		$resultfee=mysqli_query($con,"select `Sr_No` FROM `parking_fee` order by `Sr_No` desc limit 1");
		$rowfee=$resultfee->fetch_assoc();
		$srno=(int)$rowfee['Sr_No'];
		$srno=$srno+1;

		$s="INSERT INTO `parking_fee` (`UID`, `Entry_Time`, `Leaving_Time`, `Entry_Date`,`Parking_Charge`, `First_Name`, `Last_Name`,`Sr_No` ) VALUES ('$username', '$entry_time','','$entrydate','$pay_unit','$firstname', '$lastname','$srno');";
		mysqli_query($con,$s);

		$_SESSION['username']=$username;
		header("location:http://localhost/Parking_Lot_Management/Slip/slippage.php");


	}
}
	else
		header("location:http://localhost/Parking_Lot_Management/trial2.php");
		
 ?>