<html>
<head><title>HOSPITAL MANAGEMENT</title>
</head>
<style type="text/css">
		body {background-image: url("pat1.jpg"); background-size: cover; font-size: 15px;}
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
<body>
<section style="padding-left: 550px;padding-top: 125px">
	<fieldset>
	<div style="padding-top:35px;padding-right:45px;padding-left: 25px">
<FORM NAME="HOSPITAL FORM" METHOD="POST">
<H5 ALIGN="center"><font size="6">PATIENT INFORMATION</H5>
<table>

<TR>
   <TD align="left"><font size="4">Hospital name:
<select name="to_user" class="form-control">
<option value="pick">please select</option>
<?php
$conn=mysqli_connect("localhost","root","","hospital") or die (mysql_error());
$sql=mysqli_query($conn,"SELECT Hospid,Hospname from hospitalinfo");
$row=mysqli_num_rows($sql);
while($row=mysqli_fetch_array($sql)) {
echo "<option value='".$row['Hospid']."'>".$row['Hospname']."</option>";
}
?>
</select>
<?php
if(isset($_POST['to_user'])) {
$x=$_POST["to_user"];
$_SESSION['Hospid']=$x;
}
?>



<TR>
   <TD align="left"><font size="4">Patient name:</TD>
   <TD><input type="text" required pattern="[ a-z ]*[ A-Z ]*" name="Patient_name" placeholder="enter the name"></br></br>
</TR>

<TR>
   <TD align="left"><font size="4">Address:</TD>
   <TD><input type="text" required name="Patient_address" placeholder="enter the address"></br></br>
</TR>

<TR>
   <TD align="left"><font size="4">DateofBirth:</TD>
   <TD><input type="date" value="current date" required name="Patient_dob" maxlength="2"  max=<?php echo date('Y-m-d');?>>
</br></br>
</TR>


<TR>
   <TD align="left"><font size="4">Phone:</TD>
   <TD><input type="tel" required pattern="\d{10}" name="Patient_phone" maxlength="10"></br></br>
</TR>



<TR>
   <TD align="left"><font size="4">Gender:</br>
   <TD><input type="radio" required name="Sex"value="Male">Male
   <INPUT type="radio" required name="Sex"value="Female">Female
</TD>
</TR>

<TR>
   <TD align="left"><font size="4">Disease:</TD>
   <TD><input type="text" required pattern="[ a-z ]*[ A-Z ]*" name="Patient_disease" ></br></br>
</TR>


<TR>
<TD align="left"><font size="5"></TD>
<TD><input type="submit" value="SUBMIT" name="submit"></TD>
</TR>

</table>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
  <script src="z1.js"></script>
</body>


</html>


<?php
$conn=mysqli_connect("localhost","root","","hospital") or die (mysql_error());
if(isset($_POST['submit']))
{

//$hid=$_POST['Hospital_id'];

$pname=$_POST['Patient_name'];
$padd=$_POST['Patient_address'];
$pdob=$_POST['Patient_dob'];
$phone=$_POST['Patient_phone'];
$sex=$_POST['Sex'];
$disease=$_POST['Patient_disease'];


$query="insert into patientinfo(Hospid,Patientname,Address,dateofbirth,Phone,Sex,Disease) values('$x','$pname','$padd','$pdob','$phone','$sex','$disease')";
if(mysqli_query($conn,$query))
{
echo '<script language="javascript">
alert("patient details successfully registered");
location="user.html";
</script>';
}
$query=mysqli_query($conn,'CALL agecal');
}
?>

