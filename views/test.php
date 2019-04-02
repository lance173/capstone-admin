<?php

function myConnect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="test";
    

    static $conn;
    $conn = mysqli_connect($servername, $username, $password,$db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        //echo "Connected successfully";    
    }
        return $conn;
    }

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
    
    // $valOfPostn = 2;
    // for($m = 1; $m < 6; $m++){

    // 	echo $valOfPostn ."<br>"; 
    // 	$valOfPostn++;
    // }
    // echo "<br> <br>";

   

    function loadTestTable(){
       $conn = myConnect();
       $sql = "SELECT * FROM trytable ORDER BY Position ASC";
       $result = mysqli_query($conn, $sql);

       while($row=mysqli_fetch_array($result)){
          //do something as long as there's a remaining row.
          $rows[] = $row;
       }
       return $rows;  
    }

    if(isset($_POST['btnChangePos'])){
      switchPosition();
}
    
    function switchPosition(){
        if(isset($_POST['btnChangePos'])){
            $newPosition = $_POST['newposition'];
            $currentPos= $_POST['changePosOf'];

            $conn = myConnect();
            $sql = "SELECT * FROM trytable WHERE Position = '$currentPos' LIMIT 1";
            $result = mysqli_query($conn, $sql);

            $n = mysqli_fetch_row($result);
            $x = $n[2];

            $sql = "UPDATE trytable SET Position = 0 WHERE TryID = '$n[0]' ";
            $result = mysqli_query($conn, $sql);

            // $xplusone = $n[2] + 1;

            if($x < $newPosition){

                for($i = $newPosition; $i > $x; $i--){
                    $y = $i - 1;
                    $w = $y - 1;
                    $sql = "UPDATE trytable SET Position = '$w' WHERE Position = '$y'";
                    $result = mysqli_query($conn, $sql);
                    // echo $y." ".$i ."<br>";
                    // // echo $i."<br>";
                }
                        
            } elseif ($x > $newPosition) {
                for($i = $newPosition; $i < $x; $i++){
                    $y = $i + 1;
                    $w = $y + 1;
                    $sql = "UPDATE trytable SET Position = '$w' WHERE Position = '$y'";
                    $result = mysqli_query($conn, $sql);
                    // echo $y." ".$i."<br>";
                    // echo $i."<br>";
                }
            }


            $sql = "UPDATE trytable SET Position = '$newPosition' WHERE TryID = '$n[0]' ";
            $result = mysqli_query($conn, $sql);

            
            // echo $n[1]."<br>";
            // echo $x;


        }
    }



    $items = loadTestTable();
    // $catch = switchPosition();

    echo "<br> <br>";

    if(isset($items)){foreach($items as $i){
        echo  $i['Position']." ". $i['Name']  ."<br>";
    }} 

?>

    <form method="POST" action="test.php">
        <div>
            <?php  ?>
        <select name="changePosOf" id="selectItemToChange" onchange="hideCurrentPos('<?php echo $sos; ?>')">
            <?php                 
                if(isset($items)){foreach($items as $n){ 
                    if ($n['TryID'] != 1) {   
                    $sos = 0;                     
            ?>
                    <option value="<?php echo $n['Position']; ?>"> <?php echo $n['Name']; ?> </option>
            
            <?php 
            $sos++;
            }}} ?>
        </select>
        <select name="newposition" id="selectPosition">
            <?php if(isset($items)){foreach($items as $v){ ?>
                <option value="<?php echo $v['Position']+1; ?>"> After <?php echo $v['Name']; ?> </option>
            <?php }} ?>
        </select>
        <button type="submit" name="btnChangePos">Go</button>
    </div>
    </form>

<script type="text/javascript">
    
    function hideCurrentPos(tick){
        var x = document.getElementById("selectItemToChange").value;
        var z = document.getElementById("selectPosition").value;
        var w = tick;

        if (x == z) {
            document.getElementById("selectPosition").options[w].hidden = true;
        }
    }

</script>

        


