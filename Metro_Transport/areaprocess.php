<?php 
	$con=mysqli_connect("localhost","root","1111","metro");
	if(isset($_POST['park_btn'])){

			session_start();
    		$source=mysqli_real_escape_string($con,$_POST["starting"]);
    		$destination=mysqli_real_escape_string($con,$_POST["destination"]);

	}
		//$pword1=md5($pword1);

		$result=mysqli_query($con,"select `station_id` FROM `stations` where `name`='$source'");
		$result2=mysqli_query($con,"select `station_id` FROM `stations` where `name`='$destination'");
		$row=$result->fetch_assoc();
		$row2=$result2->fetch_assoc();
		$sourceID=$row['station_id'];
		$destinationID=$row2['station_id'];

		echo $sourceID;

		$sin=substr($sourceID,0,2);
		$din=substr($destinationID,0,2);

		$msg="";

		if($sin == $din)
		{
			if($sin == 'PP')
				$msg='purple Line';
			else
				$msg='green Line';
		}
		else
		{
			if($sin == 'PP')
				$msg='Change from Purple line to green line';
			else
				$msg='Change from green to purple line';

		}


		$result3=mysqli_query($con,"select `arr_time` FROM `stops` where `station`='$sourceID'");
		$row3=$result3->fetch_assoc();
		$train_time1=$row3['arr_time'];
		
		//$train_time2=$row3['arr_time'];
		echo $train_time1;
		
		
		$result4=mysqli_query($con,"select * FROM `trains` where `line`='$sin'");

		$arr=array();
		$ctr=0;
		while($row4=mysqli_fetch_array($result4))
		{
		
		$arr[$ctr]=$row4[0];
		$ctr=$ctr+1;
		$arr[$ctr]=$row4[1];
		$ctr=$ctr+1;
		$arr[$ctr]=$row4[2];
		$ctr=$ctr+1;
		$arr[$ctr]=$row4[3];
		$ctr=$ctr+1;
	}


	$_SESSION['array']=$arr;
	$_SESSION['time']=$train_time1;

	header("location:http://localhost/Metro_Transport/second.php")
// 		$arr[$ctr]=$row4['starts_at'];
// 		$ctr+=1;
// 		}

// 		echo (string)$arr;
		

// 		$endsat1=$row4['ends_at'][0];
// 		$endsat2=$row4['ends_at'][1];

// 		echo $endsat1;
// 		echo  $endsat2;

// 		$id1=$row4['ID'][0];
// 		$id2=$row4['ID'][1];


// 		echo $id1;
// 		echo $id2;






 ?>


<!-- 	/*	$resultname=mysqli_query($con,"select * FROM `customer` where UID='$username'");
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
+
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

		else
		{
		echo "Sorry!! Parking in $areaname is full";

		}


		*/
		
 -->