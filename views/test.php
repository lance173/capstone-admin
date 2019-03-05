<?php
    require('../controllers/MysqlConnect.php');


   function loadSliderItems(){
	   $conn = myConnect();
	   $sql = "SELECT * FROM slider WHERE SliderID = 1 LIMIT 1";
	   $result = mysqli_query($conn, $sql);
	   $row = mysqli_fetch_assoc($result);	   
    	return $row;  	   	
	}


		$slide = loadSliderItems();

		echo $slide['FirstSlideTitle'];
		?> <br> <?php
		echo $slide['FirstSlideImage'];
		?> <br> <?php
		echo $slide['FirstSlideDescription'];
		?> <br> <?php
		echo $slide['SecondSlideTitle'];
		?> <br> <?php
		echo $slide['SecondSlideImage'];
		?> <br> <?php
		echo $slide['SecondSlideDescription'];
		?> <br> <?php
		echo $slide['ThirdSlideTitle'];
?>