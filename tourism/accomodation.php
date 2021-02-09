<!DOCTYPE html>
<html>
<head>
<title>ACCOMODATION</title>
</head>
<style>
body {
  background-image: url("a.jpeg");
  background-position: top;
  background-repeat: no-repeat;
  background-size: cover;
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
.buttonh{
  width: 150px;
  color: blue;
}
</style></head>

<body>
<section style="padding-left: 550px;padding-top: 80px">
  <fieldset>
  <div style="padding-top:2px;padding-right:45px;padding-left: 25px">
</style>

<body>
<form name="accomodation" method="POST">
<h1><font size="5" color=" black"><b><u>ACCOMODATION DETAILS </u></b></font></h1>

<table>
<!--<tr>
<td><font size="4" color="black">ACC ID: </font></td>
<td><input name="accid"  type="text" maxlength="3" placeholder=" Enter ACC ID"  required></td>
</tr> !-->

<tr>
<td><font size="4" color="black">ACC NAME:</font> </td>
<td><input name="accname"  type="text" maxlength="10" required></td>
</tr>


<tr>
<td><font size="4" color="black">PLACE ID:</font></td>
<td><input name="placeid" type="text" maxlength="2" placeholder="Enter PLACE ID" required></td>
</tr>

<tr>
<td><font size="4" color="black">ROOMS Available:</font></td>
<td><input name="rooms" type="text" maxlength="2" ></td>
</tr>

<tr>
<td><font size="4" color="black">COST:</font></td>
<td><input name="cost" type="text" maxlength="7" placeholder="Enter cost" required></td>
</tr>

<tr>
<td><input type="submit"  align="left" value="submit" name="submit"></td>
<td><input type="button" value="view" onclick="window.location.href='view.php'"/s>
</tr>
 </table>
</form>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
  <script src="javas.js"></script>
</html>

<?php
$conn=mysqli_connect("localhost","root","","tourism") or die (mysql_error());
if(isset($_POST['submit']))
{
//$tacid=$_POST['accid'];
$tacname=$_POST['accname'];
$tplaceid=$_POST['placeid'];
$trooms=$_POST['rooms'];
$tcost=$_POST['cost'];

$query="insert into accomodation(aname,placeid,rooms,cost) values('$tacname','$tplaceid','$trooms','$tcost')";


if(mysqli_query($conn,$query))
{
echo '<script language="javascript">
alert("Accomodation details successfully registered");
location="restaurant.php";
</script>';
}
}
?>