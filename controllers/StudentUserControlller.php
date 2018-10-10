<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'usc-library');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');


$connection = new mysqli(DB_HOST,  DB_USERNAME, DB_PASSWORD, DB_NAME);

if($_POST){
	$id_number = $_POST['id_number'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$course = $_POST['course'];
	$yearlvl = $_POST['yearlvl'];
	$password = $_POST['id_number'];
	$status = "Cleared";
	

	$connection->query("INSERT INTO students (USCIDNo, FirstName, LastName, Password, Course, YearLevel, Status) 
	                VALUES ('{$id_number}', '{$firstname}', '{$lastname}', '{$password}', '{$course}', '{$yearlvl}', '{$status}')");

	$connection->close();

	header('Location: ../views/add-userstudent.php');
	// echo "Registration Pending. Wait for Admin to approve your Account";

}