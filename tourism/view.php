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
//$query = mysqli_query($conn,'CALL totalamt');



echo '<div style="font-size:3em;color:black"><u>VIEWING PLACE DETAILS<br><br></u></div>';
$query1="SELECT * from place";
$sql = mysqli_query($conn,$query1);
while($row = mysqli_fetch_array($sql)) {

    echo  "<b>"."PLACE_id=".$row[0]."  "."PLACENAME=" .$row[1]. "<br>"."</u>"."<br>" ;
}
?>
</center>
<a href="accomodation.php">Back!!</a>
 </body>
</html>
