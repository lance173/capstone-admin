<?php
// if(session_status() == PHP_SESSION_NONE){
//     //session has not started
//     session_start();
// }
?>

<?php require('MysqlConnect.php'); ?>


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

	$result = mysqli_query($conn,$sql);
	if($result){
		$str="Admin account successfully created";
		header("Location:../views/add-useradmin.php?success-msg=".$str);

	}else{
		echo "Error!!!! ".mysqli_error($conn);
	}
	// $adminFName = $_SESSION['profile']['firstName'];
	// $adminLName = $_SESSION['profile']['lastName'];

	// $sql2 = ("INSERT INTO activity (fname, lname, activity, dateDone) VALUES ('{$adminFName}','{$adminLName}','Add Admin',NOW())");

	// $result2 = mysqli_query($conn,$sql2);

	// if($result2){
	// $str="Succesfully added to activity log";
	// header("Location:../views/add-useradmin.php?success-msg=".$str);
	// }


}


function displayAllAdmins(){

	$conn = myConnect();
	$sql = "SELECT * FROM admins";
	$result = mysqli_query($conn, $sql);

	while($row=mysqli_fetch_array($result)){
		//do something as long as there's a remaining row.
		$rows[] = $row;
	}

	return $rows;
}

function displaySysAdmins(){

	$conn = myConnect();
	$sql = "SELECT * FROM admins WHERE SiteRole = 'System Administrator'";
	$result = mysqli_query($conn, $sql);

	while($row=mysqli_fetch_array($result)){
		//do something as long as there's a remaining row.
		$rows[] = $row;
	}

	return $rows;
}

function displayEditors(){

	$conn = myConnect();
	$sql = "SELECT * FROM admins WHERE SiteRole = 'Editor'";
	$result = mysqli_query($conn, $sql);

	while($row=mysqli_fetch_array($result)){
		//do something as long as there's a remaining row.
		$rows[] = $row;
	}

	return $rows;
}

function displayAuthors(){

	$conn = myConnect();
	$sql = "SELECT * FROM admins WHERE SiteRole = 'Author'";
	$result = mysqli_query($conn, $sql);

	while($row=mysqli_fetch_array($result)){
		//do something as long as there's a remaining row.
		$rows[] = $row;
	}

	return $rows;
}


function deleteAdmin(){
  $conn = myConnect();
  $id = $_GET['deleteID'];
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
	$connect = myConnect();
	session_start();

	$profile = $_SESSION['profile']['AdminID'];
	$oldPassword = $_POST['inputOldPassword'];
	$newPassword = $_POST['inputNewPassword'];
	$confPassword = $_POST['inputConfPassword'];

	$sql = ("SELECT * FROM admins WHERE AdminID = $profile");
	$result = mysqli_query($connect,$sql);

	if($result){
		$sql2 = ("UPDATE admins SET Password = md5($newPassword) WHERE AdminID = $profile");
		$result2 = mysqli_query($connect,$sql2);
		header("Location:../views/home.php");
	}

}









function displayReport(){


	$connection = connectsql();
	$sql = "SELECT * FROM reports";
	$result = mysqli_query($connection, $sql);

	while($row=mysqli_fetch_array($result)){
		//do something as long as there's a remaining row.
		$rows[] = $row;
	}

	return $rows;
}


function visitCounter(){

	$connect = connectsql();
	$sql = ("UPDATE visitcounter SET counter=counter+1 WHERE name='Visit Counter'");
	$result = mysqli_query($connect, $sql);

	$sql2 = ("SELECT * FROM visitcounter WHERE name='Visit Counter'");
	$result2 = mysqli_query($connect, $sql2);
	
	while($row = mysqli_fetch_array($result2)) {
			$testing = $row['counter'];
	}

	return $testing;
}


function displayAddNewPage(){


	$connection = connectsql();
	$sql = "SELECT * FROM activity WHERE activity = 'Add Page' ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($connection, $sql);

	$row = mysqli_fetch_row($result);
	return $row;
}

function displayAddAdmin(){


	$connection = connectsql();
	$sql = "SELECT * FROM activity WHERE activity = 'Add Admin' ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($connection, $sql);

	$row = mysqli_fetch_row($result);
	return $row;
}

function displayNewArticle(){


	$connection = connectsql();
	$sql = "SELECT * FROM activity WHERE activity = 'New Article' ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($connection, $sql);

	$row = mysqli_fetch_row($result);
	return $row;
}

function displayEditArticle(){


	$connection = connectsql();
	$sql = "SELECT * FROM activity WHERE activity = 'Edit Article' ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($connection, $sql);

	$row = mysqli_fetch_row($result);
	return $row;
}

function displayApproveArticle(){


	$connection = connectsql();
	$sql = "SELECT * FROM activity WHERE activity = 'Approve Article' ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($connection, $sql);

	$row = mysqli_fetch_row($result);
	return $row;
}

