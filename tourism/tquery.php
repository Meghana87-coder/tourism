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
<h3 style="text-align: center">Enter the placeid to know the place name,events,transportation and accomodation facilities</h3>           
<form  method="GET">
<pre>

 placeid :<input type="number" name="query" onkeydown="myfunc(event)">

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
$raw_results = mysqli_query($conn,"SELECT p.name,e.ename,a.aname,t.tname
								   from event e,place p,accomodation a,transportation t
								    where e.placeid=$query
								    and e.placeid=p.placeid
								    and a.placeid=p.placeid
								    and t.placeid=p.placeid
								   ");

if(mysqli_num_rows($raw_results) > 0)
{
	echo "query executed";
	while($results = mysqli_fetch_array($raw_results))
	{
	echo "<p>".$results['name']."<br>".$results['ename']."<br>".$results['aname']."<br>".$results['tname']."</p>";

	}
}
else
{
echo "No results";
}
?>