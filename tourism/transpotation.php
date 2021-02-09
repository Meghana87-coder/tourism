<!DOCTYPE html>
<html>
<head>
<title>transpotation</title>
</head>
<style>
body {
  background-image: url("T.jpeg");
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
<section style="padding-left: 550px;padding-top: 30px">
  <fieldset>
  <div style="padding-top:2px;padding-right:45px;padding-left: 25px">

<form name="transpotation" method="POST">
<h1><font size="5" color="black"> <b><u>TRANSPORTATION DETAILS</u></b> </font></h1>
<table cellpadding ="7">
<tr>
     <td><label for="first"><b><font size="4" color="black"> TransportName:</font></b></label></td>
     <td><input name="transname" id="first" type="text" required></td>
</tr>


<tr>
     <td><label for="first"><b><font size="4" color="black"> Place ID:</font></b></label></td>
     <td><input name="placeid" id="first" type="number" required></td>
</tr>
<tr>
       <td><label for="first"><b><font size="4" color="black">Vehicle type:</font></b></label></td>
       <td><input name="vehicle" id="name" type="text" maxlength="10" required></td>

</tr>

<tr>
       <td><label for="first"><b><font size="4" color="black"> Number of people:</font></b></label></td>
      <td><input name="numberp" id="first" type"number" required></td>
</tr>

<tr>
       <td><label for="first"><b><font size="4" color="black">Cost:</font></b></label></td>
      <td><input name="cost" id="first" type"number" required></td>
    </tr>



<tr>
<td><input type="Submit" class=button name="submit"></td>
</tr>
</div>

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
$tid=$_POST['transname'];
$tplaceid=$_POST['placeid'];
$tvehicle=$_POST['vehicle'];
$tnumberof=$_POST['numberp'];
$tcost=$_POST['cost'];

                         
$query="insert into transportation(tname,placeid,vehicle,number,cost) values('$tid','$tplaceid','$tvehicle','$tnumberof','$tcost')";
if(mysqli_query($conn,$query))
{
echo '<script language="javascript">
alert(" Transportation details  successfully registered");
location="homepage.html";
</script>';
}
}
?>
 