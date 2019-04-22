<?php require_once('MysqlConnect.php'); 
if(isset($_GET['viewID'])){
      listReportsOnUser();
	}
if(isset($_GET['viewID'])){
      reportedUserProfile();
	}
if(isset($_GET['blockID'])){
      blockUser();
	}
if(isset($_GET['deleteID'])){
      deleteReport();
	}

function loadAllReports(){
	$conn = myConnect();
	$sql = "SELECT reports.reportID, reports.ReportedUser as OffenderID,  offender.FirstName as OffenderFirstName, offender.LastName as OffenderLastName, COUNT(ReportedUser) as NoOfReports FROM reports INNER JOIN  students offender on reports.ReportedUser = offender.StudentID GROUP BY ReportedUser";

	$result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return (isset($rows)) ? $rows : NULL;   
}

function reportedUserProfile(){
	$conn = myConnect();
	$offender_id = $_GET['viewID'];

	$sql = "SELECT reports.reportID, reports.ReportedUser as OffenderID,  offender.FirstName as OffenderFirstName, offender.LastName as OffenderLastName, offender.Photo as OffenderPhoto, offender.Course as OffenderCourse, offender.YearLevel as OffenderYearLevel, offender.Status as OffenderStatus FROM reports INNER JOIN  students offender on reports.ReportedUser = offender.StudentID WHERE ReportedUser = '$offender_id'";

	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return (isset($row)) ? $row : NULL;
}

function listReportsOnUser(){
	$conn = myConnect();
	$offender_id = $_GET['viewID'];

	$sql = "SELECT reports.reportID, reports.ArticleID, reports.Reason, reports.CommentID, reports.DateReported, reports.ReportedUser as OffenderID, offender.FirstName as OffenderFirstName, offender.LastName as OffenderLastName, offender.Photo as OffenderPhoto, reporter.FirstName as ReporterFirstName, reporter.LastName as ReporterLastName, reporter.Photo as ReporterPhoto, articles.ArticleID, articles.Title, comments.CommentID, comments.Content FROM reports INNER JOIN  students offender on reports.ReportedUser = offender.StudentID LEFT JOIN students reporter on reports.ReporterID = reporter.StudentID LEFT JOIN articles on reports.ArticleID = articles.ArticleID LEFT JOIN comments on reports.CommentID = comments.CommentID WHERE ReportedUser = '$offender_id'";

	$result = mysqli_query($conn, $sql);
	
	while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return (isset($rows)) ? $rows : NULL; 
}

function blockUser(){
	$conn = myConnect();
	$id = $_GET['blockID'];

	$findStudent = mysqli_query($conn, "SELECT * FROM students WHERE StudentID = '$id'");
	$student = mysqli_fetch_assoc($findStudent);
	$id_number = $student['USCIDNo'];
	$firstname = $student['FirstName'];
	$lastname = $student['LastName'];

	//For Activity Log
	session_start();
    $AdminID = $_SESSION['profile']['AdminID'];
    $Activity = "blocked Student User";
    $BoldText = "$id_number - $firstname $lastname" ;
    $ActivityCode = "Block Student";
    $sql2 = "INSERT INTO activities(AdminID, Activity, BoldText, ActivityCode, DateDone) VALUES('$AdminID', '$Activity', '$BoldText', '$ActivityCode', NOW() ) " ;
	$result2 = mysqli_query($conn, $sql2);


	$sql = "UPDATE students SET Status = 'BLOCKED' WHERE StudentID  = '$id'";
	$result = mysqli_query($conn,$sql);

	$sql3 = "DELETE FROM reports WHERE ReportedUser  = '$id'";
	$result3 = mysqli_query($conn,$sql3);
	if($result){
			$str = "Student is now blocked.";
			header("Location: ../views/reported-table.php?success-msg=".$str);
	}else{
			echo "ERROR!".mysqli_error($conn);
	}
}

function deleteReport(){
	$conn = myConnect();
	$id = $_GET['deleteID'];

	$findStudent = mysqli_query($conn, "SELECT * FROM students WHERE StudentID = '$id'");
	$student = mysqli_fetch_assoc($findStudent);
	$id_number = $student['USCIDNo'];
	$firstname = $student['FirstName'];
	$lastname = $student['LastName'];

	//For Activity Log
	session_start();
    $AdminID = $_SESSION['profile']['AdminID'];
    $Activity = "deleted the report of";
    $BoldText = "$id_number - $firstname $lastname" ;
    $ActivityCode = "Delete Report";
    $sql2 = "INSERT INTO activities(AdminID, Activity, BoldText, ActivityCode, DateDone) VALUES('$AdminID', '$Activity', '$BoldText', '$ActivityCode', NOW() ) " ;
	$result2 = mysqli_query($conn, $sql2);

	$sql = "DELETE FROM reports WHERE ReportedUser  = '$id'";
	$result = mysqli_query($conn,$sql);
	if($result){
			$str = "Report successfully deleted.";
			header("Location: ../views/reported-table.php?success-msg=".$str);
	}else{
			echo "ERROR!".mysqli_error($conn);
	}
}