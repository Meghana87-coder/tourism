<!DOCTYPE html>
<html>
<head>
<title>restaurant</title>

<style type="text/css">
body {
  background-image: url("re.jpeg");
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
      border-color:pink;
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
<section style="padding-left: 550px;padding-top: 125px">
  <fieldset>
  <div style="padding-top:2px;padding-right:45px;padding-left: 25px">
<form name="restaurant" method="POST">
<h1><font size="5" color="black"> <b><u>RESTAURANT DETAILS</u></b> </font></h1>
<table>
<!--<tr>
     <td><label for="first"><font size="4" color="black"> Rest ID:</font></label></td>
     <td><input name="rid"  type="number" required></td>
</tr>!-->

<tr>
     <td><label for="first"><font size="4" color="black"> Name:</font></label></td>
     <td><input name="rname" type="text" required></td>
</tr>

<tr>
       <td><label for="first"><font size="4" color="black"> Location:</font></label></td>
       <td><input name="rloc" id="name" type="text" maxlength="10"  required></td>
</tr>


<tr>
       <td><label for="first"><font size="4" color="black">Contact:</font></label></td>
      <td><input name="rphn" id="first" type="tell" minlength="10"  maxlength="10" required></td>
</tr>
<tr>
 <td><font size="4" color="black">Restaurant type:</font></td>
<td><select name="type" required>
<option value=null>
<option value="Fast casual">Fast casual</option>
<option value="Fine dining">Fine dining</option>
<option value="Brasserie">Brasserie and bistro</option>
<option value="Cafe">Cafe</option>
<option value="Food truck">Food truck</option>
<option value="pop">pop up restaurant</option>
<option value="Ethnic">Ethnic</option>
<option value="Fast Food">Fast food</option>
<option value="Family">Family type</option>
<option value="Buffet">Buffet</option>
<option value="Cafeteria">Cafeteria</option>
</select></td>
  </tr>
      
  <tr>
       <td><label for="first"><font size="4" color="black"> Place ID:</font></label></td>
      <td><input name="placeid" id="first" type="number" required></td>
</tr>
<tr>
<td><font size="4" color="black">COST:</font></td>
<td><input name="rcost" type="text" maxlength="7" placeholder="Enter cost" required></td>
</tr>
</div>

  <tr>
<td><input type="Submit" value="submit"  name="submit"></td>
</tr>

  
</option>
</select>
</td>
</tr>
</table>
</form>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
  <script src="javas.js"></script>
</html>


<?php
$conn=mysqli_connect("localhost","root","","tourism") or die (mysql_error());
if(isset($_POST['submit']))
{
$id=$_POST['rid'];
$name=$_POST['rname'];
$loc=$_POST['rloc'];
$phn=$_POST['rphn'];
$type=$_POST['type'];
$rplaceid=$_POST['placeid'];
$rcost=$_POST['rcost'];
                                                                      
$query="insert into restaurant(restid,restname,location,contactinfo,type,placeid,cost) values('$id','$name','$loc','$phn','$type','$rplaceid','$rcost')";
if(mysqli_query($conn,$query))
{
echo '<script language="javascript">
alert("restaurant details successfully registered");
location="event.php";
</script>';
}
}
?>
 