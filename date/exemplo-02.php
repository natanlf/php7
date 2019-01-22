<?php
    //$ts = strtotime("2001-09-11"); //pega o timestamp dessa data
    $ts = strtotime("now");
    $ts = strtotime("+1 day");
    $ts = strtotime("+1 week");
    echo date("l, d/m/Y", $ts); //l é o dia da semana
?>