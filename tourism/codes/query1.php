<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body { font-size: 15px; }
<style> 
ALIGNMENT {                                         
    margin-left: 70px; 
    font-weight: bold ; 
    float: left; 
    clear: left; 
    width: 100px; 
    text-align: left; 
    margin-right: 10px; 
    font-family:sans-serif,bold, Arial, Helvetica; 
    font-size:14px; 
} 
   
div {  
    box-sizing: border-box; 
    width: 100%; 
    border: 100px solid black; 
    float: left; 
    align-content: center; 
    align-items: center; 
} 
   
form {                                         
    margin: 0 auto; 
    width: 600px; 
}</style> 
<title>Query1</title>
</head>
<body>
<fieldset>
<h3 style="text-align: center">Enter the date to know the place name and its events</h3>           
<form  method="GET">
<pre>

 DATE:<input type="date" name="query" onkeydown="myfunc(event)">

  <input type="submit" name="submit" value="search" required onkeydown="myfunc(event)">

 </pre>
</form>
</fieldset>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
<script src="javas.js"></script>
</html>

<?php
$conn=mysqli_connect("localhost","root","","tourism") or die(mysql_error());
$query = $_GET['query'];  
$raw_results = mysqli_query($conn,"SELECT p.placeid,p.name,e.name
								   from place p, event e
								   where p.placeid=e.placeid
								   and  e.startdate=$query
								   ");
if(mysqli_num_rows($raw_results) > 0)
{
	while($results = mysqli_fetch_array($raw_results))
	{
	echo "<p><h3>".$results['name']."</h3>".$results['ename']."</p>";
	}
}
else
{
echo "No results";
}
?>