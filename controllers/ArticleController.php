<?php require_once('MysqlConnect.php'); ?> 

<?php
if(isset($_POST['btnAddArticle'])){
      addArticle();
    }
if(isset($_GET['approveID'])){
      approvePendingArticle();
}
if(isset($_GET['deleteID'])){
      deleteArticle();
}
if(isset($_POST['btnEditArticle'])){
      updateArticle();
}

function addArticle(){
    $conn = myConnect();
   
	if(isset($_POST['btnAddArticle'])){

		$title = $_POST['title'];
		$content = $_POST['content'];
		$status = "PENDING";
		$datewritten = Date("Y/m/d H:i:s");
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
	        $featureimage = "../assets/img/post-featureimages/".$file_name;
	        move_uploaded_file($file_tmp, $featureimage);
	        }else{
	        
	        }
	      }

	    //For Activity Log
	    session_start();
		$AdminID = $_SESSION['profile']['AdminID'];
	    $Activity = "added a new article";
	    $BoldText = $title;
	    $ActivityCode = "Add Article";
	    $sql2 = "INSERT INTO activities(AdminID, Activity, BoldText, ActivityCode, DateDone) VALUES('$AdminID', '$Activity', '$BoldText', '$ActivityCode', NOW() ) " ;
		$result2 = mysqli_query($conn, $sql2);

		$sql = "INSERT INTO articles(Title, FeaturePhoto, Content, DateWritten, Status, AdminID) VALUES ('$title', '$featureimage', '".mysqli_real_escape_string($conn,$content)."', '$datewritten', '$status', '$publisher')";

		$result = mysqli_query($conn,$sql);    
		if($result){
		      $str="Article successfully added!";
		      header("Location: ../views/add-article.php?success-msg=".$str);
	     	}else{
		      echo "Error!!!! ".mysqli_error($conn);
		    }	
	}
}

function loadPublishedArticles(){
   $conn = myConnect();
   $sql = "SELECT articles.ArticleID, articles.Title, articles.FeaturePhoto, articles.Content, articles.DatePublished, articles.Status, articles.AdminID, admins.AdminID, admins.FirstName, admins.LastName FROM 
   articles INNER JOIN admins on articles.AdminID = admins.AdminID WHERE Status = 'PUBLISHED' ORDER BY DatePublished DESC";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return (isset($rows)) ? $rows : NULL;   
}

function loadPendingArticles(){
   $conn = myConnect();
   $sql = "SELECT articles.ArticleID, articles.Title, articles.FeaturePhoto, articles.Content, articles.DateWritten, articles.Status, articles.AdminID, admins.AdminID, admins.FirstName, admins.LastName FROM 
   articles INNER JOIN admins on articles.AdminID = admins.AdminID WHERE Status = 'PENDING' ORDER BY DateWritten DESC";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return (isset($rows)) ? $rows : NULL;   
}

function approvePendingArticle(){
	$conn = myConnect();
	$id = $_GET['approveID'];
	$datepublished = Date("Y/m/d H:i:s");

	$findArticle = mysqli_query($conn, "SELECT * FROM articles WHERE ArticleID = '$id'");
	$Article = mysqli_fetch_assoc($findArticle);
	$ArticleTitle = $Article['Title'];

	//For Activity Log
	session_start();
    $AdminID = $_SESSION['profile']['AdminID'];
    $Activity = "approved article";
    $BoldText = "$ArticleTitle" ;
    $ActivityCode = "Approve Article";
    $sql2 = "INSERT INTO activities(AdminID, Activity, BoldText, ActivityCode, DateDone) VALUES('$AdminID', '$Activity', '$BoldText', '$ActivityCode', NOW() ) " ;
	$result2 = mysqli_query($conn, $sql2);


	$sql = "UPDATE articles SET Status ='PUBLISHED', DatePublished ='$datepublished' WHERE ArticleID ='$id'";
	$result = mysqli_query($conn,$sql);
	if($result){
  	$str="Article successfully published!";
  	header("Location:../views/articles-table.php?success-msg=".$str);
	}
	else{
	  echo "ERROR!".mysqli_error($conn);
	}
}

function viewArticleToEdit($id){
	$conn = myConnect();
	$sql = "SELECT articles.ArticleID, articles.Title, articles.FeaturePhoto, articles.Content, articles.DateWritten, articles.Status, articles.AdminID, admins.AdminID, admins.FirstName, admins.LastName FROM 
   articles INNER JOIN admins on articles.AdminID = admins.AdminID WHERE ArticleID = '$id' LIMIT 1 ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row;
}

function updateArticle(){
	$conn = myConnect();
	$id = $_POST['articleID'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	
	$photo = mysqli_query($conn, "SELECT * FROM articles WHERE ArticleID= '$id' LIMIT 1") or die ('Error: '.mysql_error ());
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

    //For Activity Log
    session_start();
	$AdminID = $_SESSION['profile']['AdminID'];
    $Activity = "edited article";
    $BoldText = $title;
    $ActivityCode = "Edit Article";
    $sql2 = "INSERT INTO activities(AdminID, Activity, BoldText, ActivityCode, DateDone) VALUES('$AdminID', '$Activity', '$BoldText', '$ActivityCode', NOW() ) " ;
	$result2 = mysqli_query($conn, $sql2);

	$sql = "UPDATE articles SET 
	Title='$title', Content='$content', FeaturePhoto='$featureimage' WHERE ArticleID = '$id'";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		$str="Article successfully updated!";
		header('Location:../views/edit-article.php?editID='.$id.'&success-msg='.$str);
		}
		else{
			echo "ERROR UPDATING ARTICLE.".mysqli_error($conn);
		}  
}

function deleteArticle(){
	$conn = myConnect();
	$id = $_GET['deleteID'];

	$findArticle = mysqli_query($conn, "SELECT * FROM articles WHERE ArticleID = '$id'");
	$Article = mysqli_fetch_assoc($findArticle);
	$ArticleTitle = $Article['Title'];

	//For Activity Log
	session_start();
    $AdminID = $_SESSION['profile']['AdminID'];
    $Activity = "deleted article";
    $BoldText = "$ArticleTitle" ;
    $ActivityCode = "Delete Article";
    $sql2 = "INSERT INTO activities(AdminID, Activity, BoldText, ActivityCode, DateDone) VALUES('$AdminID', '$Activity', '$BoldText', '$ActivityCode', NOW() ) " ;
	$result2 = mysqli_query($conn, $sql2);

	$sql = "DELETE FROM articles WHERE ArticleID ='$id'";
	$result = mysqli_query($conn,$sql);
	if($result){
	$str="Article successfully deleted!";
	header("Location:../views/articles-table.php?success-msg=".$str);
	}
	else{
	  echo "ERROR!".mysqli_error($conn);
	}
}

?>