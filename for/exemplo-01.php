<?php
    /*for($i=0; $i < 10; $i++){
        echo $i . "<br>";
    }*/

    for($i=0; $i < 1000; $i+=5){

        if($i >= 200 && $i <= 800) continue; //não interrompe o for, mas não executa o resto do código abaixo ao entrar nessa condição

        if($i === 900) break; //interrompe  laço de repetição

        echo $i . "<br>";
    }
?>