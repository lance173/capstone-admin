<?php

session_start();

require('../controllers/DBConnect.php');

if($_POST){


	$emailORid = $_POST['emailORid'];
	$password = md5($_POST['password']); 

	$connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

	$result = $connection->query("SELECT * FROM admins WHERE ((Email = '{$emailORid}' OR USCIDNo = '{$emailORid}' ) AND Password = '{$password}') AND ActiveStatus != 'DEACTIVATED' ");

	if($result->num_rows){

		//if user has logged in
		$admin = $result->fetch_assoc();
		
		$_SESSION['profile'] = $admin;

		header('Location: ../views/home.php');
	}else{

		//if user has invalid log in

		//set login error

			//$_SESSION['loginError'] = 'Invalid username or password';

		// redirect user back to login page

		?>

			<script>
				alert('Invalid Login!');
				window.location = "../views/login.php";
			</script>

		<?php
		
		
	}

}
?>