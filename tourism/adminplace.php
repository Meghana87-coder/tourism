<!DOCTYPE html>
<html><head>
<title>Form project</title></head>
<style>
body {
  background-image: url("admin.gif");
  background-position: top;
  background-repeat: no-repeat;
 /* background-size: 10% 10%;*/
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

<font face = "TIMES NEW roman" size="5" color="black"><h1 align="left" height="10%">ADMIN LOGIN</h1> </font>
<center>

<form name = " login form" method="POST" style = "margin-top:20%"> 
<table>
 <h2><font face = "times new roman" size="5" color="black">LOGIN FORM</font></h2>
<tr>
          <td><font size="5" color="black" ><b>Admin userid:</b></font></td> 
          <td><input type="email" name="admin"  align="right"  placeholder="*****@****.com"  required> </input></td>
</tr>
<!--<tr>
      <td><font size="5" color="black"> User ID :</font></td>  
      <td><input type="text" name="userid" align="right"  required maxlength="2"> </input></td>
    </tr>!-->
 <tr>
           <td><font size="5" color="black" > <b>Password:</b></font></td> 
           <td><input type="password" name="adminpass" align="right" required maxlength="8" required></td>
</tr>
 
<div>
<tr>
<td><input type="submit" align="center" value="login"  name="submit"></tr></td></div>

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

<?php
//session_start();
include_once "connection.php";

if(isset($_POST['admin'])){

  $lid=$_POST['admin'];
  $pass=$_POST['adminpass'];
  $sql="select adminun from admin where adminun='".$lid."' AND adminpw='".$pass."'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)==1){
    $row=mysqli_fetch_assoc($result);
   // $_SESSION['custid']=$row['cust_id'];
    echo '<script language="javascript">
    alert("successfully admin has loggedin!!!!");
    location="touristplace.php";
    </script>';
  }
  else{
    echo "unsuccessful";
    exit();
  }
}


?>

?>