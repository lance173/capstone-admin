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
		$featureimage = $_POST['featureimage'];
		$status = "PENDING";
		$publisher = "1";

		$sql = "INSERT INTO articles(Title, FeaturePhoto, Content, Status, AdminID) VALUES ('$title', '$featureimage', '$content', '$status', '$publisher')";

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