<?php
    

	date_default_timezone_set("Asia/Manila");
	echo "Today is " . date("F d, Y • h:i A") . "<br> <br>";

	$x = 2;
    $y = 6;

    $a = 5;
    $b = 3;


    for($i = $y ; $i > $x ; $i--){
    	//call the 
    	echo $i - 1 ."<br>";

    }

    echo "<br> <br>";

    for($n = $b; $n < $a; $n++) {
    	echo $n + 1 ."<br>";
    }

    echo "<br> <br>";
    
    $valOfPostn = 2;
    for($m = 1; $m < 6; $m++){

    	echo $valOfPostn;
    	$valOfPostn++;
    }


?>

    

        


