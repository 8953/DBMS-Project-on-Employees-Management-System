<?php include('server5.php') ?>
<!DOCTYPE html>
<html>
<head>

	<title> EMPLOYEEDETAIL</title>
	<link rel="stylesheet" type="text/css" href="style25.css">
	</head>
	 
<body>
	<form action="first4.php" method="post">
		<div class="image">
		</div>

		
	<div class="header">
		<h2>EMPLOYEE DETAIL</h2>




		
	</div>
	<form method="post"action=first4.php>
		<div class="input-group">
			<label>NAME</label>
			<input type="text" name="name" placeholder="NAME">
		</div>
		<div class="input-group">
			<label>EMPLOYEE ID</label>
			<input type="text" name="eid" placeholder="EMPLOYEE ID">
		</div>
		
		<div class="input-group">
			<label>GENDER</label>
			<input type="text" name="gen" placeholder="GENDER">
		</div>
		<div class="input-group">
			<label>ADDRESS</label>
			<input type="text" name="adds" placeholder="ADDRESS">
		</div>
		<div class="input-group">
			<label>PHONE NO</label>
			<input type="text" name="p_no" placeholder="PHONE NO">
		</div>
		<div class="input-group">
			<label>DATE OF JOINING</label>
			<input type="text" name="d_oj" placeholder="DATE OF JOINING">
		</div>
		<div class="input-group">
			<label>SALARY</label>
			<input type="text" name="sala" placeholder="SALARY">
		</div>
		<div class="input-group">
			<label>AGE</label>
			<input type="text" name="age" placeholder="AGE">
		</div>

		<div class="input-group">
			<button type="submit" class="btn" name="st_user">submit</button>
		</div>
		
		<p>
			want to sign out? <a href="login1.php">sign out</a>
		</p>
		
	
	 
	</form>

	</body>
	
}
</html>