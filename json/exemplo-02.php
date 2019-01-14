<?php
    $json = '[{"nome":"Mel","idade":4},{"nome":"Natan","idade":27}]';
    $data =  json_decode($json, true);
    var_dump($data); 
?>