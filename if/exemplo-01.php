<?php
$idadeCrianca = 12;
$idadeMaior = 18;

$suaIdade = 18;

    if($suaIdade <= $idadeCrianca) {
        echo "Criança";
    }else if($suaIdade < $idadeMaior){ //else if e elseif dão o mesmo resultado
        echo "Adolescente";
    }elseif($suaIdade >= $idadeMaior){
        echo "Adulto";
    }

    echo "<br>";

    echo ($suaIdade >= $idadeMaior)?"Maior de idade":"Menor de idade";
?>