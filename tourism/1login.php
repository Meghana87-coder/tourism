<!DOCTYPE html>
<html><head>
<title>Form project</title></head>
<style>
body {
  background-image: url("logo.jpeg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: 100% 200%;
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
</style>

<font face = "TIMES NEW roman" size="5" color="black"><h1 align="center" height="30%">WELC0ME TO TOURISM MANAGEMENT SYSTEM</h1> </font>
<center>

<form name = " login form" method="POST" style = "margin-top:20%">
<table>
 <h2><font face = "times new roman" size="5" color="black">LOGIN FORM</font></h2>
<tr>
          <td><font size="5" color="black" > UserName:</font></td> 
          <td><input type="email" name="mails" placeholder="Enter email" align="right" required> </input></td>
</tr>
<!--<tr>
      <td><font size="5" color="black"> User ID :</font></td>  
      <td><input type="text" name="userid" align="right"  required maxlength="2"> </input></td>
    </tr>!-->
 <tr>
           <td><font size="5" color="black" > Password:</font></td> 
           <td><input type="password" placeholder="password" name="pass" align="right" required maxlength="5"></td>
</tr>
 
<div>
<tr>
<td><input type="submit" align="center" value-"login"  name="submit"></tr></td></div>

</table>
</form>
</tr>
</div>
</center>
</body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
  <script src="javas.js"></script>
</html>


<!--
<?php
$conn=mysqli_connect("localhost","root","","tourism") or die (mysql_error());
//session_start();
if(isset($_POST['lid'])){

  $lid=$_POST['mails'];
  $pass=$_POST['password'];
  $sql="select email from reg where login='".$lid."' AND password='".$pass."'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)==1){
    $row=mysqli_fetch_assoc($result);
    echo '<script language="javascript">
alert("login details successfully registered");
location="touristplace.php";
</script>';
}
}?>

-->

<?php
//session_start();
include_once "connection.php";

if(isset($_POST['mails'])){

  $lid=$_POST['mails'];
  $pass=$_POST['pass'];
  $sql="select email from reg where email='".$lid."' AND passs='".$pass."'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)==1){
    $row=mysqli_fetch_assoc($result);
   // $_SESSION['custid']=$row['cust_id'];
    echo '<script language="javascript">
    alert("successfully loggedin!!!!");
    location="bookings.php";
    </script>';
  }
  else{
    echo "unsuccessful";
    exit();
  }
}


?>




