<!DOCTYPE html>
<html>
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
   
<body>
<fieldset>
<h1 style="text-align: center"> Enter the order no to know its details</h1>          
<form  method="GET">
<form>
  Order No:<br>
 <input type="number" name="query"   onkeydown="myfunc(event)"><br>
  <input type="submit" name="submit" value="search" required onkeydown="myfunc(event)" ><br>
</fieldset>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js.bootstrap"></script>
<script src="z.js"></script>
<?php
$conn=mysqli_connect("localhost","root","","catering") or die(mysql_error());
$query = $_GET['query'];  
$raw_results = mysqli_query($conn,"SELECT o.order_no,o.house_no,o.street,o.area,o.city,o.date,o.time,p.total_amt
	   from orders o,payment p
            WHERE o.order_no=$query
		and p.order_no=o.order_no");
if(mysqli_num_rows($raw_results) > 0){
while($results = mysqli_fetch_array($raw_results)){
echo "<p><h3>".$results['order_no']."</h3>".$results['house_no']."<br >".$results['street']."<br>".$results['area']."<br>".$results['city']."<br>".$results['date']."<br>".$results['time']."<br>".$results['total_amt']."</p>";
}
}
else{
echo "No results";
        }
?>
</body>
</html>