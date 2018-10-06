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
<th>EMPLOYEE ID</th>
<th>NAME</th>
<th>GENDER</th>
<th>ADDRESS</th>
<th>PHONE NO</th>
<th>DATE OF JOINING</th>
<th>SALARY</th>
<th>AGE</th>
</tr>";
	while($rows=$result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>".$rows['eid']."</td>";
		echo "<td>".$rows['name']."</td>";
		echo "<td>".$rows['gen']."</td>";
		echo "<td>".$rows['adds']."</td>";
		echo "<td>".$rows['p_no']."</td>";
		echo "<td>".$rows['d_oj']."</td>";
		echo "<td>".$rows['sala']."</td>";
		echo "<td>".$rows['age']."</td>";
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

