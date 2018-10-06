<?php include('server5.php') ?>
<!DOCTYPE html>
<html>
<head>

	<title> bus booking reservation system</title>
	<link rel="stylesheet" type="text/css" href="style25.css">
	</head>
	 
<body>
	<form action="first1.php" method="post">
		<div class="image">
		</div>

		
	<div class="header">
		<h2>RESERVING SEAT</h2>




		
	</div>
	<form method="post"action=first1.php>
		<div class="input-group">
			<label>passenger name</label>
			<input type="text" name="name">
		</div>
		<div class="input-group">
			<label>enter phone no</label>
			<input type="text" name="phone">
		</div>
		
		<div class="input-group">
			<label>no of seats booked</label>
			<input type="text" name="no">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="seat_user">book</button>
		</div>
		
		<p>
			want to sign out? <a href="login.php">sign out</a>
		</p>
		
	
	 
	</form>

	</body>
	
}
</html>