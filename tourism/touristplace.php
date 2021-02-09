<!DOCTYPE html>
<html>
<head>
<title>TOURISTPLACE</title>
</head>
<style>
body {
  background-image: url("tp3.jpeg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   padding: 100px;
   margin: 100px;
 }
 fieldset {
      display:inline;
      background-color: rgba(255,255,255,0.84);
      padding:0px;
      font-size: 30px;
      font-style: bold;
      border:2px groove;
      border-color:none;
    }
       input[type=submit] {
      width: 100%;
  background-color: #4CAF50;
  color:white;
  padding: 16px 30px;
  text-align: center;
    font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
input[type=submit]:hover{
  background-color: #45a049;
}
</style></head>

<body>
<section style="padding-left: 350px;padding-top: 30px">
  <fieldset>
  <div style="padding-top:2px;padding-right:45px;padding-left: 25px">
</style>

<form name="place" method="POST">
<h1><font size="5" color="black"><b><u> PLACE DETAILS</u></b> </font></h1>
<table cellpadding="5" id="tab" >
<!--<tr>
     <td><label for="first"><font size="4" color="black"> PLACE ID:</font></label></td>
     <td><input name="placeid" type="text"  maxlength="4" required></td>
</tr>!-->
<center>
  <tr>
       <td style=" align-items: center;"> <font size="4" color="black">PLACE NAME:</font></td>
      <td><input name="place" type="text" maxlength="=15" required></td>
</tr>
<tr>
       <td><font size="4" color="black"> TYPE:</font></td>
      <td><input name="type"  type="text" maxlength="10" required></td>
</tr>

<tr> 
       <td><font size="4" color="black">COST:</font></td>
      <td><input name="cost"  type="number" maxlength="7" required></td>
</tr> 
</center>
<tr>
<td><input type="Submit" align="left" value="submit"  name="submit"></td>
</tr>
</form>
</center>
</table>
</body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
  <script src="javas.js"></script>
</html>

<?php
$conn=mysqli_connect("localhost","root","","tourism") or die (mysql_error());
if(isset($_POST['submit']))
{
$tpid=$_POST['placeid'];
$tname=$_POST['place'];
$ttype=$_POST['type'];
//$tdays=$_POST['days'];
$tcost=$_POST['cost'];


$query="insert into place(placeid,name,type,cost) values('$tpid','$tname','$ttype','$tcost')";
$sql = mysqli_query($conn,"SELECT cost FROM aplace where place='$tname'");
$row =mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo $row[0];
}

if(mysqli_query($conn,$query))
{
echo '<script language="javascript">
alert(" place details successfully registered");
location="accomodation.php";
</script>';
}
}
?>


