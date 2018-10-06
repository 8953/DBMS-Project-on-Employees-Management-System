<?php include('server5.php') ?>
<!DOCTYPE html>
<html>
<head>

	<title> DEPARTMENT</title>
	<link rel="stylesheet" type="text/css" href="style25.css">
	</head>
	 
<body>
	<form action="third4.php" method="post">
		<div class="image">
		</div>

		
	<div class="header">
		<h2>DEPARTMENT DETAIL</h2>




		
	</div>
	<form method="post"action=third4.php>
		<div class="input-group">
			<label>DEPARTMENT NAME</label>
			<input type="text" name="d_name" placeholder="DEPARTMENT NAME">
		</div>
		<div class="input-group">
			<label>DEPARTMENT ID</label>
			<input type="text" name="did" placeholder="DEPARTMENT ID">
		</div>
		<div class="input-group">
			<label>EMPLOYEE ID</label>
			<input type="text" name="eid" placeholder="EID">
		</div>
		
		

		<div class="input-group">
			<button type="submit" class="btn" name="dt_user">submit</button>
		</div>
		
		<p>
			want to sign out? <a href="login1.php">sign out</a>
			
		</p>
		
	
	 
	</form>

	</body>
	
}
</html>