<?php
    $dt = new DateTime();

    $periodo = new DateInterval("P15D");

    echo $dt->format("d/m/Y H:i:s");
    
    $dt->add($periodo); //somando mais 15 dias na data atual
    echo "<br>";
    echo $dt->format("d/m/Y H:i:s");
?>