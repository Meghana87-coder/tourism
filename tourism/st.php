<?php
$conn=mysqli_connect("localhost","root","","tourism") or die(mysql_error());
$query = mysqli_query($conn,'CALL totalamt');
//while($row = mysqli_fetch_array($query)) {
//	echo $row[0];
//}


echo '<div style="font-size:3em;color:red"><u>BILLING INFORMATION<br><br></u></div>';
$query1="SELECT  * from booking";
$sql = mysqli_query($conn,$query1);
while($row = mysqli_fetch_array($sql)) {

	echo  "booking_id=".$row[0]." "."Name=" .$row[1]." "."placename=" .$row[6]." "."Totalcost=".$row[12]. "<br>" ;
}
?>

