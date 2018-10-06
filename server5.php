<?php  
session_start();

// variable declaration
$username = "";
$email    = "";
$error2 = array(); 
$_SESSION['success'] = "";
$name="";
$eid="";
$gen="";
$adds="";
$p_no="";
$d_oj="";
$sala="";
$age="";
$d_name="";
$did="";
$d_loc="";
$p_name="";
$p_id="";
$p_loc="";
$dur="";
$s_date="";



// connect to database
$db = mysqli_connect('localhost', 'root', '', 'r2');

// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the form
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { array_push($error2, "Username is required"); }
	if (empty($email)) { array_push($error2, "Email is required"); }
	if (empty($password_1)) { array_push($error2, "Password is required"); }

	if ($password_1 != $password_2) {
		array_push($error2, "The two passwords do not match");
	}

	
	if (count($error2) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database
		$query = "INSERT INTO users (username, email, password) 
				  VALUES('$username', '$email', '$password')";
		mysqli_query($db, $query);

		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: login1.php');
	}

}

    //login wala
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {
		array_push($error2, "Username is required");
	}
	if (empty($password)) {
		array_push($error2, "Password is required");
	}

	if (count($error2) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: first4.php');
		}else {
			array_push($error2, "Wrong username/password combination");
		}
	}
}
	

     
  //employee
	if (isset($_POST['st_user'])) {
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$eid = mysqli_real_escape_string($db, $_POST['eid']);
	$gen = mysqli_real_escape_string($db, $_POST['gen']);
	$adds = mysqli_real_escape_string($db, $_POST['adds']);
	$p_no = mysqli_real_escape_string($db, $_POST['p_no']);
	$d_oj = mysqli_real_escape_string($db, $_POST['d_oj']);
	$sala = mysqli_real_escape_string($db, $_POST['sala']);
	$age = mysqli_real_escape_string($db, $_POST['age']);



	if (empty($name)) {
		array_push($error2, "name is required");
	}
	if (empty($eid)) {
		array_push($error2, "eid is required");
	}
	if (empty($gen)) {
		array_push($error2, "gen is required");
	}
	if (empty($adds)) {
		array_push($error2, "adds is required");
	}
	if (empty($p_no)) {
		array_push($error2, "p_no is required");
	}
	if (empty($d_oj)) {
		array_push($error2, "d_oj required");
	}

	if (empty($sala)) {
		array_push($error2, "salary is required");
	}
	if (empty($age)) {
		array_push($error2, "age is required");
	}
	    $query = "INSERT INTO empty4 (name,eid,gen,adds,p_no,d_oj,sala,age) 
				  VALUES('$name', '$eid', '$gen', '$adds', '$p_no', '$d_oj', '$sala', '$age')";
		mysqli_query($db, $query);
		header('location: second4.php');

	}

	//department
	if (isset($_POST['dt_user'])) {
	$d_name = mysqli_real_escape_string($db, $_POST['d_name']);
	$did = mysqli_real_escape_string($db, $_POST['did']);
	$eid = mysqli_real_escape_string($db, $_POST['eid']);
	

	if (empty($d_name)) {
		array_push($error2, "d_name is required");
	}
	if (empty($did)) {
		array_push($error2, "did is required");
	}
	if (empty($eid)) {
		array_push($error2, "eid is required");
	}
	
	    $query = "INSERT INTO depart4 (d_name,did,eid) 
				  VALUES('$d_name', '$did' ,'$eid')";
		mysqli_query($db, $query);
		header('location: third4.php');

	}

	//department location
	if (isset($_POST['dl_user'])) {
	$d_loc = mysqli_real_escape_string($db, $_POST['d_loc']);
	
	

	
	if (empty($d_loc)) {
		array_push($error2, "d_loc is required");
	}

		
	
	    $query = "INSERT INTO department (d_loc) 
				  VALUES('$d_loc')";
		mysqli_query($db, $query);
		header('location: fourth4.php');

	}
	//project detail
	if (isset($_POST['pr_user'])) {
	$p_name = mysqli_real_escape_string($db, $_POST['p_name']);
	$p_id = mysqli_real_escape_string($db, $_POST['p_id']);
	$p_loc = mysqli_real_escape_string($db, $_POST['p_loc']);
	
	

	
	if (empty($p_name)) {
		array_push($error2, "p_name is required");
	}
	if (empty($p_id)) {
		array_push($error2, "p_id is required");
	}
	if (empty($p_loc)) {
		array_push($error2, "p_loc is required");
	}
	
	    $query = "INSERT INTO projec4 (p_name,p_id,p_loc) 
				  VALUES('$p_name', '$p_id', '$p_loc')";
		mysqli_query($db, $query);
		header('location: five4.php');

	}
	//working  detail
	if (isset($_POST['wor_user'])) {
	$dur = mysqli_real_escape_string($db, $_POST['dur']);
	$s_date = mysqli_real_escape_string($db, $_POST['s_date']);
	
	

	
	if (empty($dur)) {
		array_push($error2, "dur is required");
	}
	if (empty($s_date)) {
		array_push($error2, "s_date is required");
	}
	
	
	    $query = "INSERT INTO work4 (dur,s_date) 
				  VALUES('$dur', '$s_date')";
		mysqli_query($db, $query);
		header('location: query4.php');

	}


	



?>