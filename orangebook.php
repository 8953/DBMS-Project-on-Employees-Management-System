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
$mysqli = new mysqli('localhost','root','','r2');
$result = $mysqli->query("SELECT * FROM empty4  WHERE `empty4`.`eid`= $eid; ");

	

//if($result->num_rows != 0){
 echo "<table border=6 width=500 cellpadding=15> 
 
<tr>
<th>PNR no</th>
<th>From station</th>
<th>To station</th>
<th>Start time</th>
<th>Reach time</th>
<th>No of seats available</th>
</tr>";
	while($rows=$result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>".$rows['pnr']."</td>";
		echo "<td>".$rows['froms']."</td>";
		echo "<td>".$rows['tos']."</td>";
		echo "<td>".$rows['starttime']."</td>";
		echo "<td>".$rows['reachtime']."</td>";
		echo "<td>".$rows['noofseatsavailable']."</td>";
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

