<?php

// Database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_quilling_web';

// Create a connection to the database
$conn = new mysqli($localhost, $root, "", $db_quilling_web);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

//check for the submission
if(isset($_POST['submit'])) {
	$errors = array();

	//chech if the user name and pw are entered
	if (! (isset($_POST['uname1'] || strlen(trim($_POST['uname1'])) )) <1) {
		$errors[] = 'User name is invalid or empty.';
	}

	if(!isset($_POST['psw1']) || strlen(trim($_POST['psw1'])) <1) {
		$errors[] = 'Password is invalid or empty';
	}

	//check if there are any errors
	if (empty($errors)) {
		//save username and psw
		$uname1 = mysql_real_escape_string($connection, $_POST['uname1']);
		$psw1 = mysql_real_escape_string($connection, $_POST['psw1']);
	}

	//prepare db queries
	$query = "SELECT * FROM tb_register
				WHERE u_name = '{uname1}'
				AND u_psw = '{psw1}'
				LIMIT 1 "

	$result_set = mysqli_query($connection, $query);

	if ($result_set) {
	//query sucessfull

		if (mysql_num_rows($result_set) ==1){
			//valid user found
			//redirect
			header('Location: 'http://localhost/1st/new.html');

		}
		else {
			//user name and password invalid
			$errors[] = 'Invalid user name or password.';
		}
	}else {
		$errors[] = 'Database query failled.'
	}
}	

?>