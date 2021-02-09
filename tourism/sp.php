<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>


    <style>
body {
    height: 600px;
    background-color: white;
    background-image: linear-gradient(gray,white);
    background-repeat: no-repeat;
    
}
</style>
           
        
<?php
$conn=mysqli_connect("localhost","root","","tourism") or die(mysql_error());
$query = mysqli_query($conn,'CALL totalamt');



echo '<div style="font-size:3em;color:darkblue"><u>BILLING INFORMATION<br><br></u></div>';
$query1="SELECT * from booking";
$sql = mysqli_query($conn,$query1);
while($row = mysqli_fetch_array($sql)) {

    echo  "<b>"."booking_id=".$row[0]."  "."Name=" .$row[1]." "."Totalcost=".$row[11]. "<br>"."</u>"."<br>" ;
}
?>
</center>
<a href="homepage.html">Back!!</a>
 </body>
</html>
