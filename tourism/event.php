<!DOCTYPE html>
<html>
<head>
<title>event</title>
</head>
<style>
body {
  background-image: url("ejpeg.jpeg");
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
</style></head>

<body>
<section style="padding-left: 600px;padding-top: 30px">
  <fieldset>
  <div style="padding-top:2px;padding-right:45px;padding-left: 25px">
</style>

<form name="event form" method="POST">
<h1><font size="5" align="center" color="black"><b> <u>EVENT DETAILS</u></font><h1>
<table cellpadding="6">
<!--<tr>
     <td><label for="first"><font size="3" color="yellow"> Event ID:</font></label></td>
     <td><input name="eidt" id="first" type="number" required></td>
</tr>!-->
<tr>
     <td><label for="first"><font size="4" > Event name:</font></td>
     <td><input name="ename"  type="text" maxlength="10" required></td>
</tr>
<tr>
       <td><label for="first"><font size="4"> Start Date:</font></label></td>
       <td><input name="start"  type="date" required></td>
</tr>
<tr>
       <td><label for="first"> <font size="4" >End Date:</font></label></td>
      <td><input name="end"  type="date" required></td>
</tr>

<tr>
       <td><label for="first"><font size="4" > Place ID:</font></label></td>
      <td><input name="placeid"  type="number" maxlength="2" required></td>
</tr>
<tr>
       <td><label for="first"><b><font size="4" >Cost:</font></b></label></td>
      <td><input name="cost"  type="number" maxlength="7" required></td>
</tr>
<tr>
<td><input type="Submit" value="submit"  name="submit"></td>
</tr>

</form>
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

$eename=$_POST['ename'];
$estart=$_POST['start'];
$eend=$_POST['end'];
$eplaceid=$_POST['placeid'];
$ecost=$_POST['cost'];
                           
$query="insert into event(ename,startdate,enddate,placeid,cost) values('$eename','$estart','$eend','$eplaceid','$ecost')";
if(mysqli_query($conn,$query))
{
echo '<script language="javascript">
alert("events details successfully registered");
location="transpotation.php";
</script>';
}
}
?>


