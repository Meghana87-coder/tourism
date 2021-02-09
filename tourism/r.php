<!DOCTYPE html>
<html>
<head>
<style>
/* {
  box-sizing: border-box;
}*/

input[type=text], select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=email], select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=password], select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 2px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

 .button {
  background-color: #4CAF50;
  color: white;
  padding: 16px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  float: left;
}



/*input[type=submit]:hover {
  background-color: #45a049;
}*/

.container {
  float:center;
  border-radius: 5px;
  background-color: transparent;
  padding: 20px;
  margin-right: auto;
  margin-left: auto;
  width: 500px;
}
.signin {
  background-color:#f3f3f3;
  text-align: :center;
  width: 400px;
   padding: 16px 30px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 2px;
}

.col-75 {
  float: left;
  width: 55%;
  margin-top: 2px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 50px) {
  .col-25, .col-75, input[type=submit] {
    width: 50%;
    margin-top: 0;
  }
}
body {
  background-image: url("logo.jpeg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: 100% 250%;
  background-blend-mode: lighten;
}
</style>
</head>

<h2><center>TOURISM REGISTER FORM</center></h2>

<div class="container">
  <form method="POST">
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text"  name="firstname" placeholder="Your name.." required>
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" name="lastname" placeholder="Your last name.." required>
    </div>
  </div>
 

 
  <div class="row">
    <div class="col-25">
      <label for="subject">Email:</label>
    </div>
    <div class="col-75">
      <input type="email" name="email" placeholder="abc@gmail.com.." required >
    </div>
  </div>

   <div class="row">
    <div class="col-25">
      <label for="subject">Password:</label>
    </div>
    <div class="col-75">
      <input type="Password" name="pass"  maxlength="5" placeholder="Enter 10 digits" required >
    </div>
  </div>

  
  <div class="row">
   
   <input type="submit" class=button name="submit" value="REGISTER" required></div>

  </div>
  <div class="container signin"> already have an account? <a href="1login.php">signin</a>
  </div>

  </form>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
  <script src="javas.js"></script>
</html>


<?php
$conn=mysqli_connect("localhost","root","","tourism") or die (mysql_error());
//session_start();
if(isset($_POST['submit']))
{

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$mail=$_POST['email'];
$pass=$_POST['pass'];
//$_SESSION['userid'] = $tuserid;
                                                                      
$query="insert into reg(name,lame,email,passs) values('$fname','$lname','$mail','$pass')";
if($row = mysqli_query($conn,$query))
{
echo '<script language="javascript">
alert("successfully registered Login!!!");
location="1login.php";
</script>';
}
}
?>