<?php require('MysqlConnect.php'); 

function loadActivities(){
   $conn = myConnect();
   $sql = "SELECT * FROM activities ORDER BY DateDone DESC";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return (isset($rows)) ? $rows : NULL;   
}

?>