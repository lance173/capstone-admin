<?php require('MysqlConnect.php'); 

function loadActivities(){
   $conn = myConnect();
   $sql = "SELECT activities.ActivityID, activities.AdminID, activities.Activity, activities.BoldText, activities.ActivityCode, activities.DateDone, admins.AdminID, admins.Photo, admins.FirstName, admins.LastName FROM activities INNER JOIN admins on activities.AdminID = admins.AdminID ORDER BY DateDone DESC";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return (isset($rows)) ? $rows : NULL;   
}

?>