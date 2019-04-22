<?php  
require_once('MysqlConnect.php'); 

function loadMenuItems(){
   $conn = myConnect();
   $sql = "SELECT menu.MenuItemID, menu.Position, menu.Type, menu.PageLink, menu.WebPageID, IF(webpages.WebPageID IS NOT NULL, webpages.PageTitle, menu.ItemName) AS ItemName  FROM menu  left join webpages on webpages.WebPageID = menu.WebPageID ORDER BY menu.Position ASC";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return $rows;  
}

function loadMenuDropdown(){
   $conn = myConnect();
   $sql = "SELECT menu_dropdown.DropItemID, menu_dropdown.PageLink,menu_dropdown.MenuID,menu_dropdown.WebPageID,  IF(webpages.WebPageID IS NOT NULL, webpages.PageTitle, menu_dropdown.DropItemName) AS DropItemName FROM menu_dropdown  left join webpages on webpages.WebPageID = menu_dropdown.WebPageID ";
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

function getMenuItems() {
   $keyId = $_POST['id'];

   $conn = myConnect();
   $sql = "SELECT menu.MenuItemID, menu.Position, menu.Type, menu.PageLink, menu.WebPageID, IF(webpages.WebPageID IS NOT NULL, webpages.PageTitle, menu.ItemName) AS ItemName  FROM menu  left join webpages on webpages.WebPageID = menu.WebPageID WHERE MenuItemID = '$keyId' LIMIT 1";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);

   if($row['Type'] === 'Dropdown'){
      $dropdownSql = "SELECT menu_dropdown.DropItemID, menu_dropdown.PageLink,menu_dropdown.MenuID,menu_dropdown.WebPageID,  IF(webpages.WebPageID IS NOT NULL, webpages.PageTitle, menu_dropdown.DropItemName) AS DropItemName FROM menu_dropdown  left join webpages on webpages.WebPageID = menu_dropdown.WebPageID WHERE menu_dropdown.MenuID = {$keyId}";
      $dropdownResult = mysqli_query($conn, $dropdownSql);
      $dropdown = mysqli_fetch_all($dropdownResult, MYSQLI_ASSOC);
   }

   if(isset($dropdown)){
      $row['DropdownItems'] = $dropdown;
   }


   echo json_encode([
      'response' => true,
      'data' => $row
   ]);
}

function saveMenuItem() {
    
   $post = $_POST;
   $dropdownItems = isset($_POST['DropdownItems']) && count($_POST['DropdownItems']) ?$_POST['DropdownItems'] : null;
   unset($post['DropdownItems']);

   $columns = array_keys($post);
   $values = array_values($post);

   $sql = "INSERT INTO `menu`(`".implode('`, `', $columns)."`) VALUES ('".implode("','", $values)."')";

    $conn = myConnect();
    // mysqli_query($conn,$sql);
    $result = mysqli_query($conn,$sql);      

    $lastid = mysqli_insert_id($conn); 

    if($dropdownItems){
      foreach ($dropdownItems as $items) {
         $items['MenuID'] = $lastid;
          $columns = array_keys($items);
          $values = array_values($items);

          $sql = "INSERT INTO `menu_dropdown`(`".implode('`, `', $columns)."`) VALUES ('".implode("','", $values)."')";
          mysqli_query($conn,$sql);  
      }
    } else {
      
    }

    //For Activity Log
    session_start();    
    $Activity = "edited";
    $BoldText = "the Menu";
    $ActivityCode = "Edit MenuBar";
    $AdminPhoto = $_SESSION['profile']['Photo'];
    $AdminName = $_SESSION['profile']['FirstName'].' '.$_SESSION['profile']['LastName'];
    $sql2 = "INSERT INTO activities(AdminPhoto, AdminName, Activity, BoldText, ActivityCode, DateDone) VALUES('$AdminPhoto', '$AdminName', '$Activity', '$BoldText', '$ActivityCode', NOW() ) " ;
    $result2 = mysqli_query($conn, $sql2);

    echo json_encode([
      'result' => true
   ]);

   // if($result){
   //    $str="Item successfully added to menu.";
   //    header("Location: ../views/menu-editor.php?success-msg=".$str);
   // } else {
   //    echo "Error!!!! ".mysqli_error($conn);
   // }

}

function editMenuItem() {
   // return;

   $post = $_POST;
   $id = $_POST['MenuItemID'];
   $dropdownItems = isset($_POST['DropdownItems']) && count($_POST['DropdownItems']) ?$_POST['DropdownItems'] : null;
   unset($post['DropdownItems'], $post['MenuItemID']);

   $updateStatement = array_map(function ($value, $key) {
      return "`{$key}` = '{$value}'";
   }, array_values($post), array_keys($post));

   $sql = "UPDATE `menu` set  " . implode(', ', $updateStatement). " WHERE MenuItemID = '{$id}'";

   // die($sql);  

      $conn = myConnect();
    // mysqli_query($conn,$sql);
    $result = mysqli_query($conn,$sql);      

    // $updatePositionSql = "UPDATE menu SET Position  = Position + 1 WHERE Position >= {$post['Position']} AND MenuItemID != {$id}";
    //  $result = mysqli_query($conn,$updatePositionSql);

    if($dropdownItems){
      mysqli_query($conn, "DELETE FROM menu_dropdown WHERE MenuID = {$id}");  
      foreach ($dropdownItems as $items) {
         $items['MenuID'] = $id;
          $columns = array_keys($items);
          $values = array_values($items);

          $sql = "INSERT INTO `menu_dropdown`(`".implode('`, `', $columns)."`) VALUES ('".implode("','", $values)."')";
          mysqli_query($conn,$sql);  
      }
    } else {
      
    }

    //For Activity Log
    session_start();    
    $Activity = "edited";
    $BoldText = "the Menu";
    $ActivityCode = "Edit MenuBar";
    $AdminPhoto = $_SESSION['profile']['Photo'];
    $AdminName = $_SESSION['profile']['FirstName'].' '.$_SESSION['profile']['LastName'];
    $sql2 = "INSERT INTO activities(AdminPhoto, AdminName, Activity, BoldText, ActivityCode, DateDone) VALUES('$AdminPhoto', '$AdminName', '$Activity', '$BoldText', '$ActivityCode', NOW() ) " ;
    $result2 = mysqli_query($conn, $sql2);

    echo json_encode([
      'result' => true
   ]);

}

function deleteMenu () 
{
   $id = $_POST['MenuItemID'];
   $conn = myConnect();
    mysqli_query($conn, "DELETE FROM menu WHERE MenuItemID = {$id}");  

    //For Activity Log
    session_start();    
    $Activity = "edited";
    $BoldText = "the Menu";
    $ActivityCode = "Edit MenuBar";
    $AdminPhoto = $_SESSION['profile']['Photo'];
    $AdminName = $_SESSION['profile']['FirstName'].' '.$_SESSION['profile']['LastName'];
    $sql2 = "INSERT INTO activities(AdminPhoto, AdminName, Activity, BoldText, ActivityCode, DateDone) VALUES('$AdminPhoto', '$AdminName', '$Activity', '$BoldText', '$ActivityCode', NOW() ) " ;
    $result2 = mysqli_query($conn, $sql2);

     echo json_encode([
      'result' => true
   ]);

}



$function_name = isset($_GET['function']) ? $_GET['function'] : null;

switch ($function_name) {
   case 'getMenuByItem':
      getMenuItems();
      break;

   case 'saveMenuItem':
      saveMenuItem();
      break;

   case 'editMenuItem':
      editMenuItem();
      break;

   case 'deleteMenu':
      deleteMenu();
      break;
   
   default:
      break;
}