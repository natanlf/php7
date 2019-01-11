<?php
    $frase = "Não quero escrever muito";
    $q = strpos($frase, "escrever"); //retorna a posição de onde começa a palavra
    echo $q;

    echo substr($frase, 0, $q); //queremos tudo que está antes da palavra escrever
    echo "<br>";
    echo substr($frase, $q);
    echo strlen("oi"); //quantidade de caracteres da palavra oi
?>