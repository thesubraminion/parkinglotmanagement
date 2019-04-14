


<?php
	session_start();

		$con=mysqli_connect("localhost","root","1111","Parking_System");
		$result1=mysqli_query($con,"select * from customer");
		$result2=mysqli_query($con,"select * from area");
		$result3=mysqli_query($con,"select * from parking_fee");
		$result4=mysqli_query($con,"select * from parking_slip");
		$result5=mysqli_query($con,"select * from parking_slot");
		$result6=mysqli_query($con,"select * from payment");
		$result7=mysqli_query($con,"select * from ratings");

		 ?>


<!DOCTYPE html>
<html>
<body>

<h1>ALL TABLES PRINTED</h1>

<p>
<h2>CUSTOMER TABLE</h2>	
<table>

<?php	

while($row = mysqli_fetch_row($result1))
{
    echo "<tr>";

    echo "<td>$row[0]</td>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[3]</td>";
    echo "<td>$row[4]</td>";
    echo "<td>$row[5]</td>";
    echo "<td>$row[6]</td>";
    echo "<td>$row[7]</td>";
    echo "<td>$row[8]</td>";
    echo "<td>$row[9]</td>";
    echo "<td>$row[10]</td>";

    echo "</tr>\n";


}

?>
</table>
</p>
<p>
<h2>AREA TABLE</h2>	
<table>


<?php	

while($row2 = mysqli_fetch_row($result2))
{
    echo "<tr>";

    echo "<td>$row2[0]</td>";
    echo "<td>$row2[1]</td>";
    echo "<td>$row2[2]</td>";
    echo "<td>$row2[3]</td>";

    echo "</tr>\n";
}

?>
</table>
</p>
<p>
<h2>PARKING FEE TABLE</h2>		
<table>


<?php	

while($row2 = mysqli_fetch_row($result3))
{
    echo "<tr>";

    echo "<td>$row2[0]</td>";
    echo "<td>$row2[1]</td>";
    echo "<td>$row2[2]</td>";
    echo "<td>$row2[3]</td>";
    echo "<td>$row2[4]</td>";
    echo "<td>$row2[5]</td>";
    echo "<td>$row2[6]</td>";
    echo "<td>$row2[7]</td>";

    echo "</tr>\n";
}

?>
</table>
</p>

<p>
<h2>PARKING SLIP TABLE</h2>		
<table>


<?php	

while($row2 = mysqli_fetch_row($result4))
{
    echo "<tr>";

    echo "<td>$row2[0]</td>";
    echo "<td>$row2[1]</td>";
    echo "<td>$row2[2]</td>";
    echo "<td>$row2[3]</td>";
    echo "<td>$row2[4]</td>";
    echo "<td>$row2[5]</td>";
    echo "<td>$row2[6]</td>";
    

    echo "</tr>\n";
}

?>
</table>
</p>

<p>
<h2>PARKING SLOT TABLE</h2>		
<table>


<?php	

while($row2 = mysqli_fetch_row($result5))
{
    echo "<tr>";

    echo "<td>$row2[0]</td>";
    echo "<td>$row2[1]</td>";
    echo "<td>$row2[2]</td>";
    echo "<td>$row2[3]</td>";

    

    echo "</tr>\n";
}

?>
</table>
</p>

<p>
<h2>PAYMENT TABLE</h2>		
<table>


<?php	

while($row2 = mysqli_fetch_row($result6))
{
    echo "<tr>";

    echo "<td>$row2[0]</td>";
    echo "<td>$row2[1]</td>";


    echo "</tr>\n";
}

?>
</table>
</p>

<p>
<h2>RATING TABLE</h2>		
<table>


<?php	

while($row2 = mysqli_fetch_row($result7))
{
    echo "<tr>";

    echo "<td>$row2[0]</td>";
    echo "<td>$row2[1]</td>";


    echo "</tr>\n";
}

?>
</table>
</p>

</body>
</html>


