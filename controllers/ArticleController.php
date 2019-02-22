<?php require('MysqlConnect.php'); ?> 

<?php
if(isset($_POST['btnAddArticle'])){
      addArticle();
    }
?>

<?php
function addArticle(){
    $conn = myConnect();

	if(isset($_POST['btnAddArticle'])){

		$title = $_POST['title'];
		$content = $_POST['content'];
		$featureimage = $_POST['featureimage'];
		$status = "PENDING";
		$publisher = "1";

		$sql = "INSERT INTO article(Title, FeaturePhoto, Content, Status, AdminID) VALUES ('$title', '$featureimage', '$content', '$status', '$publisher')";

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
?>