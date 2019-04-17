<?php require_once('MysqlConnect.php'); 


function loadReports(){
	$conn = myConnect();
	$sql

	$result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return $rows;  
}