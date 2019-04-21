<?php require_once('MysqlConnect.php'); 


function loadAllReports(){
	$conn = myConnect();
	$sql = "SELECT reports.reportID, reports.ArticleID, reports.Reason,  offender.FirstName as OffenderFirstName, offender.LastName as OffenderLastName FROM reports INNER JOIN  students offender on reports.ReportedUser = offender.StudentID ";

	$result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return (isset($rows)) ? $rows : NULL;   
}

function showReportUser(){
	$conn = myConnect();
	$sql = "SELECT reports.reportID, reports.ArticleID, reports.Reason,  offender.FirstName as OffenderFirstName, offender.LastName as OffenderLastName,  reporter.FirstName as ReporterFirstName, reporter.LastName as ReporterLastName, reports.CommentID, reports.DateReported  FROM reports INNER JOIN  students offender on reports.ReportedUser = offender.StudentID ";

	$result = mysqli_query($conn, $sql);
}