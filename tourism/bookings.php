<!DOCTYPE html>
<html>
<head>
<title>BOOKING</title>
</head>
<style>
body {
  background-image: url("book.jpeg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: 100% 200%;
}
fieldset {
      display:inline;
      background-color: rgba(255,255,255,0.84);
      padding:0px;
      font-size: 20px;
      font-style: bold;
      border:2px groove;
      border-color:none;
    }
         input[type=submit] {
      width: 50%;
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
<section style="padding-left: 460px;padding-top: 30px">
  <fieldset>
  <div style="padding-top:5px;padding-right:45px;padding-left: 25px">
</style>
</style>

<form name="bookings" method="POST">
<h1><font size="5" color="black"> <b><u> BOOKING DETAILS </u></b></font></h1>
<table cellpadding="7" id="tab" >

 
<tr>
      <td><font size="4" ><b> NAME :</b></font></td> 
      <td><input type="TEXT" name="nname" required> </input></td>
    </tr>
    <tr>        
            <td><font size="4" ><b> PHONE :</b></font></td>
      <td><input type="tell" name="phone"  required maxlength="10"></input></td>                        
        </tr>
    <tr>
      <td><font size="4"><b> EMAIL :</b></font></td> 
      <td><input type="email" name="email" required> </input></td>
    </tr>
                                   <tr>
      <td><font size="4" ><b> ADDRESS :</b></font></td> 

      <td><input type="TEXT" name="address" maxlength="10"   required> </input></td>
    </tr>
<!--<tr>
     <td><label for="first"><b><font size="4" color="black"> PLACE ID:</font></b></label></td>
     <td><input name="pplaceid"  type="number"  maxlength="2" required></td>
</tr>-->
<tr>
<TD align="left"><font size="4"><b>PLACE NAME:</b></font></TD>
<td><select name="pname" class="form-control">
<option value="pick">please select</option>
<?php
$conn=mysqli_connect("localhost","root","","tourism") or die (mysql_error());
$sql=mysqli_query($conn,"SELECT placeid,name from place");
$row=mysqli_num_rows($sql);
while($row=mysqli_fetch_array($sql)) {
echo "<option value='".$row['placeid']."'>".$row['name']."</option>";
}
?>
</select></td>
<?php
if(isset($_POST['name'])) {
$x=$_POST["name"];
$_SESSION['placeid']=$x;
}
?>
</tr>
<tr>
       <td><font size="4" color="black"><b>NUMBER OF DAYS:</b></font></td>
      <td><input name="day"  type="text" maxlength="2" required></td>
</tr>

<TD align="left"><font size="4"><b>EVENT NAME:</b></font></TD>
<td><select name="ename" class="form-control">
<option value="pick">please select</option>
<?php
$conn=mysqli_connect("localhost","root","","tourism") or die (mysql_error());
$sql=mysqli_query($conn,"SELECT eventid,ename from event");
$row=mysqli_num_rows($sql);
while($row=mysqli_fetch_array($sql)) {
echo "<option value='".$row['eventid']."'>".$row['ename']."</option>";
}
?>
</select></td>
<?php
if(isset($_POST['ename'])) {
$x=$_POST["ename"];
$_SESSION['eventid']=$x;
}
?>
</tr>
<tr>
   
  <TD align="left"><font size="4"><b>TRANSPORTATION NAME:</b></font></TD>
<td><select name="tname" class="form-control">
<option value="pick">please select</option>
<?php
$conn=mysqli_connect("localhost","root","","tourism") or die (mysql_error());
$sql=mysqli_query($conn,"SELECT transid,tname from transportation");
$row=mysqli_num_rows($sql);
while($row=mysqli_fetch_array($sql)) {
echo "<option value='".$row['transid']."'>".$row['tname']."</option>";
}
?>
</select></td>
<?php
if(isset($_POST['tname'])) {
$x=$_POST["tname"];
$_SESSION['transid']=$x;
}
?>
</tr>

  <TD align="left"><font size="4"><b>ACCOMODATION NAME:</b></font></TD>
<td><select name="aname" class="form-control">
<option value="pick">please select</option>
<?php
$conn=mysqli_connect("localhost","root","","tourism") or die (mysql_error());
$sql=mysqli_query($conn,"SELECT accid,aname from accomodation");
$row=mysqli_num_rows($sql);
while($row=mysqli_fetch_array($sql)) {
echo "<option value='".$row['accid']."'>".$row['aname']."</option>";
}
?>
</select></td>
<?php
if(isset($_POST['aname'])) {
$x=$_POST["aname"];
$_SESSION['accid']=$x;
}
?>
</tr>

<tr>
      <td><b><font size="4" color="black"><b>NO OF ROOMS:</b></font> </b></label></td>
      <td><input name="noro"  type="number" maxlength="5" required ></td>
</tr>




<tr>
<td><font size="5" color="Black"><i>I agree to terms and conditions</i></font></td>
<td><input type="checkbox"  required></td>
</tr>
<tr><td><font size=3>Click submit to know the billing information</td></tr>

<tr>
<td><input type="submit" class=button name="submit" required></td>
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

$uname=$_POST['nname'];
$uphone=$_POST['phone'];
$umail=$_POST['email'];
$uadd=$_POST['address'];
$upnamr=$_POST['pname'];
$days=$_POST['day'];
$tename=$_POST['ename'];
$taname=$_POST['aname'];
$ttname=$_POST['tname'];
$nrooms=$_POST['noro'];
                         
$query="insert into booking(nname,phone,email,address,pname,days,ena,aname,tname,noro) 
values('$uname','$uphone','$umail','$uadd','$upnamr','$days','$tename','$taname','$ttname','$nrooms')";
$sql = mysqli_query($conn,'CALL totalamt');
if(mysqli_query($conn,$query))
{
echo '<script language="javascript">
alert("successfully  booked..!!! Enjoy travelling (*-*)");
location="sp.php";
</script>';
}
}

?>
 