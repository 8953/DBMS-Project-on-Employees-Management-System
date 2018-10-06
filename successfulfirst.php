 
<?php

if(isset($_POST['status']))
{
$eid = $_POST['eid'];
$mysqli = new mysqli('localhost','root','','r2');
$result = $mysqli->query("DELETE FROM empty4 WHERE `empty4`.`eid`= $eid; ");
}


?>
<!DOCTYPE html>
<html>
<head>

	<title> successfulfirst</title>
	<link rel="stylesheet" type="text/css" href="style25.css">
	</head>
<body>
	<form action="display.php" method="post">
		<div class="image">
		</div>

		
	<div class="header">
		<h1>SUCCESSFULL!!   </h1>
	</div>
	<form method="post"action=successfulfirst.php>

        <br>
        <br>
        <p>
        	<h2><B> <i>EMPLOYEE DETAIL HAS BEEN DELETED FROM </i></B></h2>
             <p>
        	<h2><B> <i> THE DATABASE </i></B></h2>
        	<p>
		
		   
		
		
		





		

		
	 
	</form>

	</body>
	
</html>