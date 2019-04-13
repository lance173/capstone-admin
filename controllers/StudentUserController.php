<?php require('MysqlConnect.php'); ?> 

<?php
	if(isset($_POST['btnAddStudentUser'])){
			addStudentUser();
		}
	if(isset($_GET['deleteID'])){
			deleteStudent();
	}
	if(isset($_GET['unblockID'])){
		unblockStudent();
	}
?>

<?php
function addStudentUser(){
		$conn = myConnect();

	if(isset($_POST['btnAddStudentUser'])){

		$id_number = $_POST['id_number'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$course = $_POST['course'];
		$yearlvl = $_POST['yearlvl'];
		$password = $_POST['id_number'];
		$status = "CLEARED";
		$student_photo = "../assets/img/studentusers-images/default-avatar.jpg";

		if(isset($_FILES['student_photo'])){
			$errors= array();
			$file_name = $_FILES['student_photo']['name'];
			$file_size =$_FILES['student_photo']['size'];
			$file_tmp =$_FILES['student_photo']['tmp_name'];
			$file_type=$_FILES['student_photo']['type'];
			$file_ext=strtolower(end(explode('.',$_FILES['student_photo']['name'])));

			$extensions= array("jpeg","jpg","png");

			if(in_array($file_ext,$extensions)=== false){
			 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
			}

			if(empty($errors)){
			$student_photo = "../assets/img/studentusers-images/".$file_name;
			move_uploaded_file($file_tmp, $student_photo);
			}else{
			
			}
		} 

		

		$sql =  "INSERT INTO students(USCIDNo, FirstName, LastName, Password, Course, YearLevel, Status, Photo) VALUES ('$id_number', '$firstname', '$lastname', '$password', '$course', '$yearlvl', '$status', '$student_photo')";
		
		$result = mysqli_query($conn,$sql);       
		if($result){
				$str="Student successfully added!";
				header("Location: ../views/add-userstudent.php?success-msg=".$str);
			}else{
				echo "Error!!!! ".mysqli_error($conn);
			} 
	}
}

function deleteStudent(){
	$conn = myConnect();
	$id = $_GET['deleteID'];
	$sql = "DELETE FROM students WHERE StudentID = '$id'";
	$result = mysqli_query($conn,$sql);
	if($result){
			$str = "Student Successfully Deleted.";
			header("Location: ../views/students-table.php?success-msg=".$str);
	}else{
			echo "ERROR!".mysqli_error($conn);
	}

}

function loadAllStudents(){
	 $conn = myConnect();
	 $sql = "SELECT * FROM students";
	 $result = mysqli_query($conn, $sql);

	 while($row=mysqli_fetch_array($result)){
			//do something as long as there's a remaining row.
			$rows[] = $row;
	 }
	 return $rows;  
}


function loadClearedStudents(){
	 $conn = myConnect();
	 $sql = "SELECT * FROM students WHERE Status = 'CLEARED'";
	 $result = mysqli_query($conn, $sql);

	 while($row=mysqli_fetch_array($result)){
			//do something as long as there's a remaining row.
			$rows[] = $row;
	 }
	 return $rows;  
}

function loadBlockedStudents(){
	 $conn = myConnect();
	 $sql = "SELECT * FROM students WHERE Status = 'BLOCKED'";
	 $result = mysqli_query($conn, $sql);

	 while($row=mysqli_fetch_array($result)){
			//do something as long as there's a remaining row.
			$rows[] = $row;
	 }
	 return $rows;  
}

function unblockStudent(){
	$conn = myConnect();
	$id = $_GET['unblockID'];
	$sql = "UPDATE students SET Status = 'CLEARED' WHERE StudentID  = '$id'";
	$result = mysqli_query($conn,$sql);
	if($result){
			$str = "Student is now Unblocked.";
			header("Location: ../views/students-table.php?success-msg=".$str);
	}else{
			echo "ERROR!".mysqli_error($conn);
	}

}

function countStudentUsers(){
	$conn = myConnect();
	$result = mysqli_query($conn, "SELECT COUNT(*) AS `count` FROM `Students`");
	$row = mysqli_fetch_array($result);
	$count = $row['count'];

	return $count;
}
?>
