<?php
    require('../controllers/MysqlConnect.php');


   if(isset($_POST['btnEditArticle'])){
      updateArticle();
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

		 echo 'photo: ' . $featureimage;

		// $featureimage = '';
	 //      if(isset($_FILES['featureimage'])){
	 //        $errors= array();
	 //        $file_name = $_FILES['featureimage']['name'];
	 //        $file_size =$_FILES['featureimage']['size'];
	 //        $file_tmp =$_FILES['featureimage']['tmp_name'];
	 //        $file_type=$_FILES['featureimage']['type'];
	 //        $file_ext=strtolower(end(explode('.',$_FILES['featureimage']['name'])));

	 //        $extensions= array("jpeg","jpg","png");

	 //        if(in_array($file_ext,$extensions)=== false){
	 //         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
	 //        }

	 //        if(empty($errors)){
	 //        $featureimage = "../assets/img/post-featureimages/".$file_name;
	 //        move_uploaded_file($file_tmp, $featureimage);
	 //        }else{
	        
	 //        }
	 //      }

		echo $id; 
		?> <br> <?php
		echo $title;
		?> <br><?php
		// echo $featureimage;
		?> <br> <?php
		echo $content;
	}

?>