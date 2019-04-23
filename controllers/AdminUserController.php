<?php
require('DBConnect.php');
require_once('MysqlConnect.php'); ?>


<?php
if(isset($_POST['addAdminUser'])){
      addAdminUser();
    }
if(isset($_POST['editAdminUser'])){
      editAdminUserPassword();
    }
if(isset($_GET['reportID'])){
      viewReport();
	}
if(isset($_GET['deleteID'])){
	deleteAdmin();
	}
if(isset($_POST['btnChangeAdmin'])){
  changeAdminRole();
}


function addAdminUser(){
	session_start();
	$conn = myConnect();
	$uscIDNo = $_POST['uscIDNo'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$position = $_POST['position'];
	$email = $_POST['email'];
	$siteRole = $_POST['siteRole'];
	$admin_photo = "../assets/img/adminusers-images/admin-avatar.png";
	$password = md5($_POST['uscIDNo']);

		if(isset($_FILES['admin_photo'])){
			$errors= array();
			$file_name = $_FILES['admin_photo']['name'];
			$file_size =$_FILES['admin_photo']['size'];
			$file_tmp =$_FILES['admin_photo']['tmp_name'];
			$file_type=$_FILES['admin_photo']['type'];
			$file_ext=strtolower(end(explode('.',$_FILES['admin_photo']['name'])));

			$extensions= array("jpeg","jpg","png");

			if(in_array($file_ext,$extensions)=== false){
			 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
			}

			if(empty($errors)){
			$admin_photo = "../assets/img/adminusers-images/".$file_name;
			move_uploaded_file($file_tmp, $admin_photo);
			}else{
			
			}
		}

	$sql = ("INSERT INTO admins (USCIDNo, FirstName, LastName, Position, Email, SiteRole, Password, Photo) VALUES ('{$uscIDNo}','{$firstName}','{$lastName}','{$position}','{$email}','{$siteRole}','{$password}','{$admin_photo}')");

	//For Activity Log
	session_start();
    $Activity = "added a Admin User";
    $BoldText = "$uscIDNo - $firstName $lastName" ;
    $ActivityCode = "Add Admin";
    $AdminPhoto = $_SESSION['profile']['Photo'];
    $AdminName = $_SESSION['profile']['FirstName'].' '.$_SESSION['profile']['LastName'];
    $sql2 = "INSERT INTO activities(AdminPhoto, AdminName, Activity, BoldText, ActivityCode, DateDone) VALUES('$AdminPhoto', '$AdminName', '$Activity', '$BoldText', '$ActivityCode', NOW() ) " ;
	$result2 = mysqli_query($conn, $sql2);

	$result = mysqli_query($conn,$sql);
	if($result){
		$str="Admin account successfully created";
		header("Location:../views/add-useradmin.php?success-msg=".$str);

	}else{
		echo "Error!!!! ".mysqli_error($conn);
	}
	

}


function displayAllAdmins(){

	$conn = myConnect();
	$sql = "SELECT * FROM admins";
	$result = mysqli_query($conn, $sql);

	while($row=mysqli_fetch_array($result)){
		//do something as long as there's a remaining row.
		$rows[] = $row;
	}

	return (isset($rows)) ? $rows : NULL; 
}

function displaySysAdmins(){

	$conn = myConnect();
	$sql = "SELECT * FROM admins WHERE SiteRole = 'System Administrator'";
	$result = mysqli_query($conn, $sql);

	while($row=mysqli_fetch_array($result)){
		//do something as long as there's a remaining row.
		$rows[] = $row;
	}

	return (isset($rows)) ? $rows : NULL; 
}

function displayEditors(){

	$conn = myConnect();
	$sql = "SELECT * FROM admins WHERE SiteRole = 'Editor'";
	$result = mysqli_query($conn, $sql);

	while($row=mysqli_fetch_array($result)){
		//do something as long as there's a remaining row.
		$rows[] = $row;
	}

	return (isset($rows)) ? $rows : NULL; 
}

function displayAuthors(){

	$conn = myConnect();
	$sql = "SELECT * FROM admins WHERE SiteRole = 'Author'";
	$result = mysqli_query($conn, $sql);

	while($row=mysqli_fetch_array($result)){
		//do something as long as there's a remaining row.
		$rows[] = $row;
	}

	return (isset($rows)) ? $rows : NULL; 
}


function deleteAdmin(){
  $conn = myConnect();
  $id = $_GET['deleteID'];

	$findAdmin = mysqli_query($conn, "SELECT * FROM admins WHERE AdminID = '$id'");
	$admin = mysqli_fetch_assoc($findAdmin);
	$id_number = $admin['USCIDNo'];
	$firstname = $admin['FirstName'];
	$lastname = $admin['LastName'];

	//For Activity Log
	session_start();
	$Activity = "deleted admin";
	$BoldText = "$id_number - $firstname $lastname" ;
	$ActivityCode = "Delete Admin";
	$AdminPhoto = $_SESSION['profile']['Photo'];
    $AdminName = $_SESSION['profile']['FirstName'].' '.$_SESSION['profile']['LastName'];
    $sql2 = "INSERT INTO activities(AdminPhoto, AdminName, Activity, BoldText, ActivityCode, DateDone) VALUES('$AdminPhoto', '$AdminName', '$Activity', '$BoldText', '$ActivityCode', NOW() ) " ;
	$result2 = mysqli_query($conn, $sql2);



  $sql = "DELETE FROM admins WHERE AdminID = '$id'";
  $result = mysqli_query($conn,$sql);
  if($result){
      $str = "Admin Successfully Deleted.";
      header("Location: ../views/admin-table.php?success-msg=".$str);
  }else{
      echo "ERROR!".mysqli_error($conn);
  }

}

function editAdminUserPassword(){
	$conn = myConnect();
	session_start();

	$username = $_SESSION['profile']['USCIDNo'];

	$profile = $_SESSION['profile']['AdminID'];
	$oldPassword = $_POST['inputOldPassword'];
	$newPassword = $_POST['inputNewPassword'];
	$confPassword = $_POST['inputConfPassword'];

	$sql = ("SELECT * FROM admins WHERE AdminID = $profile");
	$result = mysqli_query($conn,$sql);

	if($result){
		$sql2 = ("UPDATE admins SET Password = md5($newPassword) WHERE AdminID = $profile");
		$result2 = mysqli_query($conn,$sql2);
		session_destroy();
		
		session_start();

		$connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
		$result = $connection->query("SELECT * FROM admins WHERE USCIDNo = '{$username}' ");

		if($result->num_rows){
			//if user has logged in
			$admin = $result->fetch_assoc();			
			$_SESSION['profile'] = $admin;

			header('Location: ../views/home.php');
		}
	}
}

function loadEditAdminRole(){
	$id = $_POST['id'];

	$conn = myConnect();
	$sql = "SELECT * FROM admins WHERE AdminID = '$id' LIMIT 1";

	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	echo json_encode([
	'response' => true,
	'data' => $row
	]);
}

function changeAdminRole(){
	session_start();
	$conn = myConnect();

	$id = $_POST['changeroleadminID'];
	$newRole = $_POST['siteRole'];

	$findAdmin = mysqli_query($conn, "SELECT * FROM admins WHERE AdminID = '$id'");
	$admin = mysqli_fetch_assoc($findAdmin);
	$firstname = $admin['FirstName'];
	$lastname = $admin['LastName'];

	//For Activity Log
	session_start();
	$Activity = "changed admin";
	$BoldText = "$firstname $lastname role to $newRole" ;
	$ActivityCode = "Change Admin Role";
	$AdminPhoto = $_SESSION['profile']['Photo'];
    $AdminName = $_SESSION['profile']['FirstName'].' '.$_SESSION['profile']['LastName'];
    $sql2 = "INSERT INTO activities(AdminPhoto, AdminName, Activity, BoldText, ActivityCode, DateDone) VALUES('$AdminPhoto', '$AdminName', '$Activity', '$BoldText', '$ActivityCode', NOW() ) ";
	$result2 = mysqli_query($conn, $sql2);


	$sql = "UPDATE admins SET 
	SiteRole='$newRole' WHERE AdminID = '$id'";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		$str="Admin role successfuly changed";
		header('Location:../views/admin-table.php?success-msg='.$str);
		}
		else{
			echo "ERROR UPDATING ADMIN ROLE.".mysqli_error($conn);
		}  

}


$function_name = isset($_GET['function']) ? $_GET['function'] : null;

switch ($function_name) {
   case 'loadEditAdminRole':
      loadEditAdminRole();
      break;

   
   default:
      break;
}