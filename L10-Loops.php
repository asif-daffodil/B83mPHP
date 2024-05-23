<?php  
    $x = 0;
    while($x < 10){
        echo $x;
        $x++;
    }
    echo "<br>";

    for($i = 0; $i < 5000; $i++){
        if($i >= 533 && $i % 533 == 0){
            echo $i."<br>";
        }
    }
?>