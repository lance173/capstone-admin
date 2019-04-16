<?php require('MysqlConnect.php'); 

if(isset($_POST['btnAddPage'])){
      addWebPage();
    }
if(isset($_GET['deleteID'])){
      deleteWebPage();
	}
if(isset($_GET['restoreID'])){
      restoreWebPage();
	}
if(isset($_GET['binID'])){
      binWebPage();
	}
if(isset($_POST['btnEditPage'])){
      updatePage();
}

function addWebPage(){
    $conn = myConnect();
    session_start();

	if(isset($_POST['btnAddPage'])){

		$title = $_POST['title'];
		$content = $_POST['content'];
		$status = "ACTIVE";
		$date = Date("Y/m/d H:i:s");
		$publisher = $_SESSION['profile']['AdminID'];

    	$featureimage = '';

	      if(isset($_FILES['featureimage'])){
	        $errors= array();
	        $file_name = $_FILES['featureimage']['name'];
	        $file_size =$_FILES['featureimage']['size'];
	        $file_tmp =$_FILES['featureimage']['tmp_name'];
	        $file_type=$_FILES['featureimage']['type'];
	        $file_ext=strtolower(end(explode('.',$_FILES['featureimage']['name'])));

	        $extensions= array("jpeg","jpg","png");

	        if(in_array($file_ext,$extensions)=== false){
	         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
	        }

	        if(empty($errors)){
	        $featureimage = "../assets/img/page-featureimages/".$file_name;
	        move_uploaded_file($file_tmp, $featureimage);
	        }else{
	        
	        }
	      }

		$sql = "INSERT INTO webpages(PageTitle, FeaturePhoto, Content, DateCreated, Status, AdminID) VALUES ('$title', '$featureimage', '".mysqli_real_escape_string($conn,$content)."', '$date', '$status', '$publisher')";

		$result = mysqli_query($conn,$sql);    
		if($result){
		      $str="Page successfully added!";
		      header("Location: ../views/add-webpage.php?success-msg=".$str);
	     	}else{
		      echo "Error!!!! ".mysqli_error($conn);
		    }	
	}
}

function loadActivePages(){
   $conn = myConnect();
   $sql = "SELECT webpages.WebPageID, webpages.PageTitle, webpages.FeaturePhoto, webpages.Content, webpages.DateCreated, webpages.Status, webpages.AdminID, admins.AdminID, admins.FirstName, admins.LastName FROM 
   webpages INNER JOIN admins on webpages.AdminID = admins.AdminID WHERE Status = 'ACTIVE' ORDER BY DateCreated DESC";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return $rows;  
}

function loadPageBin(){
   $conn = myConnect();
   $sql = "SELECT webpages.WebPageID, webpages.PageTitle, webpages.FeaturePhoto, webpages.Content, webpages.DateCreated, webpages.Status, webpages.AdminID, admins.AdminID, admins.FirstName, admins.LastName FROM 
   webpages INNER JOIN admins on webpages.AdminID = admins.AdminID WHERE Status = 'BIN' ORDER BY DateCreated DESC";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return $rows;  
}



function deleteWebPage(){
	$conn = myConnect();
	$id = $_GET['deleteID'];
	$sql = "DELETE FROM webpages WHERE WebPageID ='$id'";
	$result = mysqli_query($conn,$sql);
	if($result){
	$str="Page successfully deleted!";
	header("Location:../views/webpage-table.php?success-msg=".$str);
	}
	else{
	  echo "ERROR!".mysqli_error($conn);
	}
}

function restoreWebPage(){
	$conn = myConnect();
	$id = $_GET['restoreID'];
	$sql = "UPDATE webpages SET Status='ACTIVE' WHERE WebPageID ='$id'";
	$result = mysqli_query($conn,$sql);
	if($result){
	$str="Page successfully restored!";
	header("Location:../views/webpage-table.php?success-msg=".$str);
	}
	else{
	  echo "ERROR!".mysqli_error($conn);
	}
}

function binWebPage(){
	$conn = myConnect();
	$id = $_GET['binID'];
	$sql = "UPDATE webpages SET Status='BIN' WHERE WebPageID ='$id'";
	$result = mysqli_query($conn,$sql);
	if($result){
	$str="Page placed to bin";
	header("Location:../views/webpage-table.php?success-msg=".$str);
	}
	else{
	  echo "ERROR!".mysqli_error($conn);
	}
}

function viewPageToEdit($id){
	$conn = myConnect();
	$sql = "SELECT webpages.WebPageID, webpages.PageTitle, webpages.FeaturePhoto, webpages.Content, webpages.DateCreated, webpages.Status, webpages.AdminID, admins.AdminID, admins.FirstName, admins.LastName FROM 
   webpages INNER JOIN admins on webpages.AdminID = admins.AdminID WHERE WebPageID= '$id' LIMIT 1 ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row;
}

function updatePage(){
	$conn = myConnect();
	$id = $_POST['webpageID'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	
	$photo = mysqli_query($conn, "SELECT * FROM webpages WHERE WebPageID= '$id' LIMIT 1") or die ('Error: '.mysql_error ());
		while($row = mysqli_fetch_array($photo))
		{
		  $featureimage = $row['FeaturePhoto'];		 
		}

      if(isset($_FILES['featureimage'])){
        $errors= array();
        $file_name = $_FILES['featureimage']['name'];
        $file_size =$_FILES['featureimage']['size'];
        $file_tmp =$_FILES['featureimage']['tmp_name'];
        $file_type=$_FILES['featureimage']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['featureimage']['name'])));

        $extensions= array("jpeg","jpg","png");

        if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }

        if(empty($errors)){
        $featureimage = "../assets/img/post-featureimages/".$file_name;
        move_uploaded_file($file_tmp, $featureimage);
        }else{
        
        }
      }

	$sql = "UPDATE webpages SET 
	PageTitle='$title', Content='$content', FeaturePhoto='$featureimage' WHERE WebPageID = '$id'";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		$str="Page successfully updated!";
		header('Location:../views/edit-webpage.php?editID='.$id.'&success-msg='.$str);
		}
		else{
			echo "ERROR UPDATING PAGE.".mysqli_error($conn);
		}  
}

?>