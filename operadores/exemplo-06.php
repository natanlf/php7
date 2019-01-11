<?php
    $x = NULL;
    $y = 8;
    $z = 10;

    echo $x ?? $y ?? $z; //pega o primeiro valor que não for nulo
?>