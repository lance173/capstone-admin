<?php require('MysqlConnect.php'); ?> 

<?php
if(isset($_POST['btnAddStudentUser'])){
      addStudentUser();
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
		$status = "Cleared";
		

		$sql =  "INSERT INTO students(USCIDNo, FirstName, LastName, Password, Course, YearLevel, Status) VALUES ('$id_number', '$firstname', '$lastname', '$password', '$course', '$yearlvl', '$status')";
        $result = mysqli_query($conn,$sql);       
		if($result){
	      $str="Student successfully added!";
	      header("Location: ../views/add-userstudent.php");
	      // header("Location:../views/products.php?success-msg=".$str);
     	}else{
	      echo "Error!!!! ".mysqli_error($conn);
	    }	
	}
}

function loadStudents(){
   $conn = myConnect();
   $sql = "SELECT * FROM students";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return $rows;  

}

?>