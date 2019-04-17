<?php require('MysqlConnect.php'); 

function countStudentUsers(){
	$conn = myConnect();
	$result = mysqli_query($conn, "SELECT COUNT(*) AS `count` FROM `Students`");
	$row = mysqli_fetch_array($result);
	$count = $row['count'];

	return $count;
}

function countVisits(){
	$conn = myConnect();
	$sql = ("SELECT * FROM visitcounter WHERE name='Visit Counter'");
	$result = mysqli_query($conn, $sql);
	
	while($row = mysqli_fetch_array($result)) {
			$visits = $row['counter'];
	}

	return $visits;
}

function loadArticlesToHome(){
   $conn = myConnect();
   $sql = "SELECT articles.ArticleID, articles.Title, articles.FeaturePhoto, articles.Content, articles.DatePublished, articles.Status, articles.AdminID, admins.AdminID, admins.FirstName, admins.LastName FROM 
   articles INNER JOIN admins on articles.AdminID = admins.AdminID WHERE Status = 'PUBLISHED' ORDER BY DatePublished DESC LIMIT 4";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return (isset($rows)) ? $rows : NULL;  
}

function loadActivitiesToHome(){
   $conn = myConnect();
   $sql = "SELECT activities.ActivityID, activities.AdminID, activities.Activity, activities.BoldText, activities.ActivityCode, activities.DateDone, admins.AdminID, admins.FirstName, admins.LastName FROM activities INNER JOIN admins on activities.AdminID = admins.AdminID ORDER BY DateDone DESC LIMIT 4";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return (isset($rows)) ? $rows : NULL;   
}

?> 
