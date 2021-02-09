<html>
<head><font size="6" color="black" <tittle>RESTUARANT MANAGEMENT </tittle>
<style type="text/css">
		body {background-image: url("rest1image.jpg"); background-size: cover; font-size: 15px;}
		fieldset {
			display:inline;
			background-color: rgba(255,255,255,0.84);
			padding:0px;
			font-size: 15px;
			font-style: italic;
			border:2px groove;
			border-color:pink;
		}
	</style>
</head>
<body>
<section style="padding-left: 400px;padding-top: 125px">
	<fieldset>
	<div style="padding-top:35px;padding-right:45px;padding-left: 25px">
<FORM NAME="Restuarant form" METHOD="POST">

<H5 ALIGN="center"><font size="6">Restuarant information</H5>
<table>


<TR>
   <TD align="left">Rest_name:</TD>
   <TD><input type="text"  required name="Restname" placeholder='enter the name'  ></br></br>
</TR>


<TR>
   <TD align="left">address:</TD>
   <TD><input type="text"  required name="address1" placeholder='enter the address'></br></br>
</TR>

<TR>
   <TD align="left">phone:</TD>
   <TD><input type="tel" required pattern="\d{10}" maxlength="10" name="phone1" placeholder='enter the num' ></br></br>
</TR>

<tr>
<td><p>I agree to terms and conditions
<input type="checkbox" required></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="submit" ></td>
</tr>
</table>
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
  <script src="z.js"></script>
</body>

</html>

<?php
$conn=mysqli_connect("localhost","root","","restuarant_management") or die (mysql_error());
if(isset($_POST['submit']))
{

$rname=$_POST['Restname'];
$radd=$_POST['address1'];
$phone=$_POST['phone1'];
$query="insert into restuarant(Rest_name,address,phone) values('$rname','$radd','$phone')";

$sql="CREATE TRIGGER rest
      AFTER
      INSERT
      ON customer
      FOR EACH ROW
      update restuarant set No_of_cust_visited = No_of_cust_visited+1 where Rest_id=new.Rest_id;";



if(mysqli_query($conn,$query))
{
echo '<script language="javascript">
alert("Restuarant details successfully registered");
location="page.html";
</script>';
}
if(mysqli_query($conn,$sql))
{
echo '<script language="javascript">
alert("no of cust visited successfully registered");

</script>';
}
}
?>
