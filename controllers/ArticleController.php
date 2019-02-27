<?php require('MysqlConnect.php'); ?> 

<?php
if(isset($_POST['btnAddArticle'])){
      addArticle();
    }


function addArticle(){
    $conn = myConnect();

	if(isset($_POST['btnAddArticle'])){

		$title = $_POST['title'];
		$content = $_POST['content'];
		$status = "PENDING";
		$publisher = "1";

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

		$sql = "INSERT INTO articles(Title, FeaturePhoto, Content, Status, AdminID) VALUES ('$title', '$featureimage', '".mysqli_real_escape_string($conn,$content)."', '$status', '$publisher')";

		$result = mysqli_query($conn,$sql);    
		if($result){
		      $str="Article successfully added!";
		      header("Location: ../views/add-article.php");
		      // header("Location:../views/products.php?success-msg=".$str);
	     	}else{
		      echo "Error!!!! ".mysqli_error($conn);
		    }	
	}
}

function loadPublishedArticles(){
   $conn = myConnect();
   $sql = "SELECT * FROM articles WHERE Status = 'PUBLISHED'";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return $rows;  
}

function loadPendingArticles(){
   $conn = myConnect();
   $sql = "SELECT * FROM articles WHERE Status = 'PENDING'";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return $rows;  
}

?>