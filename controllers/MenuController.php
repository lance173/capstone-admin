<?php  

function loadMenuItems(){
   $conn = myConnect();
   $sql = "SELECT * FROM menu ORDER BY Position ASC";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return $rows;  
}

function loadMenuDropdown(){
   $conn = myConnect();
   $sql = "SELECT * FROM menu_dropdown";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return $rows;  
}

function countItemsInMenu(){
   $conn = myConnect();
   $sql = "SELECT * FROM menu";

   if ($result=mysqli_query($conn,$sql))
   {
   // Return the number of rows in result set
   $rowcount=mysqli_num_rows($result);
   }

   return $rowcount;

}