<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body { font-size: 15px; }
<style> 
ALIGNMENT {                                         
    margin-left: 70px; 
    font-weight: bold ; 
    float: center; 
    clear: left; 
    width: 100px; 
    text-align: center; 
    margin-right: 10px; 
    font-family:sans-serif,bold, Arial, Helvetica; 
    font-size:14px; 
} 
   
div {  
    box-sizing: border-box; 
    width: 50%; 
    border: 100px solid black; 
    float: left; 
    align-content: center; 
    align-items: center; 
} 
   
form {                                         
    margin: 0 auto; 
    width: 100px; 
}</style> 
<title>Query2</title>
</head>
<body>
<fieldset>
<h3 style="text-align: center">Enter the cost to knw the packages below your range: </h3>           
<form  method="GET">
<pre>

cost:<input type="number" name="query" onkeydown="myfunc(event)">

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
$raw_results = mysqli_query($conn,"SELECT p.placeid,p.name,p.cost
								   from place p
								    where p.cost < $query");

if(mysqli_num_rows($raw_results) > 0)
{
	echo "query executed";
	while($results = mysqli_fetch_array($raw_results))
	{
	echo "<p>".$results['placeid']."<br>".$results['name']."<br>".$results['cost'];

	}
}
else
{
echo "No results";
}
?>