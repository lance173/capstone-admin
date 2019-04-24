<?php require('MysqlConnect.php');  


if(isset($_POST['btnEditSlider'])){
	editSlider();
}

function loadSliderItems(){
	$conn = myConnect();
	$sql = "SELECT * FROM slider WHERE SliderID = 1 LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);	   
	return $row;  	   	
}

function editSlider(){

	$conn = myConnect();
	$firstslidertitle = $_POST['firsttitle'];
	$secondslidertitle = $_POST['secondtitle'];
	$thirdslidertitle = $_POST['thirdtitle'];
	$firstsliderdescription = $_POST['firstdescription'];
	$secondsliderdescription = $_POST['seconddescription'];
	$thirdsliderdescription = $_POST['thirddescription'];

	$image_row = loadSliderItems();

	$firstsliderimage = $image_row['FirstSlideImage'];
	$secondsliderimage = $image_row['SecondSlideImage'];
	$thirdsliderimage = $image_row['FirstSlideImage'];
	

      if(isset($_FILES['firstimage'])){
        $errors= array();
        $file_name = $_FILES['firstimage']['name'];
        $file_size =$_FILES['firstimage']['size'];
        $file_tmp =$_FILES['firstimage']['tmp_name'];
        $file_type=$_FILES['firstimage']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['firstimage']['name'])));

        $extensions= array("jpeg","jpg","png");

        if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }

        if(empty($errors)){
        $firstsliderimage = "../assets/img/slider/".$file_name;
        move_uploaded_file($file_tmp, $firstsliderimage);
        }else{
        
        }
      }

     if(isset($_FILES['secondimage'])){
        $errors= array();
        $file_name = $_FILES['secondimage']['name'];
        $file_size =$_FILES['secondimage']['size'];
        $file_tmp =$_FILES['secondimage']['tmp_name'];
        $file_type=$_FILES['secondimage']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['secondimage']['name'])));

        $extensions= array("jpeg","jpg","png");

        if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }

        if(empty($errors)){
        $secondsliderimage = "../assets/img/slider/".$file_name;
        move_uploaded_file($file_tmp, $secondsliderimage);
        }else{
        
        }
      }

      if(isset($_FILES['thirdimage'])){
        $errors= array();
        $file_name = $_FILES['thirdimage']['name'];
        $file_size =$_FILES['thirdimage']['size'];
        $file_tmp =$_FILES['thirdimage']['tmp_name'];
        $file_type=$_FILES['thirdimage']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['thirdimage']['name'])));

        $extensions= array("jpeg","jpg","png");

        if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }

        if(empty($errors)){
        $thirdsliderimage = "../assets/img/slider/".$file_name;
        move_uploaded_file($file_tmp, $thirdsliderimage);
        }else{
        
        }
      }

	$sql = "UPDATE slider SET 
	FirstSlideTitle='$firstslidertitle', SecondSlideTitle='$secondslidertitle', ThirdSlideTitle='$thirdslidertitle', FirstSlideDescription='$firstsliderdescription', SecondSlideDescription='$secondsliderdescription', ThirdSlideDescription='$thirdsliderdescription', FirstSlideImage='$firstsliderimage', SecondSlideImage='$secondsliderimage', ThirdSlideImage='$thirdsliderimage'  WHERE SliderID = 1";
	$result = mysqli_query($conn, $sql);

    //For Activity Log
    session_start();
    $Activity = "edited";
    $BoldText = "the Slider";
    $ActivityCode = "Edit Slider";
    $AdminID = $_SESSION['profile']['AdminID'];
    $sql2 = "INSERT INTO activities(AdminID, Activity, BoldText, ActivityCode, DateDone) VALUES('$AdminID', '$Activity', '$BoldText', '$ActivityCode', NOW() ) " ;
    $result2 = mysqli_query($conn, $sql2);


	if($result){
		$str="Slider successfully updated!";
		header("Location:../views/slider-editor.php?success-msg=".$str);
	}
	else{
		echo "ERROR UPDATING ARTICLE.".mysqli_error($conn);
	}  

}

?>