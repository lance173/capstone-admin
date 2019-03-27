<?php
    

	date_default_timezone_set("Asia/Manila");
	echo "Today is " . date("F d, Y • h:i A") . "<br> <br>";
?>



<script type="text/javascript">


  
        var w = "clickmnitm0";
        var num = parseInt(w.match(/\d+$/));
        var pos = w.indexOf(num);
    	var str = w.slice(0,pos);
      	
 
      	var n;

      	for (n=1;n<=5;n++){
        num++;
        w = str + num;
        document.write( w );
    	}

        


      
</script>