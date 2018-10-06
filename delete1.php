<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style25.css">
	<title></title>
</head>
<body>

</body>
</html>


<?php

if(isset($_POST['status']))
{
$eid = $_POST['eid'];
$mysqli = new mysqli('localhost','root','','r1');
$result = $mysqli->query("SELECT name,gen,adds,p_no,d_oj,sala FROM empty4 where eid=123"; ");

	

//if($result->num_rows != 0){
 echo "<table border=6 width=500 cellpadding=15> 
 
<tr>
<th>name</th>
<th>pid</th>
<th>dateofjourney</th>
<th>bookingstatus</th>
<th>amount</th>
</tr>";
	while($rows=$result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>".$rows['name']."</td>";
		echo "<td>".$rows['pid']."</td>";
		echo "<td>".$rows['dateofjourney']."</td>";
		echo "<td>".$rows['bookingstatus']."</td>";
		echo "<td>".$rows['amount']."</td>";
		echo "</tr>";
		echo "<br />";
		//echo "<p>ID: $cid <br />Name: $cname <br /> City: $city<br />Commission: $commission<br />Salesman Id: $sid </p>";
	}
	echo "</table>";
}

//}
//else{
	//echo "No Rows Selected";
//}
?>