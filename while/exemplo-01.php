<?php
    $i = 1;
    while($i <10){
        
        echo "$i <br>";$i++;
    }

    echo "<br>";

    $cond = true;

    while($cond){
        $n = rand(1, 10);
        echo $n;

        if($n === 3) {
            echo "Três: condição false";
            $cond = false;
        }
    }
?>